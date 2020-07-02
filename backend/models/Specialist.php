<?php

namespace backend\models;

use Yii;
use DateTime;
use backend\components\Helpers;
use backend\models\Solution;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "specialist".
 *
 * @property integer $id
 * @property string $date
 * @property string $title
 * @property string $link
 * @property integer $active
 * @property string $pdf
 * @property integer $type
 */
class Specialist extends \yii\db\ActiveRecord
{
    public $imageDir = '/uploads/specialist/';
    public $imageDirAbsolute = '@frontend/web/uploads/specialist/';
    public $types = ['Клинические исследования', 'Научные публикации'];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            $this->isNewRecord ? [['title'], 'required'] : [['title', 'date'], 'required'],
            [['date'], 'safe'],
            [['title', 'link'], 'string'],
            [['active', 'type'], 'integer'],
            [['pdf'], 'string', 'max' => 50],
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
            'title' => 'Название',
            'link' => 'Ссылка',
            'active' => 'Опубликованно',
            'pdf' => 'Файл pdf',
            'type' => 'Категория'
        ];
    }

    public function beforeSave($insert)
    {
        if (0 < $this->date) {
            $from = DateTime::createFromFormat('d/m/Y', $this->date);
            $this->date = $from->format('Y-m-d');
        } else {
            $this->date = date('Y-m-d');
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
}