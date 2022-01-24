<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use app\models\Categs;
use app\models\Tovar;
use yii\data\Pagination;

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
$this->view->params['news'] = Categs::find()
       ->all();
       
        $hits = Category::find()

        ->joinWith('categs')
        ->orderBy('id DESC')
         ->limit(6)
        ->all();
       $cats = Categs::find()
       ->all();
        return $this->render('index',[
            'hits' => $hits, 'cats'=> $cats]);


    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {


        $this->layout = 'main'; 
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
$id=$_GET["id"];

     $models = Category::find()
  
        ->joinWith('categs')
        ->where(['category.id' => $id])
        ->all();

    return $this->render('contact', [
         'models' => $models, 'id'=>$id
     
    ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {$id=$_GET["id"];
        $lols = Category::find()

        ->joinWith('categs')
        ->where(['category.id' => $id])->all();;
        return $this->render('about',[
            'lols' => $lols]);

}
        public function actionCat()
    {$id=$_GET["id"];
    $query = Category::find()->where(['razdel' => $id]);
    $countQuery = clone $query;
    $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3]);
    $list = $query->offset($pages->offset)
    ->joinWith('categs')
    ->limit($pages->limit)
    ->all();

    return $this->render('cat', ['id'=>$id,
         'list' => $list,
         'pages' => $pages,
    ]);

}

 public function actionCategories()
    {
$this->view->params['news'] = Categs::find()
       ->all();
       
       $cats = Categs::find()
       ->all();
        return $this->render('categories',[
       'cats'=> $cats]);

    }
    
}
