<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ModelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '模型';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="models-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加模型', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('更新模型缓存', ['cache'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'ename',
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete} {manage}',
                'buttons'=>[
                    'manage'=>function($url, $model, $key){
                        return '<a href="/'.$model->ename.'/cacheall">缓存数据</a>';
                    }
                ]
            ],
        ],
    ]); ?>a

</div>

