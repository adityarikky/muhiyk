<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use app\models\User;
use app\models\PostSearch;
use app\models\PostAdmin;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Status;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;
use kartik\mpdf\Pdf;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    public function behaviors()
    {
        return [
        'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'adminpage';
      

        if( Yii::$app->user->can('admin') ){
            $searchModel = new PostAdmin();

            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

             return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }else{

            $searchModel = new PostSearch();

            $param_search = Yii::$app->request->queryParams;
            $param_search['PostSearch']['user_id'] = Yii::$app->session->get('user.id');
            $dataProvider = $searchModel->search($param_search);
            
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

    }




    public function actionPdf() {

        // $searchModel = new StatusSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        
        //  $content = $this->renderPartial('index', [
        //         'searchModel' => $searchModel,
        //         'dataProvider' => $dataProvider,
        //     ]);

        // $id = 1;
        // return $this->renderPartial('view', [
        //     'model' => $this->findModel($id),
        // ]);
        //use kartik\mpdf\Pdf;
        $content = $this->renderPartial('pdf');
           
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE,
        // A4 paper format
        'format' => Pdf::FORMAT_A4,
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT,
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER,
        // your html content input
        'content' => $content,
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}',
        // set mPDF properties on the fly
        'options' => ['title' => 'Laporan Tulisan Artikel - E-learning animation SMA MUH 1 Yogyakarta'],
        // call mPDF methods on the fly
        'methods' => [
        'SetHeader'=>['Laporan Tulisan Artikel - E-learning animation SMA MUH 1 Yogyakarta'],
        'SetFooter'=>['{PAGENO}'],
        ]
        ]);

        /*------------------------------------*/
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
        /*------------------------------------*/

        // return the pdf output as per the destination setting
        return $pdf->render();
    }

     public function actionAdmin()
    {
         if( Yii::$app->user->can('admin') )
        {
        $this->layout = 'adminpage';
        $searchModel = new PostAdmin();
        
       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
         }else{
            throw new ForbiddenHttpException;
            
        }


    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = 'adminpage';

        

        return $this->render('view', [
            'model' => $this->findModel($id),
            
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if( Yii::$app->user->can('student') )
        {
            $this->layout = 'adminpage';
            $model = new Post();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                 // return $this->redirect(['view', 'id' => $model->id]);

                 $this->layout = 'adminpage';
                $searchModel = new PostSearch();
                
                $param_search = Yii::$app->request->queryParams;
                $param_search['PostSearch']['user_id'] = Yii::$app->session->get('user.id');

                $dataProvider = $searchModel->search($param_search);

               return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

        }else{
            throw new ForbiddenHttpException;
            
        }
        
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('student'))
        {

            $this->layout = 'adminpage';
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
               // return $this->redirect(['view', 'id' => $model->id]);

                 $this->layout = 'adminpage';
                $searchModel = new PostSearch();
                
                $param_search = Yii::$app->request->queryParams;
                $param_search['PostSearch']['user_id'] = Yii::$app->session->get('user.id');

                $dataProvider = $searchModel->search($param_search);

               return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);

            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            throw new ForbiddenHttpException;
            
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('student'))
        {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
