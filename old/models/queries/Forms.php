<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Forms]].
 *
 * @see \app\models\Forms
 */
class Forms extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Forms[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Forms|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
