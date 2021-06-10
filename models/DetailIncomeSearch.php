<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailIncome;

/**
 * DetailIncomeSearch represents the model behind the search form of `app\models\DetailIncome`.
 */
class DetailIncomeSearch extends DetailIncome
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_income', 'number_income'], 'integer'],
            [['cid', 'number_account', 'name_account_user', 'dr_1', 'dr_2', 'dr_2note', 'dr_3', 'dr_4', 'dr_5', 'dr_6', 'dr_7', 'dr_8', 'dr_8note', 'dr_9', 'dr_10', 'dr_10note', 'dr_11', 'dr_11note', 'sum_dr', 'cr_1', 'cr_2', 'cr_3', 'cr_4', 'cr_5', 'cr_6', 'cr_7', 'cr_8', 'cr_9', 'cr_10', 'cr_11', 'cr_11note', 'cr_12', 'cr_13', 'cr_14', 'cr_15', 'cr_16', 'cr_17', 'cr_18', 'cr_19', 'cr_20', 'cr_21', 'cr_22', 'sum_cr', 'total_income', 'date_income', 'month_income', 'type_income', 'note_income', 'pay_income', 'id_input', 'year_budget', 'id_slip', 'view_state'], 'safe'],
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
        $query = DetailIncome::find();

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
            'id_income' => $this->id_income,
            'number_income' => $this->number_income,
            'date_income' => $this->date_income,
        ]);

        $query->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'number_account', $this->number_account])
            ->andFilterWhere(['like', 'name_account_user', $this->name_account_user])
            ->andFilterWhere(['like', 'dr_1', $this->dr_1])
            ->andFilterWhere(['like', 'dr_2', $this->dr_2])
            ->andFilterWhere(['like', 'dr_2note', $this->dr_2note])
            ->andFilterWhere(['like', 'dr_3', $this->dr_3])
            ->andFilterWhere(['like', 'dr_4', $this->dr_4])
            ->andFilterWhere(['like', 'dr_5', $this->dr_5])
            ->andFilterWhere(['like', 'dr_6', $this->dr_6])
            ->andFilterWhere(['like', 'dr_7', $this->dr_7])
            ->andFilterWhere(['like', 'dr_8', $this->dr_8])
            ->andFilterWhere(['like', 'dr_8note', $this->dr_8note])
            ->andFilterWhere(['like', 'dr_9', $this->dr_9])
            ->andFilterWhere(['like', 'dr_10', $this->dr_10])
            ->andFilterWhere(['like', 'dr_10note', $this->dr_10note])
            ->andFilterWhere(['like', 'dr_11', $this->dr_11])
            ->andFilterWhere(['like', 'dr_11note', $this->dr_11note])
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
            ->andFilterWhere(['like', 'cr_11', $this->cr_11])
            ->andFilterWhere(['like', 'cr_11note', $this->cr_11note])
            ->andFilterWhere(['like', 'cr_12', $this->cr_12])
            ->andFilterWhere(['like', 'cr_13', $this->cr_13])
            ->andFilterWhere(['like', 'cr_14', $this->cr_14])
            ->andFilterWhere(['like', 'cr_15', $this->cr_15])
            ->andFilterWhere(['like', 'cr_16', $this->cr_16])
            ->andFilterWhere(['like', 'cr_17', $this->cr_17])
            ->andFilterWhere(['like', 'cr_18', $this->cr_18])
            ->andFilterWhere(['like', 'cr_19', $this->cr_19])
            ->andFilterWhere(['like', 'cr_20', $this->cr_20])
            ->andFilterWhere(['like', 'cr_21', $this->cr_21])
            ->andFilterWhere(['like', 'cr_22', $this->cr_22])
            ->andFilterWhere(['like', 'sum_cr', $this->sum_cr])
            ->andFilterWhere(['like', 'total_income', $this->total_income])
            ->andFilterWhere(['like', 'month_income', $this->month_income])
            ->andFilterWhere(['like', 'type_income', $this->type_income])
            ->andFilterWhere(['like', 'note_income', $this->note_income])
            ->andFilterWhere(['like', 'pay_income', $this->pay_income])
            ->andFilterWhere(['like', 'id_input', $this->id_input])
            ->andFilterWhere(['like', 'year_budget', $this->year_budget])
            ->andFilterWhere(['like', 'id_slip', $this->id_slip])
            ->andFilterWhere(['like', 'view_state', $this->view_state]);

        return $dataProvider;
    }
}
