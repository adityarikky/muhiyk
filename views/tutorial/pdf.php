<!DOCTYPE html>
<html>
<body>
   <main>


<?php
    if(Yii::$app->user->can('admin')){

    $posts = app\models\PdfTutorial::find()
                    //->where(['user_id' => Yii::$app->session->get('user.id')])
                    ->all();
            foreach ($posts as $nama) {
                 $realname = $nama->realname ;
                 $nis = $nama->nis;
                 $telephon = $nama->telepon;
                 $email = $nama->email;

                  $query=app\models\PdfTutorial::findBySql("SELECT * FROM pdf_tutorial");
                $total = $query->count();
            }
    }else{
        $posts = app\models\PdfTutorial::find()
                    ->where(['user_id' => Yii::$app->session->get('user.id')])
                    ->all();
            foreach ($posts as $nama) {
                 $realname = $nama->realname ;
                 $nis = $nama->nis;
                 $telephon = $nama->telepon;
                 $email = $nama->email;
             $query=app\models\PdfTutorial::findBySql("SELECT * FROM pdf_tutorial where user_id = ".Yii::$app->session->get('user.id')."");
                $total = $query->count();
            }
    }
               
        ?>

                <div id="main-wrapper">
                    <div class="row">
                        <div class="invoice col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="m-b-md"><b><?php if(Yii::$app->user->can('admin')){echo $realname;echo " (super admin)";}else{echo $realname;} ?></b></h3>
                                            <address>
                                                Nis: <?php echo $nis; ?><br>
                                                Phone: <?php echo $telephon; ?><br>
                                                Email: <?php echo $email;?>
                                            </address>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <hr>
                                            <p>
                                                <strong>Data From</strong><br>
                                                Tutorial Animasi<br>
                                                created: <?= date('H:i:s d-m-Y') ?>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Title</th>
                                                        <th>Status</th>
                                                        <th>Category</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                   <?php 
                                                       foreach ($posts as $post) {
                                                        $no = '-';
                                                        echo '<tr>';
                                                            echo '<td>'. $no .'</td>';
                                                            echo '<td>'. $post->name .'</td>';
                                                            echo '<td>'. $post->status .'</td>';
                                                             echo '<td>'. $post->category .'</td>';
                                                            
                                                            
                                                        echo '</tr>';
                                                        
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-md-8">
                                            <h3>Thank you !</h3>
                                            <p>Terima kasih telah mengunakan e-learning animasi SMA Muhammadiyah 1 Yogyakarta</p>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-right">
                                                <hr>
                                                <h4 class="no-m m-t-sm">Total Tulisan</h4>
                                                <h2 class="no-m"><?php echo $total;?></h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div><!--row-->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
            
        </main><!-- Page Content -->
     
        
    </body>
</html>