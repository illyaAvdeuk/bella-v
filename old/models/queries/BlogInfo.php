<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\BlogInfo]].
 *
 * @see \app\models\BlogInfo
 */
class BlogInfo extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return \app\models\BlogInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}