<?php

namespace thienhungho\ProductManagement\modules\ProductManage\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use thienhungho\ProductManagement\modules\ProductBase\Product;

 class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author', 'quantity', 'product_parent', 'assign_with', 'created_by', 'updated_by'], 'integer'],
            [['title', 'slug', 'description', 'content', 'feature_img', 'sku', 'status', 'comment_status', 'rating_status', 'unit', 'gallery', 'product_type', 'language', 'created_at', 'updated_at'], 'safe'],
            [['promotional_price', 'price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
        $query = Product::find();

        $this->load($params);

        $query->andFilterWhere([
            'id' => $this->id,
            'author' => $this->author,
            'quantity' => $this->quantity,
            'promotional_price' => $this->promotional_price,
            'price' => $this->price,
            'product_parent' => $this->product_parent,
            'assign_with' => $this->assign_with,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'feature_img', $this->feature_img])
            ->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'comment_status', $this->comment_status])
            ->andFilterWhere(['like', 'rating_status', $this->rating_status])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'gallery', $this->gallery])
            ->andFilterWhere(['like', 'product_type', $this->product_type])
            ->andFilterWhere(['like', 'language', $this->language]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!$this->validate()) {
            return $dataProvider;
        }

        return $dataProvider;
    }
}
