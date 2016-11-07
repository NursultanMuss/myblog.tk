<?php
/**
 * Created by PhpStorm.
 * User: Nursultan
 * Date: 07.11.2016
 * Time: 14:06
 */
namespace app\controllers;

use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller {

    public $layout= 'admin_main';

    public function actionIndex(){
        return $this->render('admin_panel');
    }
}