<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\TagsAssoc]].
 *
 * @see \app\models\TagsAssoc
 */
class TagsAssoc extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\TagsAssoc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\TagsAssoc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * 
     * @param type $id
     * @return \app\models\queries\TagsAssoc
     */
    public function byTagId($id)
    {
        $id=addslashes($id);
        $this->andWhere("[[tag_id]]='$id'");
        return $this;
    }
	
    /**
     * 
     * @param type $table
     * @return \app\models\queries\TagsAssoc
     */
    public function byTableName($table)
    {
        $$table=addslashes($table);
        $this->andWhere("[[table_name]]='$table'");
        return $this;
    }
}
