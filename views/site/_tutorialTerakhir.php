<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Tutorial */
/* @var $form yii\widgets\ActiveForm */
?>
                <li class="col-md-4">
                    <div class="content-boxes-v3 block-grid-v1 rounded">
                        <i class="icon-custom icon-sm rounded-x icon-bg-green icon-line icon-graduation"></i>                        
                        <div class="content-boxes-in-v3">
                            <h3><?= Html::a($model->judul, ['tutorial/view', 'id' =>$model->id])?></h3>
                            <ul class="star-vote">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <ul class="list-inline margin-bottom-5">
                                <li>By <a class="color-green" href='<?= Url::to(['site/profile', 'username' => $model->user['username'] ]) ?>'><?= $model->user['username'] ?></a></li>
                                <li><i class="fa fa-clock-o"></i><?= $model->created ?></li>
                            </ul>
                            <p><?= $model->deskripsi ?></p>
                            <ul class="list-inline block-grid-v1-add-info">

                                <li><a href="<?php echo Url::toRoute('tutorial/view').'&id='.$model->id ?>"><i class="fa fa-eye" data-tooltip="tooltip" data-placement="top" title="View" ></i> <?= $model->views ?></a></li>
                                <?php $urlshare=urlencode(Url::to(['tutorial/view','id'=>$model->id],true));?>
                                <li><a href="<?php echo Url::toRoute('tutorial/share').'&id='.$model->id ?>" target="_blank" class="twitter-share-button" data-size="large" data-hashtags="gamatutor"><i class="fa fa-retweet" data-tooltip="tooltip" data-placement="top" title="Retweet"></i> <?= $model->share ?></a></li>
                                <!-- <li><a id="download" href="<?php echo Url::toRoute('tutorial/download').'&id='.$model->id ?>"><i class="fa fa-download"data-tooltip="tooltip" data-placement="top" title="Download"></i> <?= $model->downloads ?></a></li> -->
                                <li><a href="<?php echo Url::toRoute('tutorial/like').'&id='.$model->id ?>"><i class="fa fa-heart" data-tooltip="tooltip" data-placement="top" title="Like"></i> <?= $model->like ?></a></li>
                            </ul>   
                        </div>
                    </div>
                </li>