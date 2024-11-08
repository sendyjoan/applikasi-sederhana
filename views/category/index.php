<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Catgory page. You create, update, delete and view categories here.
    </p>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <!-- <button class="btn btn-primary" type="button">Create Category</button>-->
        <a href="<?= Url::toRoute(['category/create']) ?>" class="btn btn-primary">Create</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Makanan Ringan</td>
                <td>
                    Makanan yang biasa di konsumsi saat santai
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">View</button>
                    <button type="button" class="btn btn-warning btn-sm">Update</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>