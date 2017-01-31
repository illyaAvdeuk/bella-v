<?php

namespace app\components;
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use app\models\Tags;
use app\models\TagsAssoc;
use app\models\Blog;

class BlogComponent extends Component
{
    public $perPage = 9;
    public $pagiPages;
    
    private $posts;
    private $post;
    private $postId;
    private $postsByLimit;
    private $sortBy = 'pub_date';
    private $order = 'DESC';
    private $availableTags;
    private $tag;
    private $tagId;
    
    public function initComponent(array $params)
    {
        if (isset($params['perPage'])) {
            $this->perPage = $params['perPage'];
        }
        if (isset($params['pId']) && isset($params['alias'])) {
            $this->postId = substr($params['pId'], 1);
            $this->post = Blog::find()->where(['id'=>$this->postId])
                ->andWhere(['alias' => addslashes($params['alias'])])
                ->active()
                ->joinWith('info')
                ->one();
        }
        if (isset($params['tId']) && isset($params['tagAlias'])) {
            $this->tagId = substr($params['tId'], 1);
            $this->tag = Tags::find()->where(['id'=>$this->tagId])
                ->andWhere(['alias' => addslashes($params['tagAlias'])])
                ->joinWith('info')
                ->one();
        }
    }
    
    public function getPosts() 
    {
        if (empty($this->posts)) {
            $query = Blog::find()
                    ->active()
                    ->orderBy('pub_date DESC');
            
            // If search param present
            $search = Yii::$app->request->get('s',false);
            if ($search) {
                $query->joinWith(['info' => function (\yii\db\ActiveQuery $q) use ($search){
                    $q->where(['like','title',$search]);
                }]);
            } else {
                $query->joinWith('info');
            }
            
            if ($this->getTag()) {
                $tagId = $this->tag->id;
                $query->joinWith(['tags' => function(\yii\db\ActiveQuery $q) use ($tagId){
                    $q->where(['tags.id' => $tagId]);
                }]);
            }
            
            // Pagination
            $countQuery = clone $query;
            $totalCount = $countQuery->count('blog.id');
            unset($countQuery);
            $this->pagiPages = new Pagination(['totalCount' => $totalCount]);
            $this->pagiPages->setPageSize($this->perPage);
            $query->offset($this->pagiPages->offset)->limit($this->pagiPages->limit);
            
            // db execute
            $this->posts = $query->all();
            
            return $this->posts;
        }
        return $this->posts;
    }
    
    public function getPostsByLimit($limit, $sortBy = null, $order = null) 
    {
        if (empty($this->postsByLimit)) {
            $this->sortBy = (($sortBy === null) ? $this->sortBy : $sortBy);
            $this->order = (($order === null) ? $this->order : $order);
        
            $query = Blog::find()
                    ->active()
                    ->joinWith('info')
                    ->limit($limit)
                    ->orderBy("{$this->sortBy} $this->order");
            
            if (!empty($this->post)) {        
                $query->andWhere(['not',['id' => $this->post->id]]);
            }        
            
            $this->postsByLimit = $query->all();        
                    
            return $this->postsByLimit;
        }
        return $this->postsByLimit;
    }
    
    public function getPost() 
    {
        if (!empty($this->post)) {
            return $this->post;
        }
        return false;
    }
    
    public function getTag() 
    {
        if (!empty($this->tag)) {
            return $this->tag;
        }
        return false;
    }
    
    public function getAvailableTags()
    {
        if (empty($this->availableTags)) {
            $this->availableTags = Tags::find()
                    ->joinWith(['tagsAssocs' => function(\yii\db\ActiveQuery $q){
                        $q->where(['tags_assoc.table_name' => 'blog']);
                    }])
                    ->joinWith('info')
                    ->all();
            
            return $this->availableTags;
        }
         
        return $this->availableTags;
    }
}