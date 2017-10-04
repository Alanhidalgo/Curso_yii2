<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            'email:email',
             'status',
             //'created_at',
             //'updated_at',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {estado}',
            'buttons' => [
                /*'update' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                    $url,
                    [
                        'title' => 'Actualizar',
                    ]
                    
                    
                    );
                },*/

                    'estado' => function($url, $model){
                        if ( $model->status == 1 ) {
                            return Html::a('<span class="glyphicon glyphicon-minus-sign"></span>',
                            $url,
                            [
                                'title' => 'Desactivar estado',
                            ]
                            
                            );
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-plus-sign"></span>',
                            $url,
                            [
                                'title' => 'Activar estado',
                            ]
                            
                            );
                        
                        }
                    }
                ],
                
                'urlCreator' => function($action, $model, $key, $index){
                    if ($action== 'estado') {
                        return yii\helpers\Url::to(['user/estado', 'id' => $key]);
                    }
                    elseif ($action== 'view') {
                        return yii\helpers\Url::to(['user/view', 'id' => $key]);
                    }
                    elseif ($action== 'delete') {
                        return yii\helpers\Url::to(['user/delete', 'id' => $key]);
                    }
                    elseif ($action== 'update') {
                        return yii\helpers\Url::to(['user/update', 'id' => $key]);
                    }

                }
        
            ],
        ],
    ]); ?>
</div>
