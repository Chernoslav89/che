<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Create {modelClass}: ', [
    'modelClass' => Yii::t('common/model_labels', 'Category'),
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('common/model_labels', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
