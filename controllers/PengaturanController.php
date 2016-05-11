<?php

namespace app\controllers;

use Yii;
use app\models\Pengaturan;
use app\models\PengaturanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PengaturanController implements the CRUD actions for Pengaturan model.
 */
class PengaturanController extends Controller
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
     * Displays a single Pengaturan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {

        if(Yii::$app->user->can('admin')){

            $id= 1;

            $this->layout = 'adminpage';

            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else{
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing Pengaturan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   // public function actionUpdate($id)
    public function actionUpdate()
    {
        if(Yii::$app->user->can('admin')){

            $this->layout = 'adminpage';

            $id = 1;

            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
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
     * Finds the Pengaturan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengaturan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengaturan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
