<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (User::isUserSuperAdmin(Yii::$app->user->identity->username)) {
            $dataProvider = new ActiveDataProvider([
                'query' => User::find(),
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        } else {
            return $this->redirect('user/update/?id=' . Yii::$app->user->id);
        }
    }


    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (User::isUserSuperAdmin(Yii::$app->user->identity->username)) {
            $model = new User();
            //print_r($_POST);exit;
            if ($model->load(Yii::$app->request->post())) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                $model->setPassword($_POST['User']['password']);
                $model->generateAuthKey();
                $model->role = $model::ROLE_ADMIN;
                // print_r($model);exit;
                if ($model->save()) {
                    $this->sendEmail($model, $_POST['User']['password']);
                    $response = ['save' => true, 'title' => 'Подтвержение', 'text' => 'Данные сохраненны'];
                    //$response = ['create' => true, 'href' => '/page-video/default/update/' . $model->id, 'linkId' => 'video-update'];
                } else {
                    $response = ['title' => 'Ошибка сохранения данных', 'errors' => $model->getErrors()];
                }
                return $response;//$this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->redirect('/user');
        }

    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (!User::isUserSuperAdmin(Yii::$app->user->identity->username)) $id = Yii::$app->user->id;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if (!empty($_POST['User']['password'])) {
                $model->setPassword($_POST['User']['password']);
                $model->generateAuthKey();
            }
            if ($model->save()) {
                $response = ['save' => true, 'title' => 'Подтвержение', 'text' => 'Данные сохраненны'];
                //$response = ['create' => true, 'href' => '/page-video/default/update/' . $model->id, 'linkId' => 'video-update'];
            } else {
                $response = ['title' => 'Ошибка сохранения данных', 'errors' => $model->getErrors()];
            }
            return $response;//$this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (User::isUserSuperAdmin(Yii::$app->user->identity->username)) {
            $this->findModel($id)->delete();
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Sends an email with username, password, link.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail($user = null, $password=null)
    {
        if ($user && $password) {
            return \Yii::$app->mailer->compose(['html' => 'adminNew-html', 'text' => 'adminNew-text'], ['user' => $user, 'password' => $password])
                ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                ->setTo($user->email)
                ->setSubject('As suas credenciais para ' . \Yii::$app->name)
                ->send();
        }

        return false;
    }
}
