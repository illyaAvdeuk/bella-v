<?php

namespace app\components;
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use app\models\Forms;
use app\models\FormTypes;
use app\models\Files;

class FormsComponent extends Component
{
    public function addForm() 
    {
        $post = Yii::$app->request->post();
        $newForm = new Forms();
        $newForm->alias = 'form_'.(string)time();
        $newForm->pub_date = date('Y-m-d');
        $newForm->pub_time = date('H:i');
        $newForm->status = 0;
        $newForm->name = (isset($post['name'])) ? addslashes(strip_tags($post['name'])) : '';
        $newForm->email = (isset($post['email'])) ? addslashes(strip_tags($post['email'])) : '';
        $newForm->phone = (isset($post['phone'])) ? addslashes(strip_tags($post['phone'])) : '';
        $newForm->msg = (isset($post['msg'])) ? addslashes(strip_tags($post['msg'])) : '';
        $newForm->form_id = $this->getFormTypeId();
        $newForm->sort = 1;
        $newForm->creation_time=(string)date('U');
        $newForm->update_time=(string)date('U');
        $result = $newForm->save();
        
        if ($result) {
            $file1 = \yii\web\UploadedFile::getInstanceByName('file1');
            $this->attachFile($file1, $newForm);
            $file2 = \yii\web\UploadedFile::getInstanceByName('file2');
            $this->attachFile($file2, $newForm);
            $newForm->fillErrMsg();
        }
        
        if ($result) {
            $email = \app\models\UserSettings::findOne(['alias' => 'user_email']);
            if ($email) {
//                Yii::$app->mailer->compose('forms/new', ['data' => $newForm])
//                            ->setFrom('site@alfa-spa.com')
//                            ->setTo($email->value)
//                            ->setSubject('Новая заявка с сайта')
//                            ->send();
            }
            return $newForm;
        } else {
            return false;
        }
    }
    
    private function attachFile($file, $form)
    {
        $fileRow = new Files();
        if ($fileRow->attachFile($file, 'forms', $form->id) === false) {
            $form->attachFileErrors[] = $file->name;
            return false;
        }
        return true;
    }
    
    private function getFormTypeId()
    {
        $form_type = Yii::$app->request->post('form_type',false);
        if (!$form_type) {
            return false;
        }
        $formType = FormTypes::findOne(['alias' => addslashes($form_type)]);
        if (!$formType) {
            return false;
        }
        return $formType->id;
    }
}