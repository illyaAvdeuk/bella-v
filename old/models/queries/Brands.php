<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Brands]].
 *
 * @see \app\models\Brands
 */
class Brands extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Brands[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Brands|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
