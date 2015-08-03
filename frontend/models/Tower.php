<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tower".
 *
 * @property integer $id
 * @property string $towerID
 * @property string $towerName
 */
class Tower extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tower';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['towerID'], 'string', 'max' => 10],
            [['towerName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'towerID' => 'รหัสเสา',
            'towerName' => 'ชื่อเสาโทรคมนาคม',
        ];
    }
}
