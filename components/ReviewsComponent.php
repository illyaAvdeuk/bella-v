<?php

namespace app\components;
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use app\models\Reviews;
use app\models\ReviewsInfo;
use app\models\ReviewTypes;
use app\models\Tags;
use app\models\TagsAssoc;

class ReviewsComponent extends Component
{
    public $perPage = 9;
    public $pagiPages;
    
    private $reviews;
    private $reviewsType;
    
    public function initComponent(array $params)
    {
        if (isset($params['reviewType'])) {
            $reviewsParentTag = Tags::find()->where(['alias' => 'reviews'])->one();
            if ($reviewsParentTag) {
                $this->reviewsType = Tags::find()->where(['alias' => addslashes($params['reviewType'])])
                        ->andWhere(['parent_id' => $reviewsParentTag->id])
                        ->one();
                if ($this->reviewsType) {
                    $this->reviews = $this->findReviews($this->reviewsType->id);
                }
            }
            $this->pagiPages = new Pagination(['totalCount' => 1]);
        }
    }
    
    private function findReviews($typeId)
    {
        $query = Reviews::find()
                ->active()
                ->orderBy('pub_date DESC')
                ->joinWith('info')
                ->joinWith(['tags' => function(\yii\db\ActiveQuery $q) use ($typeId){
                    $q->where(['tags.id' => $typeId]);
                }],true,'INNER JOIN');

        // Pagination
        $countQuery = clone $query;
        $totalCount = $countQuery->count('reviews.id');
        unset($countQuery);
        $this->pagiPages = new Pagination(['totalCount' => $totalCount]);
        $this->pagiPages->setPageSize($this->perPage);
        $query->offset($this->pagiPages->offset)->limit($this->pagiPages->limit);

        // db execute
        $this->reviews = $query->all();

        return $this->reviews;
    }
    
    public function getReviews() 
    {
        if (!empty($this->reviews)) {
            return $this->reviews;
        }
        return false;
    }
    
    public function getReviewsType() 
    {
        if (!empty($this->reviewsType)) {
            return $this->reviewsType;
        }
        return false;
    }
    
    public function addReview() 
    {
        $post = Yii::$app->request->post();
        $newReview = new Reviews();
        $newReview->alias = 'review_'.(string)time();
        $newReview->email = (isset($post['tml_mail'])) ? addslashes($post['tml_mail']) : '';
        $newReview->link = (isset($post['tml_video'])) ? addslashes($post['tml_video']) : '';
        $newReview->pub_date = date('Y-m-d');
        //$newReview->type_id = (isset($post['tml_type_id'])) ? (int)$post['tml_type_id'] : false;
        $newReview->type_id = 0; // TODO: Remove
        $newReview->status = 0;
        $newReview->sort = 1;
        $newReview->creation_time=(string)date('U');
        $newReview->update_time=(string)date('U');
        $result = $newReview->save();
        
        if ($result) {
            if (isset($post['tml_type_id'])) {
                $tag = Tags::findOne((int)$post['tml_type_id']);
                if ($tag) {
                    $newAssoc = new TagsAssoc();
                    $newAssoc->table_name = Reviews::tableName();
                    $newAssoc->tag_id = $tag->id;
                    $newAssoc->record_id = $newReview->id;
                    $newAssoc->save();
                }
            }
            
            $file = \yii\web\UploadedFile::getInstanceByName('tml_file');
            $this->attachFile($file, $newReview);
            $newReviewInfo = new ReviewsInfo();
            $newReviewInfo->lang = \app\models\Lang::getCurrentId();
            $newReviewInfo->name = (isset($post['tml_name'])) ? addslashes(strip_tags($post['tml_name'])) : '';
            $newReviewInfo->description = '';
            $newReviewInfo->text = (isset($post['tml_msg'])) ? addslashes(strip_tags($post['tml_msg'])) : '';
            try {
                $newReviewInfo->link('record',$newReview);
                $result = true;
            } catch (Exception $ex) {
                $result = false;
            }
            
        }
        
        if ($result) {
            $email = \app\models\UserSettings::findOne(['alias' => 'user_email']);
            if ($email) {
                Yii::$app->mailer->compose('reviews/new', ['data' => $newReview])
                            ->setFrom('site@alfa-spa.com')
                            ->setTo($email->value)
                            ->setSubject('Новый отзыв')
                            ->send();
            }
            return $newReview;
        } else {
            return false;
        }
    }
    
    private function attachFile($file, $review)
    {
        $result = false;
        if($file && $file->error==0 && !empty($file->size)){
            $filename_array = explode('.',$file->name);
            $format = end($filename_array);
            $formats=[
                'jpg',
                'png',
            ];
            if (in_array($format, $formats)) {
                try {
                    $result = $file->saveAs("images/reviews/{$review->id}.1.b.{$format}");
                } catch (Exception $ex) {
                }
            }
        }
        return $result;
    }
}