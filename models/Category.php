<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $razdel
 * @property string $created_at
 *
 * @property Categs $razdel0
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'created_at'], 'required'],
            [['description'], 'string'],
            [['razdel'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 140],
            [['razdel'], 'exist', 'skipOnError' => true, 'targetClass' => Categs::className(), 'targetAttribute' => ['razdel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'razdel' => 'Категория',
            'created_at' => 'Добавлено',
        ];
    }

    /**
     * Gets query for [[Razdel0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getcategs()
    {
        return $this->hasOne(Categs::className(), ['id' => 'razdel']);
    }
}
