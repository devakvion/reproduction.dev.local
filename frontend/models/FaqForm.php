<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class FaqForm extends Model
{
    public $name;
    public $email;
    public $subject = 'Новый вопрос с сайта reproduction.info';
    public $city;
    public $body;
    public $verifyCode;
    public $product;
    public $compliance;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'city', 'body', 'product','compliance'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Код проверки',
            'name' => 'Имя *',
            'city' => 'Город *',
            'body'=> 'Вопрос *',
            'email'=>'E-mail *',
            'subject' => 'Тема *',
            'product' => 'Продукт *',
            'compliance'=>'Согласие на обработку персональных данных'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject . " - " . date("d.m.Y H:i"))
            ->setTextBody($this->name . ", " . $this->city . "\n\n" . $this->product . "\n\n" . $this->body)
            ->send();
    }
}
