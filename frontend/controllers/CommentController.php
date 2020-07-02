<?php

namespace frontend\controllers;

use backend\models\Comment;
use frontend\models\CommentForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;


/**
 * Class SiteController
 * @package frontend\controllers
 */
class CommentController extends Controller
{
    private $commentsLimit = 10;

    public function actionIndex()
    {
        $formModel = new CommentForm;
        if ($formModel->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($formModel->validate()) {
                if ($formModel->sendEmail(Yii::$app->params['adminEmail'])) {
                    $comment = new Comment;
                    $comment->date = date("d/m/Y");
                    $comment->title = $formModel->name . ' ,' . $formModel->city;
                    $comment->text = $formModel->body;
                    $comment->gender = $formModel->gender;
                    /*if (!empty($formModel->photo)) {
                        $comment->img_small = $formModel->photo;
                        $comment->save();
                        $tempFile = Yii::getAlias($comment->imageDirAbsolute) . '/temp/' . $comment->img_small;
                        $dirToFile = Yii::getAlias($comment->imageDirAbsolute) . '/' . $comment->id;
                        if (!is_dir($dirToFile)) {
                            mkdir($dirToFile, 0777, true);
                            chmod($dirToFile, 0777);
                        }
                        $toFile = $dirToFile . '/' . $comment->img_small;
                        rename($tempFile, $toFile);
                    } else {
                        $comment->save();
                    }*/
                    $comment->save();
                    $response = ['sent' => true, 'text' => 'Ваш отзыв отправлен'];
                } else {
                    $response = ['sent' => false, 'text' => 'Ошибка отправки отзыва'];
                }
            } else {
                $text = '';
                $errors = $formModel->getErrors();
                foreach ($errors AS $error) {
                    $text .= $error[0] . '<br>';
                }
                $response = ['sent' => false, 'text' => $text];
            }
            return $response;
        } else {
            $model = new Comment;
            $comments = Comment::find()->orderBy('date DESC')->where(['active' => 1])->limit($this->commentsLimit)->all();
            Yii::$app->view->params['seoTableName'] = $model->tableName();

            return $this->render('index', ['model' => $model, 'comments' => $comments, 'formModel' => $formModel]);
        }
    }

    public function actionComments()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $comments = Comment::find()
            ->orderBy('date DESC')
            ->where(['active' => 1])
            ->limit($this->commentsLimit)
            ->offset($this->commentsLimit * $page)
            ->all();
        return count($comments) > 0 ? $this->renderPartial('_comments', ['comments' => $comments]) : false;
    }

    public function actionUploadPhoto()
    {
        $model = new Comment;
        $upload_dir = Yii::getAlias($model->imageDirAbsolute) . '/temp/';
        if (isset($_REQUEST['file']) && !empty($_REQUEST['file'])) {
            $fileToDelete = $upload_dir . $_REQUEST['file'];
            if (is_file($fileToDelete)) unlink($fileToDelete);
        }
        $_FILES['files']['name'][0] = md5($_FILES['files']['name'][0] . time());
        $path = Yii::getAlias("@vendor/blueimp/jquery-file-upload/server/php/UploadHandler.php");
        require_once $path;
        $options = [
            'upload_dir' => $upload_dir,
            'image_versions' => [
                '' => ['max_width' => 90,],
            ],
            'accept_file_types' => '/\.(gif|jpe?g|png)$/i',
        ];
        $upload_handler = new \UploadHandler($options);
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $upload_handler->response->files;
    }

    public function actionDeletePhoto()
    {
        if (isset($_GET['file'])) {
            $model = new Comment;
            $path = Yii::getAlias($model->imageDirAbsolute) . '/temp/' . $_GET['file'];
            if (is_file($path)) return unlink($path);
        } else {
            return false;
        }

    }

    public function actionAlone($id)
    {
        $formModel = new CommentForm;
        $model = new Comment;
        $comments = Comment::find()->where(['id' => $id])->all();
        return $this->render('index', ['model' => $model, 'comments' => $comments, 'formModel' => $formModel]);
    }
}
