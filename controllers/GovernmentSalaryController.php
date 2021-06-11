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
    public function actionPrint($id) {  
            $data = $this->findArray($id);
            $content = $this->renderPartial('slip', [
                'data' => $data                
            ]);
            $pdf = new Pdf([
                'mode' => Pdf::MODE_UTF8,
                // A4 paper format
                'format' => Pdf::FORMAT_A4,
                // portrait orientation
                'orientation' => Pdf::ORIENT_PORTRAIT,
                //Font
                'defualt_font' => 'THSarabun',
                // stream to browser inline
                'destination' => Pdf::DEST_BROWSER,
                // your html content input
                'content' => $content,
                // format content from your own css file if needed or use the
                // enhanced bootstrap css built by Krajee for mPDF formatting
                'cssFile' => '@web/css/slip.css',
                // any css to be embedded if required
                'cssInline' => '.bd{border:1.5px solid; text-align: center;} .ar{text-align:right} .imgbd{border:1px solid}',
                // set mPDF properties on the fly
                'options' => ['title' => 'Preview Report Case: '.$id],
                // call mPDF methods on the fly
                'methods' => [
                    //'SetHeader'=>[''],
                    //'SetFooter'=>['{PAGENO}'],
                ]
            ]);            
            // return the pdf output as per the destination setting
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
