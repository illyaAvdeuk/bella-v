<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Reviews]].
 *
 * @see \app\models\Reviews
 */
class Reviews extends \yii\db\ActiveQuery
{
    public function home()
    {
        $this->andWhere('[[on_home]]=1');
        return $this;
    }
    
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return \app\models\Reviews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Reviews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
