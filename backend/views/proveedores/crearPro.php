<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Proveedores */

$this->title = 'Create Proveedores';
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-create">

   

    <?= $this->render('formularioPro', [
        'model' => $model,
    ]) ?>

</div>
