<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hspa".
 *
 * @property integer $id
 * @property string $siteCode
 * @property string $siteName
 * @property double $latitude
 * @property double $longitude
 */
class Hspa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hspa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
            [['siteCode'], 'string', 'max' => 10],
            [['siteName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'siteCode' => 'รหัสสถานี',
            'siteName' => 'ชื่อสถานี',
            'latitude' => 'ละติจูด',
            'longitude' => 'ลองจิจูด',
        ];
    }
}
