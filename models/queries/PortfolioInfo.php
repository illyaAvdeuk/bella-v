<?php

namespace app\models\Queries;

/**
 * This is the ActiveQuery class for [[\app\models\PortfolioInfo]].
 *
 * @see \app\models\PortfolioInfo
 */
class PortfolioInfo extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\PortfolioInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\PortfolioInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}