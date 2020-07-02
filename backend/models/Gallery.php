<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property string $img
 * @property string $link
 * @property integer $order
 * @property integer $pid
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $imageDir = '/uploads/gallery/';
    public $imageDirAbsolute = '@frontend/web/uploads/gallery/';
    public $imageWidth = 1300;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'pid'], 'required'],
            [['order', 'pid'], 'integer'],
            [['img'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'link' => 'Link',
            'order' => 'Order',
            'pid' => 'Pid',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $model = $this->find()->where(['pid' => $this->pid])->orderBy('order DESC')->one();
                $this->order = null == $model ? 1 : $model->order + 1;
            }
            return true;
        } else {
            return false;
        }
    }
}
