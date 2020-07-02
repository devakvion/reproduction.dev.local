<?php
 function actionIndex()
{

    $model = new ContactForm();
    $model->subject = 'From site';
    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                echo '<div class="ok-contact"><p>Ваше письмо отправленно, спасибо за ваше обращение.</p><span onclick="closeError();"></span></div>';
            } else {
                echo '<div class="error-contact"><p> Ошибка отправки письма.</p><span onclick="closeError();"></span></div>';
            }
        } else {
            echo '<div class="error-contact"><p> Пожалуйста, заполните все поля. </p><span onclick="closeError();"></span></div>';
        }
    } else {
        $model = Text::find()->orderBy('id')->all();
        $texts = [];
        foreach($model AS $m){
            if('publishing' == $m->dir){
                $texts[$m->dir][] = ['title' => $m->title, 'text' => $m->text];
            } else {
                $texts[$m->dir][] = $m->text;
            }
        }
        $pH = explode('-', $texts['price'][2]);
        Yii::$app->view->params['priceHeader'] = $pH[1];

        $model = Gallery::find()->orderBy('pid ASC, order DESC')->all();
        $pidName = [4 => 'slider', 6 => 'works'];
        $galleries = [];
        foreach($model AS $m){
            $galleries[$pidName[$m->pid]][] = ['pid' => $m->pid, 'img' => $m->img, 'link' => $m->link];
        }
        $model = new ContactForm();
        $model->subject = 'From site';
        $comments = Comment::find()->orderBy('date DESC')->where('active=1')->all();
        return $this->render('index', [
            'model' => $model,
            'texts' =>$texts,
            'galleries' =>$galleries,
            'comments' => $comments,
        ]);
    }
}
