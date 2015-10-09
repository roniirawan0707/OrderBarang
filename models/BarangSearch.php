<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `app\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kode', 'warna', 'size', 'toko', 'status'], 'safe'],
            [['stok', 'hpp', 'hj', 'idSupplier', 'jual'], 'integer'],
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
        $query = Barang::find();

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
            'stok' => $this->stok,
            'hpp' => $this->hpp,
            'hj' => $this->hj,
            'idSupplier' => $this->idSupplier,
            'jual' => $this->jual,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'warna', $this->warna])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'toko', $this->toko])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
