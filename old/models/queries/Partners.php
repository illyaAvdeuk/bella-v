<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Partners]].
 *
 * @see \app\models\Partners
 */
class Partners extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return \app\models\Partners[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Partners|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
