<?php
namespace frontend\controllers;

use backend\models\Faq;
use frontend\models\FaqForm;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;


/**
 * Class SiteController
 * @package frontend\controllers
 */
class FaqController extends Controller
{

    public function actionIndex()
    {
        $formModel = new FaqForm;
        if ($formModel->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($formModel->validate()) {
                if ($formModel->sendEmail(Yii::$app->params['adminEmail'])) {
                    $faq = new Faq;
                    $faq->question = $formModel->body;
                    $faq->save();
                    $response = ['sent' => true, 'text' => 'Ваш вопрос отправлен'];
                } else {
                    $response = ['sent' => false, 'text' => 'Ошибка отправки вопроса'];
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
            $limit = 10;
            $page = @$_GET['page'] > 1 ? $_GET['page'] : 1;
            $query = Faq::find();
            if (Yii::$app->request->isAjax) {
                unset($_GET['page']);
                $where = ['active' => 1];
                if(0 < count($_GET)){
                    $where['product_id'] = [];
                    foreach($_GET AS $param){
                        $where['product_id'][] = $param;
                    }
                }
                $faqs = $query->orderBy('order DESC')->offset(($page - 1) * $limit)->limit($limit)->where($where)->all();
                return $this->renderAjax('_faqs', ['limit' => $limit, 'page' => $page, 'faqs' => $faqs]);
            } else {
                $faqs = $query->orderBy('order DESC')->offset(($page - 1) * $limit)->limit($limit)->where(['active' => 1])->all();
                Yii::$app->view->params['seoTableName'] = 'faq';

                return $this->render('index', ['page' => $page, 'faqs' => $faqs, 'formModel' => $formModel]);
            }
        }
    }

    public function actionAlone($id)
    {
        $formModel = new FaqForm;
        $faqs = Faq::find()->where(['id' => $id])->all();
        return $this->render('index', ['page' => 1, 'faqs' => $faqs, 'formModel' => $formModel]);
    }
}
