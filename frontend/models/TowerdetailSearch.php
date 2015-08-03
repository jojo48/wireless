<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Towerdetail;

/**
 * TowerdetailSearch represents the model behind the search form about `frontend\models\Towerdetail`.
 */
class TowerdetailSearch extends Towerdetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Placement', 'Current', 'Remain', 'Over'], 'integer'],
            [['TowerID', 'tower_id', 'SiteCode', 'TowerName', 'SubDistrict', 'District', 'Province', 'Region', 'TowerType', 'TowerHeight', 'AreaType', 'LandOwner', 'Project', 'TowerOwner', 'SubTowerOwner', 'TowerStatus', 'ServiceType', 'Remark', 'UserName', 'TimeRecord'], 'safe'],
            [['Latitude', 'Longitude'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Towerdetail::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Latitude' => $this->Latitude,
            'Longitude' => $this->Longitude,
            'Placement' => $this->Placement,
            'Current' => $this->Current,
            'Remain' => $this->Remain,
            'Over' => $this->Over,
            'TimeRecord' => $this->TimeRecord,
        ]);

        $query->andFilterWhere(['like', 'TowerID', $this->TowerID])
            ->andFilterWhere(['like', 'tower_id', $this->tower_id])
            ->andFilterWhere(['like', 'SiteCode', $this->SiteCode])
            ->andFilterWhere(['like', 'TowerName', $this->TowerName])
            ->andFilterWhere(['like', 'SubDistrict', $this->SubDistrict])
            ->andFilterWhere(['like', 'District', $this->District])
            ->andFilterWhere(['like', 'Province', $this->Province])
            ->andFilterWhere(['like', 'Region', $this->Region])
            ->andFilterWhere(['like', 'TowerType', $this->TowerType])
            ->andFilterWhere(['like', 'TowerHeight', $this->TowerHeight])
            ->andFilterWhere(['like', 'AreaType', $this->AreaType])
            ->andFilterWhere(['like', 'LandOwner', $this->LandOwner])
            ->andFilterWhere(['like', 'Project', $this->Project])
            ->andFilterWhere(['like', 'TowerOwner', $this->TowerOwner])
            ->andFilterWhere(['like', 'SubTowerOwner', $this->SubTowerOwner])
            ->andFilterWhere(['like', 'TowerStatus', $this->TowerStatus])
            ->andFilterWhere(['like', 'ServiceType', $this->ServiceType])
            ->andFilterWhere(['like', 'Remark', $this->Remark])
            ->andFilterWhere(['like', 'UserName', $this->UserName]);

        return $dataProvider;
    }
}
