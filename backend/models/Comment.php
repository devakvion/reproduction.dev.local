<?php

namespace backend\models;

use Yii;
use DateTime;
use backend\components\Helpers;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $date
 * @property string $img_big
 * @property string $img_small
 * @property string $title
 * @property string $lead
 * @property string $text
 * @property string $slug
 * @property integer $active
 * @property string $tags
 * @property integer $product_id
 * @property integer $gender
 */
class Comment extends \yii\db\ActiveRecord
{
    public $imageDir = '/uploads/comment/';
    public $imageDirAbsolute = '@frontend/web/uploads/comment/';
    public $imageBigWidth = 2000;
    public $imageSmallWidth = 90;
    public $imageSmallHeight = 90;
    public $actionLoadImage = false;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->isNewRecord || $this->actionLoadImage ? [['title', 'title'], 'required'] : [['title', 'date', ], 'required'],
            //['slug', 'unique'],
            [['date'], 'safe'],
            [['title', 'lead', 'text'], 'string'],
            [['active', 'product_id', 'gender'], 'integer'],
            [['img_big', 'img_small'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 300],
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
            'date' => 'Дата',
            'img_big' => 'Изображение',
            'img_small' => 'Миниатюра',
            'title' => 'Имя, Город',
            'lead' => 'Описание',
            'text' => 'Текст',
            'slug' => 'Ссылка',
            'active' => 'Опубликованно',
            'tags' => 'Связи',
            'product_id' => 'Продукт',
            'gender' => 'Пол',
        ];
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            Helpers::rrmdir(Yii::getAlias($this->imageDirAbsolute) . '/' . $this->id);
            return true;
        } else {
            return false;
        }
    }

/*    public function beforeValidate()
    {
        if (is_array($this->tags)) {
            $this->tags = ',' . implode(',', $this->tags) . ',';
        } else $this->tags = '';
        return parent::beforeValidate();
    }*/

    public function beforeSave($insert)
    {
        if (0 < $this->date) {
            $from = DateTime::createFromFormat('d/m/Y', $this->date);
            $this->date = $from->format('Y-m-d');
        }
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        if ('0000-00-00' != $this->date) {
            $from = DateTime::createFromFormat('Y-m-d', $this->date);
            $this->date = $from->format('d/m/Y');
        }

        parent::afterFind();
        return true;
    }

    public function getSolutions(){
        return ArrayHelper::map(Solution::find()->all(), 'id', 'title');
    }
}