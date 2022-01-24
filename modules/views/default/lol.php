<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    

<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            ['attribute'=>'razdel',
            'value'=>'categs.zagol'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
 <p>
        <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
</div>
