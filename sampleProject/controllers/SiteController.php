<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Course;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
        if (!Yii::$app->user->isGuest) {
            $course = Course::find()->all();
            return $this->render('home',['course' => $course]);
        }

        else{
            return $this->render('front');
        }
        
    }

    public function actionCreate(){
        $course = new Course();
        $formData = Yii::$app->request->post();
        $course->load($formData);
        if($course->load($formData)){
            if($course->save()){
                Yii::$app->getSession()->setFlash('message','New Student Enrolled Successfully');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','Student Enrollement Failed');
            }
        } 
        return $this->render('create', ['course' => $course]);
    }

    public function actionView($id){
        $course = Course::findOne($id);
        return $this->render('view', ['course' => $course]);
    }

    public function actionUpdate($id){
        // echo $id;
         $course = Course::findOne($id);
        if($course->load(Yii::$app->request->post()) && $course-> save() ){
            Yii::$app->getSession()->setFlash('message','Student Details updated Successfully');
            return $this->redirect(['index', 'id' => $course->id]);
        }
        else{
            return $this->render('update', ['course' => $course]);
        }
    }

    public function actionDelete($id){
        $course = Course::findOne($id)->delete();
        if($course){
            Yii::$app->getSession()->setFlash('message', 'Student Details deleted successfully');
            return $this->redirect(['index']);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
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

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
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
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegister(){
        if(!Yii::$app->user->isGuest){
            return $this->goHome();
        }

        $model = new User();
        if($model->load(Yii::$app->request->post())){
            $model->setPassword($model->rawPassword);
            $model->generateAuthKey();
            $model->save();
            \Yii::$app->session->setFlash('success',"You have successfully signed up. Please login");
            return $this->redirect(['site/login']);
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}
