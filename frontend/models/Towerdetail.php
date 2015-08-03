<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "towerdetail".
 *
 * @property string $id
 * @property string $TowerID
 * @property string $tower_id
 * @property string $SiteCode
 * @property string $TowerName
 * @property double $Latitude
 * @property double $Longitude
 * @property string $SubDistrict
 * @property string $District
 * @property string $Province
 * @property string $Region
 * @property string $TowerType
 * @property string $TowerHeight
 * @property string $AreaType
 * @property string $LandOwner
 * @property string $Project
 * @property string $TowerOwner
 * @property string $SubTowerOwner
 * @property integer $Placement
 * @property integer $Current
 * @property integer $Remain
 * @property integer $Over
 * @property string $TowerStatus
 * @property string $ServiceType
 * @property string $Remark
 * @property string $UserName
 * @property string $TimeRecord
 */
class Towerdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'towerdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Latitude', 'Longitude'], 'number'],
            [['Placement', 'Current', 'Remain', 'Over'], 'integer'],
            [['TimeRecord'], 'safe'],
            [['TowerID', 'tower_id', 'SiteCode', 'TowerName', 'SubDistrict', 'District', 'Province', 'TowerType', 'TowerHeight', 'AreaType', 'LandOwner', 'Project', 'TowerOwner', 'SubTowerOwner', 'TowerStatus', 'ServiceType', 'Remark'], 'string', 'max' => 255],
            [['Region'], 'string', 'max' => 50],
            [['UserName'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TowerID' => 'TowerID',
            'tower_id' => 'Tower ID',
            'SiteCode' => 'SiteCode',
            'TowerName' => 'TowerName',
            'Latitude' => 'เส้นรุ้ง',
            'Longitude' => 'เส้นแวง',
            'SubDistrict' => 'ตำบล',
            'District' => 'อำเภอ',
            'Province' => 'จังหวัด',
            'Region' => 'ภาค',
            'TowerType' => 'ชนิดเสา',
            'TowerHeight' => 'เสาสูง',
            'AreaType' => 'ชนิดพื้นที่',
            'LandOwner' => 'เจ้าของพื้นที่',
            'Project' => 'Project',
            'TowerOwner' => 'เจ้าของเสา',
            'SubTowerOwner' => 'Sub Tower Owner',
            'Placement' => 'ออกแบบ',
            'Current' => 'ปัจจุบัน',
            'Remain' => 'ยังเหลือ',
            'Over' => 'Over',
            'TowerStatus' => 'Tower Status',
            'ServiceType' => 'Service Type',
            'Remark' => 'Remark',
            'UserName' => 'User Name',
            'TimeRecord' => 'Time Record',
        ];
    }
}
