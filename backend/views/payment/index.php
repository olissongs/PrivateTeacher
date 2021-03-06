<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var common\models\PaymentSearch $searchModel
*/

    $this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="payment-index">

    <?php //     echo $this->render('_search', ['model' =>$searchModel]);
    ?>

    <div class="clearfix">
        <p class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <div class="pull-right">

                                                                                                                                        
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
                [
                    'id'       => 'giiant-relations',
                    'encodeLabel' => false,
                    'label'    => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
                    'dropdown' => [
                        'options'      => [
                            'class' => 'dropdown-menu-right'
                        ],
                        'encodeLabels' => false,
                        'items'        => [
    [
        'label' => '<i class="glyphicon glyphicon-arrow-left"> User</i>',
        'url' => [
            'user/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-left"> Student</i>',
        'url' => [
            'student/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-left"> User</i>',
        'url' => [
            'user/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-left"> User</i>',
        'url' => [
            'user/index',
        ],
    ],
]                    ],
                ]
            );
            ?>        </div>
    </div>

    
        <div class="panel panel-default">
            <div class="panel-heading">
                Payments            </div>

            <div class="panel-body">

                <div class="table-responsive">
                <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager'        => [
                    'class'          => yii\widgets\LinkPager::className(),
                    'firstPageLabel' => 'First',
                    'lastPageLabel'  => 'Last'                ],
                'filterModel' => $searchModel,
                'columns' => [

                        [
            'class' => 'yii\grid\ActionColumn',
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ],
			'id',
			'user_id',
			'student_id',
			'amount',
			'date',
			'created_by',
			'updated_by',
			/*'created_at'*/
			/*'updated_at'*/
                ],
            ]); ?>
                </div>

            </div>

        </div>


    
</div>
