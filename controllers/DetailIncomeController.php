<?php

namespace app\controllers;

use Yii;
use app\models\DetailIncome;
use app\models\DetailIncomeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailIncomeController implements the CRUD actions for DetailIncome model.
 */
class DetailIncomeController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DetailIncome models.
     * @return mixed
     */
    public function actionIndex() {

        $searchModel = new DetailIncomeSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = ['id_income' => 'DESC'];
        $dataProvider->query->where(['cid' => Yii::$app->session->get('cid')]);
        $dataProvider->pagination->pageSize = 6;

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailIncome model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

  
    protected function findModel($id) {        
        if (isset($_SESSION['cid'])) {
            if (($model = DetailIncome::find()->where(['id_income' => $id])->andWhere(['cid' => $_SESSION['cid']])->one()) !== null) {
                return $model;
            }
        }else{
            $this->redirect(['/site/index']);
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
