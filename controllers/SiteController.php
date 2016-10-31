<?php

namespace app\controllers;

use app\models\Programming;
use app\models\Works;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
        $query = Programming::find()->where(['hide' => 0]);
        $pagination= new Pagination([
            'defaultPageSize'=>3,
            'totalCount' => $query->count()

        ]);
        $query_w=Works::find()->where(['active' => 1]);
        $pagination_w = new Pagination([
            'defaultPageSize'=>4,
            'totalCount' => $query_w -> count()
        ]);
        $posts= $query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $works=$query_w->orderBy(['date' => SORT_ASC])
            ->offset($pagination_w->offset)
            ->limit($pagination_w->limit)
            ->all();

        return $this->render('index',[
            'posts' => $posts,
            'works' => $works,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination -> getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionAbout(){
        return $this->render('about');
    }
    public function actionWorks(){
        $query=Works::find()->where(['active' => 1]);
        $pagination = new Pagination([
            'defaultPageSize'=>5,
            'totalCount' => $query -> count()
        ]);
        $works=$query->orderBy(['date' => SORT_ASC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('works',[
            'works' => $works,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination ->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionProgramming(){
        $query = Programming::find()->where(['hide' => 0]);
        $pagination = new Pagination([
            'defaultPageSize'=> 9,
            'totalCount' => $query -> count()
        ]);
        $posts=$query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('programmings',[
            'posts' => $posts,
            'active_page' => Yii::$app->request->get('page',1),
            'count_pages' => $pagination ->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionPost(){
        $post =Programming::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
        Programming::setNumbers([$post]);
        return $this->render('prog_post', [
            'post' => $post
        ]);
    }

    public function actionWork(){
        $work=Works::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
        Works::setNumber([$post]);
        return $this->render('work', [
            'work' => $work
        ]);
    }

        
}
