<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\alert\AlertBlock;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo AlertBlock::widget([
        'type' => AlertBlock::TYPE_ALERT,
        'useSessionFlash' => true,
        'delay' => 5000,
    ]);

?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre_producto',
            'descripcion',
            'precio',
            //'id_user',
            //'id0.username',

            //-- SE AGREGO UN NUEVO CAMPO EN PRODUCTOS/INDEX Se ve el nombre al que le pertecene el producto---/////
            [
                'attribute' =>'id_user',
                'value' => 'id0.username',
                'format' => 'raw',
                'label' => 'Usuario',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>