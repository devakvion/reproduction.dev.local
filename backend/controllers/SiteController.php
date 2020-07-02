<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'request-password-reset', 'reset-password'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex($dir = false, $subDir = false)
    {
        $dirs = \Yii::$app->params['dirs'];
        if (false == $dir) {
            $dir = key($dirs);
            $urlTo = '/_dir/' . $dir;
            if (isset($dirs[$dir]['subDirs'])) {
                $subDir = key($dirs[$dir]['subDirs']);
                $urlTo .= '/' . $subDir;
            }
            //$this->redirect($urlTo);
           $this->redirect('/_dir/news');
        }
        if (!array_key_exists($dir, $dirs) || (false != $subDir && !array_key_exists($subDir, $dirs[$dir]['subDirs']))) {
            return $this->render('dir404', ['dir' => $dir . '/' . $subDir]);
        }
        $subDirs = $subDir ? $dirs[$dir]['subDirs'] : false ;
        $module = 'nada';
        if($subDir && isset($dirs[$dir]['subDirs'][$subDir]['module'])){
            $module = $dirs[$dir]['subDirs'][$subDir]['module'];
        } elseif (isset($dirs[$dir]['module'])){
            $module = $dirs[$dir]['module'];
        }
        $content = 'nada' == $module ? '' : Yii::$app->runAction($module, ['id' => 1, 'dir' => $dir, 'subDir' => $subDir]) ;
        return $this->render('index', [
            'dir' => $dir,
            'dirName' => $dirs[$dir]['name'],
            'dirIcon' => $dirs[$dir]['icon'],
            'subDirs' => $subDirs,
            'subDir' => $subDir,
            'content' => $content
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'INSTRUCTION_WHERE_SENT'));
                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', Yii::t('app', 'UNABLE_RESET_PASSWORD'));
            }
        }
        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            //throw new BadRequestHttpException($e->getMessage());
            //Yii::$app->getSession()->setFlash('error', 'Este link é inválido');
            return $this->goHome();
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', Yii::t('app', 'PASSWORD_SAVED'));
            return $this->goHome();
        }
        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

}
