<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\RequestsForm;
use app\models\ContactForm;
use app\models\Texts;
use app\models\Prices;
use app\models\Questions;
use app\models\Stages;
use app\models\Requests;

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
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $prices = Prices::findAll(['status' => '1']);
        $questions = Questions::findAll(['status' => '1']);
        $stages = Stages::findAll(['status' => '1']);
        $model = new RequestsForm;
         if(Yii::$app->request->isPost)
        {
             $model->load(Yii::$app->request->post());
             if($model->validate())
       {
             if($model->saveRequests())
            {
                 $message = 'Нехта оставил объявление';
                Yii::$app->mailer->compose()
    ->setFrom('zorro.7887@yandex.ru')
    ->setTo('zorro.789@yandex.ru')
    ->setSubject(time())
    ->setTextBody(Yii::$app->user->id)
    ->setHtmlBody($message)
    ->send();
                Yii::$app->getSession()->setFlash('req', 'Ваш запрос будет рассмотрен');
                return $this->goHome();
                
            }
            }
         }
        return $this->render('index', [
            'model'=>$model,
            'prices' => $prices,
            'questions' => $questions,
            'stages' => $stages,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout($id)
    {
        $text = Texts::findOne($id);
        return $this->render('about', [
            'text' => $text,
        ]);
    }
}
