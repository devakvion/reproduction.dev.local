<?php
namespace frontend\controllers;

use backend\models\Content;
use backend\models\Product;
use frontend\models\ContactForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;


/**
 * Class SiteController
 * @package frontend\controllers
 */
class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\HttpCache',
                'only' => ['index', 'pharmacy', 'contact'],
                'lastModified' => function ($action, $params) {
                    return filemtime(Yii::getAlias('@app/views/site/' . $action->id . '.php'));
                },
            ],
        ];
    }

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'minLength' => 2,
                'maxLength' => 3,
                'foreColor' => 0x54545e,
                // 'backColor' => 0xFFFFFF,
            ],
        ];
    }

    public function actionIndex()
    {
        if ($_GET) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('index');
    }
    public function actionO_proizvoditele()
    {
        return $this->render('o_proizvoditele');
    }
    public function actionError()
    {
        Yii::$app->view->params['seoTableName'] = 'error';
        return $this->render('index');
    }

    public function actionPharmacy()
    {
        Yii::$app->view->params['seoTableName'] = 'pharmacy';
        return $this->render('pharmacy');
    }

    public function actionProduct($slug)
    {

        $model = Product::find()->where(['slug' => $slug])->one();
        Yii::$app->getResponse()->getHeaders()->set('Last-Modified', gmdate('D, d M Y H:i:s', $model->updated_at) . ' GMT');
        Yii::$app->view->params['seoTableName'] = $model->tableName();
        Yii::$app->view->params['seoTableId'] = $model->id;
        $content = Content::find()->where(['table_name' => 'product', 'table_id' => $model->id])->orderBy('order ASC')->all();
        //print_r($model);exit;
        return $this->render('product', ['model' => $model, 'content' => $content]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->validate()) {
                if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                    $response = ['sent' => true, 'text' => 'Ваше сообщение отправлено'];
                } else {
                    $response = ['sent' => false, 'text' => 'Ошибка отправки сообщения'];
                }
            } else {
                $text = '';
                $errors = $model->getErrors();
                foreach ($errors AS $error) {
                    $text .= $error[0] . '<br>';
                }
                $response = ['sent' => false, 'text' => $text];
            }
            return $response;
        } else {
            Yii::$app->view->params['seoTableName'] = 'contact';
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Redirect to backend
     */
    public function actionAdmin()
    {
        $adminUrl = str_replace('http://', 'http://admin.', Yii::$app->request->getHostInfo());
        return $this->redirect($adminUrl, 302);
    }

}
