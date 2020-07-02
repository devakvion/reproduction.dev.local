<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $order
 * @property string $slug
 *
 * @property Solution[] $solutions
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'order', 'slug'], 'required'],
            ['slug', 'unique'],
            [['order'], 'integer'],
            [['slug'], 'string', 'max' => 300],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'order' => 'Order',
            'slug' => 'Ссылка',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolutions()
    {
        return $this->hasMany(Solution::className(), ['category_id' => 'id'])->orderBy(['order' => SORT_DESC]);
    }
}
