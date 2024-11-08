<?php

namespace app\controllers;

use Yii;
use app\models\CategoryForm;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        $categoryForm = new CategoryForm();
        return $this->render('create', [
            'model' => $categoryForm,
        ]);
    }
}

// The CategoryController class is similar to the SiteController class. It extends the yii\web\Controller class and has an actionIndex() method that renders the index view file. The index view file is expected to be located in the views/category directory and be named index.php.
?>