<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>



<!-- ======= Banner ======= -->
        <section class="p0 container-fluid banner about_banner">
            <div class="about_banner_opacity">
                <div class="container">
                    <div class="banner_info_about">
                        <h1>Contact</h1>
                        <ul>
                            <li><a href="../web/index.php?r=site%2Findex">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Contact</li>
                        </ul>
                    </div> <!-- End Banner Info -->
                </div> <!-- End Container -->
            </div> <!-- End Banner_opacity -->
        </section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =================== Contact us container ============== -->
        <section class="contact_us_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
                        <h2>Punya Pertanyaan?</h2>
                        <p>Tanyakan Kepada Kami!</p>
                    </div> <!-- End section title -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
                        
                            <div class="site-contact">
                                <h1><?= Html::encode($this->title) ?></h1>

                                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                                <div class="alert alert-success">
                                    Thank you for contacting us. We will respond to you as soon as possible.
                                </div>

                                

                                <?php else: ?>

                                <p>
                                    If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                                </p>

                                <div class="row">
                                    <div class="col-lg-5">
                                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                            <?= $form->field($model, 'name') ?>
                                            <?= $form->field($model, 'email') ?>
                                            <?= $form->field($model, 'subject') ?>
                                            <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><br><div class="col-lg-6">{input}</div></div>',
                                            ]) ?>
                                            <div class="form-group">
                                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                            </div>
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>

                                <?php endif; ?>
                            </div>


                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
                        <address>
                            <div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
                            <div class="address_holder float_left">Jl. Gotongroyong II, Petinggen<br>Karangwaru, Tegalrejo<br>Yogyakarta, Indonesia</div>
                        </address>
                        <address class="clear_fix">
                            <div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
                            <div class="address_holder float_left">@learning.com <br>support@mlearning.com </div>
                        </address>
                        <address class="clear_fix">
                            <div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
                            <div class="address_holder float_left">Kode Pos 55241<br>Telp: +62274-563739  </div>
                        </address>
                    </div>
                </div>
            </div>
        </section>

<!-- =================== /Contact us container ============== -->

<!-- =============== google map ============= -->
        <div class="map">
            <div class="google-map" id="contact-google-map" data-map-lat="-7.774143" data-map-lng="110.366265" data-icon-path="images/map-marker.png" data-map-title="Awesome Place" data-map-zoom="15"></div>
        </div>
<!-- =============== /google map ============= -->
