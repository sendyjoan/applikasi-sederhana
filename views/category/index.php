<?php

use app\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'label' => 'Nama Category',
                'headerOptions' => ['style' => 'width: 200px;', 'class' => 'text-center'],
                'value' => function (Category $model) {
                    return $model->name;
                },
            ],
            [
                'label' => 'Deskripsi',
                'headerOptions' => ['class' => 'text-center'],
                'value' => function (Category $model) {
                    return $model->description;
                },
            ],
            [
                'class' => ActionColumn::className(),
                'header' => 'Aksi',
                'headerOptions' => ['class' => 'text-center'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, Category $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open">View</span>', $url, [
                            'title' => 'View',
                            'class' => 'btn btn-primary btn-xs',
                        ]);
                    },
                    'update' => function ($url, Category $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil">Update</span>', $url, [
                            'title' => 'Update',
                            'class' => 'btn btn-success btn-xs',
                        ]);
                    },
                    'delete' => function ($url, Category $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash">Delete</span>', $url, [
                            'title' => 'Delete',
                            'class' => 'btn btn-danger btn-xs',
                            'data-method' => 'post',
                            'data-confirm' => 'Are you sure you want to delete this item?',
                        ]);
                    },
                ],
            ]
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
