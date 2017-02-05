<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Images]].
 *
 * @see \app\models\Images
 */
class Images extends \yii\db\ActiveQuery
{
    public function acceptedFormats()
    {
        $formats=[
                'jpg',
                'png',
        ];
        $this->andWhere(['format'=>$formats]);
        return $this;
    }

    /**
     * @inheritdoc
     * @return \app\models\Images[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Images|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
