<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property integer $id
 * @property string $table_name
 * @property integer $table_id
 * @property string $title
 * @property string $description
 * @property string $keywords
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['table_name', 'table_id'], 'required'],
            [['table_id'], 'integer'],
            [['description', 'keywords'], 'string'],
            [['table_name'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 255],
            [['table_name', 'table_id'], 'unique', 'targetAttribute' => ['table_name', 'table_id'], 'message' => 'The combination of Table Name and Table ID has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table_name' => 'Table Name',
            'table_id' => 'Table ID',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}
