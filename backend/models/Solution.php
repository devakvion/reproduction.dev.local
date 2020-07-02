<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "solution".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property integer $order
 *
 * @property Category $category
 */
class Solution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            ['slug', 'unique'],
            [['category_id', 'order'], 'integer'],
            [['description'], 'string'],
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
            'category_id' => 'Category ID',
            'title' => 'Title',
            'slug' => 'Ссылка',
            'description' => 'Description',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
