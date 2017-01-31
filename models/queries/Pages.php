<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Pages]].
 *
 * @see \app\models\Pages
 */
class Pages extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Pages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Pages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    
    public function published()
    {
        $this->andWhere("[[hide]]=0");
        return $this;
    }    
    
    public function byUrl($url)
    {
        $url = addslashes($url);
        $this->andWhere("[[url]]='$url'");
        return $this;
    }
    
}
