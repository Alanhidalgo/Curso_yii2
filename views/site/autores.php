<?php
    use yii\widgets\LinkPager;

?>  

<h1>Listado de AUTORES</h1>


<?php

foreach ($autores as $key => $value)
    {
        echo $value->Nombre . "<br>";
    }
?>


<?php
    echo LinkPager::widget([
        'pagination' => $pagination,
    ]);


?>