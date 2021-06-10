<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GovernmentSalary;

/**
 * GovernmentSalarySearch represents the model behind the search form of `app\models\GovernmentSalary`.
 */
class GovernmentSalarySearch extends GovernmentSalary
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gs'], 'integer'],
            [['cid_gs', 'name_gs', 'institute_gs', 'institute2_gs', 'province_gs', 'namebank_gs', 'numberbank_gs', 'position_numbe_gs', 'dr_1', 'dr_2', 'dr_3', 'dr_4', 'dr_5', 'dr_6', 'dr_7', 'dr_8', 'dr_9', 'dr_10', 'sum_dr', 'cr_1', 'cr_2', 'cr_3', 'cr_4', 'cr_5', 'cr_6', 'cr_7', 'cr_8', 'cr_9', 'cr_10', 'sum_cr', 'net_salary', 'date_gs', 'month_gs', 'id_input', 'year_budget'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = GovernmentSalary::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_gs' => $this->id_gs,
            'date_gs' => $this->date_gs,
        ]);

        $query->andFilterWhere(['like', 'cid_gs', $this->cid_gs])
            ->andFilterWhere(['like', 'name_gs', $this->name_gs])
            ->andFilterWhere(['like', 'institute_gs', $this->institute_gs])
            ->andFilterWhere(['like', 'institute2_gs', $this->institute2_gs])
            ->andFilterWhere(['like', 'province_gs', $this->province_gs])
            ->andFilterWhere(['like', 'namebank_gs', $this->namebank_gs])
            ->andFilterWhere(['like', 'numberbank_gs', $this->numberbank_gs])
            ->andFilterWhere(['like', 'position_numbe_gs', $this->position_numbe_gs])
            ->andFilterWhere(['like', 'dr_1', $this->dr_1])
            ->andFilterWhere(['like', 'dr_2', $this->dr_2])
            ->andFilterWhere(['like', 'dr_3', $this->dr_3])
            ->andFilterWhere(['like', 'dr_4', $this->dr_4])
            ->andFilterWhere(['like', 'dr_5', $this->dr_5])
            ->andFilterWhere(['like', 'dr_6', $this->dr_6])
            ->andFilterWhere(['like', 'dr_7', $this->dr_7])
            ->andFilterWhere(['like', 'dr_8', $this->dr_8])
            ->andFilterWhere(['like', 'dr_9', $this->dr_9])
            ->andFilterWhere(['like', 'dr_10', $this->dr_10])
            ->andFilterWhere(['like', 'sum_dr', $this->sum_dr])
            ->andFilterWhere(['like', 'cr_1', $this->cr_1])
            ->andFilterWhere(['like', 'cr_2', $this->cr_2])
            ->andFilterWhere(['like', 'cr_3', $this->cr_3])
            ->andFilterWhere(['like', 'cr_4', $this->cr_4])
            ->andFilterWhere(['like', 'cr_5', $this->cr_5])
            ->andFilterWhere(['like', 'cr_6', $this->cr_6])
            ->andFilterWhere(['like', 'cr_7', $this->cr_7])
            ->andFilterWhere(['like', 'cr_8', $this->cr_8])
            ->andFilterWhere(['like', 'cr_9', $this->cr_9])
            ->andFilterWhere(['like', 'cr_10', $this->cr_10])
            ->andFilterWhere(['like', 'sum_cr', $this->sum_cr])
            ->andFilterWhere(['like', 'net_salary', $this->net_salary])
            ->andFilterWhere(['like', 'month_gs', $this->month_gs])
            ->andFilterWhere(['like', 'id_input', $this->id_input])
            ->andFilterWhere(['like', 'year_budget', $this->year_budget]);

        return $dataProvider;
    }
}
