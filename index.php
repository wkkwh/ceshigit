<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\IdcardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Idcards');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="idcard-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('common', 'Create Idcard'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <hr>
    <p>本页数据，只有本人可见。</p>

<?php Pjax::begin(); ?>
    <?=ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
        'layout'=>'{items}<hr>{summary}{pager}',
        'pager'=>[
            'maxButtonCount'=>10,
        ],
    ])?>
<?php Pjax::end(); ?>

</div>
