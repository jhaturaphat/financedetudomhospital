<?php

namespace app\controllers;

use Yii;
use app\models\GovernmentSalary;
use app\models\GovernmentSalarySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use kartik\mpdf\Pdf;

/**
 * GovernmentSalaryController implements the CRUD actions for GovernmentSalary model.
 */
class GovernmentSalaryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
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
     * Lists all GovernmentSalary models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GovernmentSalarySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = ['id_gs' => 'DESC'];
        $dataProvider->query->where(['cid_gs' => Yii::$app->session->get('cid')]);
        $dataProvider->pagination->pageSize = 6;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionSlip($id) {     
           
        $model = $this->findArray($id);
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $html = "
            <table>
                <caption>{$model['id_gs']}</caption>
            </table>
        ";
        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE, // leaner size using standard fonts
            'destination' => Pdf::DEST_BROWSER,
            'content' => $html,
            'options' => [
                // any mpdf options you wish to set
            ],
            'methods' => [
                'SetTitle' => 'Privacy Policy - Krajee.com',
                'SetSubject' => 'Generating PDF files via yii2-mpdf extension has never been easy',
                'SetHeader' => ['Krajee Privacy Policy||Generated On: ' . date("r")],
                'SetFooter' => ['|Page {PAGENO}|'],
                'SetAuthor' => 'Kartik Visweswaran',
                'SetCreator' => 'Kartik Visweswaran',
                'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, Privacy, Policy, yii2-mpdf',
            ]
        ]);
        return $pdf->render();
    }

    /**
     * Displays a single GovernmentSalary model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('slip', [
            'data' => $this->findArray($id),
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Finds the GovernmentSalary model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GovernmentSalary the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {        
        if (($model = GovernmentSalary::find()->where(['id_gs' => $id])->andWhere(['cid_gs' => $_SESSION['cid']])->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the GovernmentSalary model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GovernmentSalary the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findArray($id)
    {        
        if (($model = GovernmentSalary::find()->where(['id_gs' => $id])->andWhere(['cid_gs' => $_SESSION['cid']])->asArray()->one()) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
