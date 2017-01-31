<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\ProductsInfo]].
 *
 * @see \app\models\ProductsInfo
 */
class ProductsInfo extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\ProductsInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\ProductsInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}