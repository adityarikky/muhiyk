<?php

namespace app\controllers;

use Yii;
use app\models\Kategori;
use app\models\Tutorial;
use app\models\TutorialSearch;
use app\models\Subkategori;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Response;
use yii\web\Application;
use yii\helpers\Url;
use yii\web\ForbiddenHttpExcaption;
use kartik\mpdf\Pdf;



/**
 * TutorialController implements the CRUD actions for Tutorial model.
 */
class TutorialController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update','delete','getsubkategori'],
                'rules' => [
                    [
                        'actions' => ['index','create','update','delete','getsubkategori'],
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
     * Lists all Tutorial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'adminpage';
        
        if( Yii::$app->user->can('admin')){
           $searchModel = new TutorialSearch();
       
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);

        }else{

           
            $searchModel = new TutorialSearch();
            $param_search = Yii::$app->request->queryParams;
            $param_search['TutorialSearch']['user_id'] = Yii::$app->session->get('user.id');
            
            $dataProvider = $searchModel->search($param_search);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

     public function actionAdmin()
    {
         if( Yii::$app->user->can('admin') )
        {
        $this->layout = 'adminpage';
        $searchModel = new TutorialSearch();
        
       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
         }else{
            throw new ForbiddenHttpException;
            
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
        'options' => ['title' => 'Laporan Tutorial Animasi- E-learning animation SMA MUH 1 Yogyakarta'],
        // call mPDF methods on the fly
        'methods' => [
        'SetHeader'=>['Laporan Tutorial Animasi - E-learning animation SMA MUH 1 Yogyakarta'],
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

	
    public function actionGetsubkategorijson($id='')
    {
		if($id == ''){
			$subkategori = Subkategori::find()->asArray()->all();		
		}else{
			$subkategori = Subkategori::find()->where("kategori_id = $id")->asArray()->all();			
		}
		 return (json_encode($subkategori));
    }
	
    public function actionIndexkategori($subkategori_id)
    {
        
    }


    /**
     * Displays a single Tutorial model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $subkategori = subkategori::find()
                    ->orderBy('nama ASC')
                    ->all(); 

        $this->layout = 'homepage';
        $model = $this->findModel($id);
        $model->views = $model->views + 1;
        $model->save();
    	// $data=Tutorial::find()
				// ->where(['id'=>$id])
				// ->one();
        return $this->render('view', [
            'model' =>	$model,
            'subkategori' => $subkategori,
            // 'data'	=>	$data,
        ]);
    }

    /**
     * Creates a new Tutorial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'adminpage';
        $model = new Tutorial();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->user_id = Yii::$app->session->get('user.id');
            $model->file_upload = UploadedFile::getInstance($model,'file');
            if(empty($model->file)){
                \Yii::$app->getSession()->setFlash('error','File yang diupload melebihi 5 MB.');
                return $this->redirect(['create']);
            }elseif($model->file_upload->size > 5000000) {
                \Yii::$app->getSession()->setFlash('error','File yang diupload melebihi 5 MB.');
                return $this->redirect(['create']);    
            }
            elseif(!empty($model->file)){
                $model->file_upload->saveAs('uploads/tutorial/tutorial_'.$model->id.'.'.$model->file_upload->extension);
            $model->file = 'uploads/tutorial/tutorial_'.$model->id.'.'.$model->file_upload->extension;
             $model->save();
            return $this->redirect(['view', 'id' => $model->id]);    
            }
           
            
            
        } else {
            return $this->render('create', [
                    'model' => $model,
                ]);
        }
    }

    /**
     * Creates counter for like button
    */

    public function actionDownload($id)
    {
        $model = $this->findModel($id);
        $model->downloads = $model->downloads + 1;
        $model->save();
        // $data=Tutorial::find()
                // ->where(['id'=>$id])
                // ->one();
        // return $this->render('like', [
        //     'model' =>  $model,
        //     // 'data'   =>  $data,
        // ]);
        Yii::$app->getResponse()->xSendFile($model->file);
        // return Yii::$app->getResponse()->redirect(Yii::$app->getHomeUrl());
    }

    public function actionLike($id)
    {
        $model = $this->findModel($id);
        $model->like = $model->like + 1;
        $model->save();
        // $data=Tutorial::find()
                // ->where(['id'=>$id])
                // ->one();
        // return $this->render('like', [
        //     'model' =>  $model,
        //     // 'data'   =>  $data,
        // ]);
        return Yii::$app->getResponse()->redirect(Yii::$app->getHomeUrl());
    }

    /**
     * Creates counter for share button
    */

    public function actionShare($id)
    {
        $model = $this->findModel($id);
        $model->share = $model->share + 1;
        $model->save();
        $urlshare=urlencode(Url::to(['tutorial/view','id'=>$model->id],true));
        // $data=Tutorial::find()
                // ->where(['id'=>$id])
                // ->one();
        return Yii::$app->getResponse()->redirect('https://twitter.com/share?url='.$urlshare);
    }

    /**
     * Updates an existing Tutorial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $this->layout = 'adminpage';
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tutorial model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tutorial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tutorial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tutorial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionCounterdownload(){
        $post_data=Yii::$app->request->post();
        $model = Tutorial::findOne($post_data['id']);
        $model->downloads = $model->downloads+1;
        $model->save();

        return true;
    }
	
	public function actionSearch(){
        
        $post=Yii::$app->request->get();
        
        $query=Tutorial::find();

        $query->andFilterWhere([
            'like','judul',mysql_real_escape_string($post['search'])
        ])->andFilterWhere([
            'subkategori_id'=>$post['subkategori_id']
        ])->andFilterWhere([
            'status'=>"publish"
        ]);



        //$query=Tutorial::findBySql("SELECT * FROM tutorial WHERE judul LIKE '%".mysql_real_escape_string($post['search'])."%'".
        //  " AND subkategori_id LIKE '%".$post['subkategori_id']."%'");
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data= $query->orderBy('id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        $count=$query->count();
        return $this->render('searchresult',[
            'data'          => $data,
            'count'         => $count,
            'pagination'    => $pagination,
            'search'        => $post['search'],
            'subkategori_id' => $post['subkategori_id'],
            'kategoris'     => Kategori::find()->all(),
            'subkategoris'  => Subkategori::find()->all(),
        ]);
	}

    public function actionCari(){
        $this->layout = 'homepage';
        $post=Yii::$app->request->get();
        
        $query=Tutorial::find();

        $query->andFilterWhere([
            'like','judul',mysql_real_escape_string("")
        ])->andFilterWhere([
            'subkategori_id'=>""
        ])->andFilterWhere([
            'status'=>"publish"
        ]);



        //$query=Tutorial::findBySql("SELECT * FROM tutorial WHERE judul LIKE '%".mysql_real_escape_string($post['search'])."%'".
        //  " AND subkategori_id LIKE '%".$post['subkategori_id']."%'");
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data= $query->orderBy('id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        $count=$query->count();
        return $this->render('searchresult',[
            'data'          => $data,
            'count'         => $count,
            'pagination'    => $pagination,
            'search'        => "",
            'subkategori_id' => "",
            'kategoris'     => Kategori::find()->all(),
            'subkategoris'  => Subkategori::find()->all(),
        ]);
    }
}
