<?php

namespace thienhungho\ProductManagement\modules\ProductManage\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent;

/**
 * thienhungho\ProductManagement\modules\ProductManage\search\ProductUnitEquivalentSearch represents the model behind the search form about `thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent`.
 */
 class ProductUnitEquivalentSearch extends ProductUnitEquivalent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_unit_1', 'product_unit_1_value', 'product_unit_2', 'product_unit_2_value', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
        $query = ProductUnitEquivalent::find();

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
            'product_unit_1' => $this->product_unit_1,
            'product_unit_1_value' => $this->product_unit_1_value,
            'product_unit_2' => $this->product_unit_2,
            'product_unit_2_value' => $this->product_unit_2_value,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
