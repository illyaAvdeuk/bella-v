<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Projects]].
 *
 * @see \app\models\Projects
 */
class Projects extends \yii\db\ActiveQuery
{
    public function home()
    {
        $this->andWhere('[[on_home]]=1');
        return $this;
    }

    /**
     * @inheritdoc
     * @return \app\models\Projects[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Projects|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}