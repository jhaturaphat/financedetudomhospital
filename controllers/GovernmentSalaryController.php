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
                'data' => $data,
                'model' => $this->findModel($id)             
            ]);
            $pdf = new Pdf([
                'mode' => Pdf::MODE_UTF8,                
                'format' => Pdf::FORMAT_A4,                
                'orientation' => Pdf::ORIENT_PORTRAIT, 
                'destination' => Pdf::DEST_BROWSER,               
                'content' => $content, 
                'cssFile' => Yii::getAlias('@webroot').'/css/slip.css',                
                //'cssInline' => '',  
                'options' => ['title' => 'Preview Report Case: '.$id],                
                'methods' => [
                    //'SetHeader'=>[''],
                    //'SetFooter'=>['{PAGENO}'],
                ],
                // 'marginLeft' => 10,
                // 'marginRight' => 10,
                // 'marginTop' => 10,
                // 'marginBottom' => 10,
                // 'marginFooter' => 5
            ]);   
            
            // echo Yii::getAlias('@web');
            // echo Yii::$app->basePath; exit;

            $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
            $fontDirs = $defaultConfig['fontDir'];

            $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
            $fontData = $defaultFontConfig['fontdata'];

            $pdf->options = array_merge($pdf->options , [
                'fontDir' => array_merge($fontDirs, [ Yii::$app->basePath . '/web/fonts']),  
                'fontdata' => array_merge($fontData, [
                    'sarabun' => [
                        'R' => 'THSarabunNew.ttf',
                        'I' => 'THSarabunNew Italic.ttf',
                        'B' => 'THSarabunNew Bold.ttf',
                    ]
                ])
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
        /*return $this->render('slip', [
            'data' => $this->findArray($id),
            'model' => $this->findModel($id)
        ]);*/
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
