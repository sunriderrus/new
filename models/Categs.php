<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categs".
 *
 * @property int $id
 * @property string|null $zagol
 * @property string|null $pict
 *
 * @property Category[] $categories
 */
class Categs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['zagol'], 'string', 'max' => 100],
            [['pict'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zagol' => 'Zagol',
            'pict' => 'Pict',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['razdel' => 'id']);
    }
}
