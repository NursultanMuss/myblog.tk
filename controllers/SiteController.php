<?php

namespace app\controllers;

use app\models\Programming;
use app\models\Works;
use app\models\Blog;
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
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                    [
                        'class' => AccessControl::className(),
                        'denyCallback' => function ($rule, $action) {
                            throw new \Exception('У вас нет доступа к этой странице');
                        }
                    ]
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

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return Yii::$app->getResponse()->redirect(Yii::$app->urlManager->createUrl(['admin/index']));
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

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /* -------------------------------------------------------------
    ======	PAGES
    ------------------------------------------------------------- */

    /* -- ABOUT   CONTACTS
    ------------------------------------------------------------- */

    public function actionAbout(){
        return $this->render('about');
    }
    public function actionContacts (){
        $form = new ContactForm();
        return $this->render('contacts',[
            'form'
        ]);
    }

    /* -------------------------------------------------------------
======	PAGE
------------------------------------------------------------- */

    /* -- WORKS
    ------------------------------------------------------------- */
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

    public function actionWork(){
        $work=Works::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
        Works::setNumber($work);
        return $this->render('work', [
            'work' => $work
        ]);
    }

    /* -------------------------------------------------------------
======	PAGE
------------------------------------------------------------- */

    /* -- PROGRAMMING - POSTS
    ------------------------------------------------------------- */

    public function actionProgramming(){
        $query = Programming::find()->where(['hide' => 0]);
        $pagination = new Pagination([
            'defaultPageSize'=> 9,
            'totalCount' => $query -> count()
        ]);
        $prog_posts=$query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('programmings',[
            'prog_posts' => $prog_posts,
            'active_page' => Yii::$app->request->get('page',1),
            'count_pages' => $pagination ->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionProg_post(){
        $prog_post =Programming::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
        Programming::setNumbers([$prog_post]);
        return $this->render('prog_post', [
            'prog_post' => $prog_post
        ]);
    }

    public function actionProg_category(){
        $cat_post = Programming::find()->where(['category' => Yii::$app->getRequest()->getQueryParam('category')])->all();
        $category=Yii::$app->getRequest()->getQueryParam('category');
        return $this->render('prog_cat', [
           'cat_post' => $cat_post,
            'category' => $category
        ]);
    }

    /* -------------------------------------------------------------
======	PAGE
------------------------------------------------------------- */

    /* -- BLOG - POSTS
    ------------------------------------------------------------- */

    public function actionBlog (){
        $query_p=Blog::find()->where(['hide' => 0]);
        $pagination =new Pagination([
            'defaultPageSize'=> 5,
            'totalCount' => $query_p -> count()
        ]);

        $blog_posts= $query_p->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('blog',[
            'blog_posts' => $blog_posts,
            'active_page' => Yii::$app->request->get('page',1),
            'count_pages' => $pagination ->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionBlog_post (){
        $blog_post=Blog::find()->where(['id' => Yii::$app->getRequest()->getQueryParams('id')])->one();
        Blog::setNumbers($blog_post);
        return $this->render('blog_post',[
            'blog_post' => $blog_post
        ]);
    }
    
    
    public function actionBlog_category(){
        $cat_post = Blog::find()->where(['category' => Yii::$app->getRequest()->getQueryParam('category')])->all();
        return $this->render('blog_cat', [
            'cat_post' => $cat_post,
            'category' => Yii::$app->getRequest()->getQueryParam('category')
        ]);
    }

    /* -------------------------------------------------------------
======	PAGE
------------------------------------------------------------- */

    /* -- Admin-Panel
    ------------------------------------------------------------- */
    
    






        
}
