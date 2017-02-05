<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Products]].
 *
 * @see \app\models\Products
 */
class Products extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Products[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Products|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    
    /**
     * 
     * @return type
     */
    public function discount_price()
    {
        return $this->andWhere("[[discount_price]]!=0");
    }    
}
