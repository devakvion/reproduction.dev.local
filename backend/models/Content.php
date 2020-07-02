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
 * @property integer $order
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['table_name', 'table_id'], 'required'],
            [['table_id', 'order'], 'integer'],
            [['description'], 'string'],
            [['table_name'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 255],
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
            'order' => 'Order',
        ];
    }

}
