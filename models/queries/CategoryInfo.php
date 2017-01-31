<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\CategoryInfo]].
 *
 * @see \app\models\CategoryInfo
 */
class CategoryInfo extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\CategoryInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\CategoryInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}