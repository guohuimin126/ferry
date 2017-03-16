<?php

namespace app\controllers;
header('content-type:text/html;charset=utf-8');
use Yii;
use app\models\BdPerson;
use app\models\BdPersonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BdPersonController implements the CRUD actions for BdPerson model.
 */
class BdPersonController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all BdPerson models.
     * @return mixed
     */
    public $layout='head';
    //csrf
    public $enableCsrfValidation=false;
    public function actionIndex()
    {
       //查
        $sql = "SELECT * FROM bd_category WHERE c_parentid=0";
        $cate= Yii::$app->db->createCommand($sql)->queryAll();
        $ok=$this->cate(0,$cate);
//        print_r($ok);die;
        return $this->render('index',array('cate'=>$ok));
    }
    public function cate($c_parentid,$data){
            foreach ($data as $k => $v) {
                if($v['c_parentid']==0){
                    $c_parentid=$v['c_id'];
                }
                $sql="SELECT * FROM bd_category WHERE c_parentid=$c_parentid";
                $ok[$v['c_name']]= Yii::$app->db->createCommand($sql)->queryAll();
                foreach ($ok[$v['c_name']] as $kk => $vv) {
                    $ok[$v['c_name']][$vv['c_name']]=$vv['c_id'];
                    unset($ok[$v['c_name']][$kk]);
                    $c_parentid=$vv['c_id'];
                    $sql="SELECT * FROM bd_category WHERE c_parentid=$c_parentid";
                    $late= Yii::$app->db->createCommand($sql)->queryAll();
                    if(!empty($late)) {
                        $ok[$v['c_name']][$vv['c_name']] = $late;
                        foreach ($ok[$v['c_name']][$vv['c_name']] as $kkk => $vvv) {
                            $ok[$v['c_name']][$vv['c_name']][$vvv['c_name']] = $vvv['c_id'];
                            unset($ok[$v['c_name']][$vv['c_name']][$kkk]);
                        }
                    }
                }
            }
        return $ok;
    }
    //分类菜单栏详情--dan
    public function actionJob(){
        //获取id
        $id=Yii::$app->request->get('c_id');

        //根据分类获取相应的职位信息
        $sql="select * from bd_recruit INNER JOIN bd_category on bd_recruit.c_id=bd_category.c_id where bd_category.c_id=$id";
        $detail=Yii::$app->db->createCommand($sql)->queryAll();
//        print_r($detail);die;

        //bd_company 和 bd_recruit表 联查 获取公司信息
        $sql1="select c.c_name,c.c_tel,c.c_scale from bd_recruit as r INNER JOIN bd_company as c on r.co_id=c.cp_id where r.c_id=$id";
//       echo $sql1;die;
        $co=Yii::$app->db->createCommand($sql1)->queryAll();
//        print_r($co);die;
        $data=array();
        foreach($detail as $k=>$v){
//            print_r($v);die;
            foreach($co as $kk=>$vv){
//                print_r($vv);die;
                $data[$k]=$v;
                $data[$k]['name']=$vv['c_name'];
                $data[$k]['tel']=$vv['c_tel'];
                $data[$k]['scale']=$vv['c_scale'];
                $data[$k]['add_time']=(time()-$v['add_time'])/60;  //分钟
                $time=$data[$k]['add_time'];
                if($data[$k]['add_time']<60){
                    $data[$k]['add_time']=ceil($time).'分钟';
                }else{
                        $data[$k]['add_time']=substr($time/60,0,strpos($time/60,'.')).'小时';
                    if( $data[$k]['add_time']>24){
                        $data[$k]['add_time']=floor($data[$k]['add_time']/24).'天';
                    }

                }
            }
        }
//        print_r($data);die;
        $detail['data']=$data;
//        print_r($data);die;
        return $this->render('mList',$detail);
    }
    //搜索框--dan
    public function actionSearch(){
        $word=Yii::$app->request->get('kd');
        $sql="select * from bd_recruit INNER JOIN bd_category on bd_recruit.c_id=bd_category.c_id where bd_category.c_name like '%$word%'";
        $search_result=Yii::$app->db->createCommand($sql)->queryAll();
        if(!empty($search_result)){
        $c_id=$search_result[0]['c_id'];
        $sql1="select c.c_name,c.c_tel,c.c_scale from bd_recruit as r INNER JOIN bd_company as c on r.co_id=c.cp_id where r.c_id=$c_id";
        $co=Yii::$app->db->createCommand($sql1)->queryAll();
        foreach($search_result as $k=>$v){
            foreach($co as $kk=>$vv){
                $search_result[$kk]['name']=$vv['c_name'];
                $search_result[$kk]['tel']=$vv['c_tel'];
                $search_result[$kk]['scale']=$vv['c_scale'];
            }
        }
        $now=time();

        foreach($search_result as $k=>$v){
//            echo $v['add_time'];die;
            $search_result[$k]['add_time']=floor(($now-$v['add_time'])/3600);

        }
//        print_r($search_result);die;
        $detail['data']=$search_result;
        return $this->render('mList',$detail);
        }else{
            return "<script>alert('亲~抱歉，您的搜索摆渡暂时不能呈上');location.href='?r=bd-person/index'</script>";
        }

    }
    //招聘信息详情页
    public function actionDetail(){
        $p_id=Yii::$app->request->get('p_id');
        //查询发布信息
        $sql="select * from bd_recruit as r INNER JOIN bd_company as c ON r.co_id=c.cp_id where r.p_id=$p_id";
        $detail_result=Yii::$app->db->createCommand($sql)->queryOne();
//        print_r($detail_result);die;
        $now=time();
        $time=($now-$detail_result['add_time'])/3600;
//        echo $time;die;
        if($time<=1){
            $detail_result['add_time']=substr($time,0,strpos($time,"."))."分钟";
        }else if($time<=24){
            $detail_result['add_time']=substr($time,0,strpos($time,"."))."小时";
        }else{
            $detail_result['add_time']=floor($time/24)."天";
        }
        $data=array();
        if(!empty($detail_result['job_require'])){
            $data=explode("\r\n",$detail_result['job_require']);
        }
//        print_r($data);die;
//        print_r($detail);die;
        $detail_result['arr']=$data;

//        print_r($detail_result);die;

        return $this->render('jobdetail',['data'=>$detail_result]);
    }
    public function actionToudi(){
        return $this->render('toudi');
    }
    //分类递归
//    public function shu($c_parentid,$data){
//        static $arr=array();
//        foreach ( $data  as $k=>$v) {
//           if($v['c_parentid']==$c_parentid){
//               $arr[]=$v;
//               $this->shu($v['c_id'],$arr);
//           }
//        }
//        return $arr;
//    }
    public function actionTest(){
        //增
//        Yii::$app->db->createCommand()->insert('bd_admin', [
//            'username' => '郭慧敏',
//            'pwd' =>123123,
//        ])->execute();

        //删
//        Yii::$app->db->createCommand()->delete('bd_admin', 'pwd = 123')->execute();
        //该
//        Yii::$app->db->createCommand()->update('bd_admin', ['pwd' => 123], 'username = "郭慧敏"')->execute();
        //查
        $sql = "SELECT * FROM bd_person";
        $data= Yii::$app->db->createCommand($sql)->queryAll();
        return  $this->render('test',array('ok'=>$data));
    }

    /**
     * Displays a single BdPerson model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BdPerson model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BdPerson();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->p_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BdPerson model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->p_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BdPerson model.
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
     * Finds the BdPerson model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BdPerson the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BdPerson::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}