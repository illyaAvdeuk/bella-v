<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Tags]].
 *
 * @see \app\models\Tags
 */
class Tags extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Tags[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Tags|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    
    /**
     * 
     * @param type $id
     * @return \app\models\Queries\Tags
     */
    public function byTagId($id)
    {
        $id=addslashes($id);
        $this->andWhere("[[id]]='$id'");
        return $this;
    }     
}
