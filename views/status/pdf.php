<!DOCTYPE html>
<html>
<body>
   <main>


<?php
    $posts = app\models\Status::find()
                    ->orderBy('id DESC')
                    ->all();
    
        ?>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="invoice col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="m-b-md"><b>
                                                Status Report
                                            </b></h3>
                                            
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <hr>
                                            <p>
                                                Data From<br>
                                                <strong>Status</strong><br>
                                                created: <?= date('H:i:s d-m-Y') ?>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Description</th>
                                                        <th>Create Time</th>
                                                        <th>Update Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                       foreach ($posts as $post) {
                                                        $no = '-';
                                                        echo '<tr>';
                                                            echo '<td>'. $no .'</td>';
                                                            echo '<td>'. $post->name .'</td>';
                                                            echo '<td>'. $post->create_time .'</td>';
                                                            echo '<td>'. $post->update_time .'</td>';
                                                            
                                                        echo '</tr>';
                                                        
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="text-right">
                                                <br>
                                                <br>
                                                <br>
                                                <hr>
												<p class="no-s">2016 &copy; </p>
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