<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\Files]].
 *
 * @see \app\models\Files
 */
class Files extends \yii\db\ActiveQuery
{
    public function acceptedFormats()
    {
		$formats=[
			'pdf',
			'doc',
			'docx',
			'zip',
			'xls',
			'xlsx',
			'ppt',
			'pptx',
		];
        $this->andWhere(['format'=>$formats]);
        return $this;
    }

    /**
     * @inheritdoc
     * @return \app\models\Files[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Files|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
