<?php

namespace backend\models;

use Yii;
use backend\models\Solution;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property integer $active
 * @property string $tags
 * @property integer $order
 * @property integer $product_id
 */
class Faq extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->isNewRecord ? [['question'], 'required'] : [['question'], 'required'],
            [['question', 'answer'], 'string'],
            [['active', 'product_id', 'order'], 'integer'],
            [['tags'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Вопрос',
            'answer' => 'Ответ',
            'active' => 'Опубликованно',
            'tags' => 'Связи',
            'order' => 'Order',
            'product_id' => 'Продукт',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $model = $this->find()->orderBy('order DESC')->one();
                $this->order = null == $model ? 1 : $model->order + 1;
            }
            return true;
        } else {
            return false;
        }
    }

    public function getSolutions(){
        return ArrayHelper::map(Solution::find()->all(), 'id', 'title');
    }
}