<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "chat".
 *
 * @property integer $translationid
 * @property string $translation
 */
class Chat extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'translation';
    }

    public static function getDb()
    {
        return Yii::$app->get('dbChat');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['translation'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'translationid' => 'ID',
            'translation' => 'Перевод',
        ];
    }

}