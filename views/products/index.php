<?php

use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'Product Name',
                'headerOptions' => ['class' => 'text-center'],
                'value' => function (Products $model) {
                    return $model->name;
                }
            ],
            [
                'attribute' => 'Product Price',
                'headerOptions' => ['class' => 'text-center'],
                'value' => function (Products $model) {
                    return $model->price;
                }
            ],
            [
                'attribute' => 'Product Description',
                'headerOptions' => ['class' => 'text-center'],
                'value' => function (Products $model) {
                    return $model->description;
                }
            ],
            [
                'attribute' => 'Product Category',
                'value' => function (Products $model) {
                    return $model->category->name;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'header' => 'Aksi',
                'headerOptions' => ['class' => 'text-center'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, Products $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open">View</span>', $url, [
                            'title' => 'View',
                            'class' => 'btn btn-primary btn-xs',
                        ]);
                    },
                    'update' => function ($url, Products $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil">Update</span>', $url, [
                            'title' => 'Update',
                            'class' => 'btn btn-success btn-xs',
                        ]);
                    },
                    'delete' => function ($url, Products $model) {
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


</div>
