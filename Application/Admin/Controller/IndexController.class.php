<?php
namespace Admin\Controller;
use Admin\Model\MainModel;
use Think\Controller;
use Think\Think;

class IndexController extends Controller {

//    public function __construct()
//    {
//        Controller::__construct();
//        require_once APP_PATH.'Admin/Common/func.php';
//    }

    public function index(){
        $claCon = new MainModel('clas');
        $seleCon = new MainModel('select');

        $curClas = $claCon->order("`time` DESC")->limit(5)->select();
        $curSel = $seleCon->order("`time` DESC")->limit(5)->select();
        $curClaNum = $claCon->count();
        $curSelNum = $seleCon->count();


        $type = "index";
        $this->assign("type", $type);
        $this->assign("class", $curClas);
        $this->assign("claNum", $curClaNum);
        $this->assign("selNum", $curSelNum);

        $this->assign("selection", $curSel);
        $this->display('');
    }

    public function blankpage(){
        $type = "blankpage";
        $this->assign("type", $type);
        $this->display('blank-page');
    }

    public function elements(){
        $type = "elements";
        $this->assign("type", $type);
        $this->display('elements');
    }

    public function charts(){
        $type = "charts";
        $this->assign("type", $type);
        $this->display('charts');
    }

    public function forms(){
        $type = "forms";
        $this->assign("type", $type);
        $this->display('forms');
    }

    public function rtl(){
        $type = "rtl";
        $this->assign("type", $type);
        $this->display('index-rtl');
    }

    public function courseList(){
        $dbCon = new MainModel('clas');
        $list = $dbCon->select();




        $type = "tables";
        $this->assign("type", $type);
        $this->assign("list", $list);
        $this->display('courseList');
    }

    public function selectionList(){

        $dbCon = new MainModel('select');
        $list = $dbCon
            ->field("select.score, select.stud_sno, select.classs_id, select.time, select.stud_sno, clas.name, clas.tea_name, clas.credit")
            ->join("left join clas on select.classs_id = clas.classs_id")->order('select.time DESC')->select();

        $this->assign("list", $list);
        $type = "tables";
        $this->assign("type", $type);
        $this->display('selectionList');
    }

    public function grid(){
        $type = "grid";
        $this->assign("type", $type);
        $this->display('grid');
    }

    public function stuReg(){
        $type = "stuReg";
        $this->assign("type", $type);
        $this->display('stuReg');
    }

    public function addCourse(){
        require_once APP_PATH.'Admin/Common/func.php';

        $dbCon = new MainModel('clas');

        $classId = baseNullTest(I('post.id'));
        $className = baseNullTest(I('post.name'));
        $teacher = baseNullTest(I('post.teacher'));
        $credit = baseNullTest(I('post.credit'));
        $content = baseNullTest(I('post.content'));
        $year = baseNullTest(I('post.year'));

        $flag = true;
        $msg = "";
        while($flag){
            if($classId == ""){
                $msg = "请输入正确的课程编号！";
                $flag = false;
                break;
            }
            else if($className == ""){
                $msg = "请输入正确的课程姓名！";
                $flag = false;
                break;
            }
            if($teacher == ""){
                $msg = "请输入正确的教师姓名！";
                $flag = false;
                break;
            }
            if($credit == ""){
                $msg = "请输入正确的学分！";
                $flag = false;
                break;
            }
            if($year == ""){
                $msg = "请输入正确的课程年份！";
                $flag = false;
                break;
            }
            break;
        }
        if(!$flag)
            $this->error($msg, U('forms'));

        //image upload
        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    './Public/Uploads/Image',
            'savePath'   =>    '',
            'saveName'   =>    array('uniqid',''),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg', 'bmp'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $infoPath =  'Image'. $info['file']['savepath'].$info['file']['savename'];
        }

        $image = new \Think\Image();
        $image->open("./Public/Uploads/".$infoPath);
// 生成一个缩放后填充大小150*150的缩略图并保存为thumb.jpg
        $image->thumb(700, 400, \Think\Image::IMAGE_THUMB_FIXED)->save("./Public/Uploads/".$infoPath);

        $time = date("Y-m-d H:i:s");
        $data = array(
            'classs_id' => $classId,
            'name' => $className,
            'tea_name' => $teacher,
            'credit' => $credit,
            'recommend_year' => $year,
            'content' => $content,
            'year' => $year,
            'pic' => $infoPath,
            'time' => $time,
        );
        $pri = $dbCon->where("`classs_id` = $classId")->select();
        if($pri){
            $this->error("该课程号已被注册，请确认", U('forms'));
        }
        $flag = $dbCon->add($data);
        if($flag)
            $this->success("添加成功", U('courseList'));
        else{
            $this->error("添加失败", U('forms'));
        }
    }

    public function courseDel(){
        $did = I('get.id');
        $dbCon = new MainModel('clas');
        $flag = $dbCon->where("classs_id = $did")->delete();
        if($flag)
            $this->success("删除成功", U('CourseList'));
        else
            $this->error("删除失败", U('CourseList'));
    }

    public function courseChange(){
        $id = I("get.id");
        $id = $id? $id : 0;
        $dbCon = new MainModel('clas');
        $info = $dbCon->where("classs_id = $id")->select();


        if($_POST){
            $id = I("post.id");
            $name = I("post.name");
            $teacher = I("post.teacher");
            $content = I("post.content");
            $data = array(
                'name' => $name,
                'tea_name' => $teacher,
                'content' => $content,
            );
            $dbCon = new MainModel('clas');

            if($_FILES['file']['name']){
                //image upload
                $config = array(
                    'maxSize'    =>    3145728,
                    'rootPath'   =>    './Public/Uploads/Image',
                    'savePath'   =>    '',
                    'saveName'   =>    array('uniqid',''),
                    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg', 'bmp'),
                    'autoSub'    =>    true,
                    'subName'    =>    array('date','Ymd'),
                );
                $upload = new \Think\Upload($config);// 实例化上传类
                $info = $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                    exit;
                }else{// 上传成功 获取上传文件信息
                    $infoPath =  'Image'. $info['file']['savepath'].$info['file']['savename'];
                }
                $image = new \Think\Image();
                $image->open("./Public/Uploads/".$infoPath);
// 生成一个缩放后填充大小150*150的缩略图并保存为thumb.jpg
                $image->thumb(700, 400, \Think\Image::IMAGE_THUMB_FIXED)->save("./Public/Uploads/".$infoPath);
                $data['pic']=$infoPath;
                $dbCon->where("classs_id = $id")->save($data);
                $this->success("修改成功", U('courseList'));

            }
            else{
                $dbCon->where("classs_id = $id")->save($data);
                $this->success("修改成功", U('courseList'));
            }

        }

        else{
            if(!$info){
                $this->error("操作失败！");
            }
            else{
                $this->assign("list", $info[0]);
                $this->display("editforms");
            }
        }

    }

    public function addStu()
    {
        require_once APP_PATH . 'Admin/Common/func.php';
        print_r($_POST);
        $dbCon = new MainModel('stud');

        $stuId = baseNullTest(I('post.id'));
        $name = baseNullTest(I('post.name'));
        $gender = baseNullTest(I('post.gender'));
        $age = baseNullTest(I('post.age'));
        $year = baseNullTest(I('post.year'));
        $class = baseNullTest(I('post.class'));


        $flag = true;
        $msg = "";
        while ($flag) {
            if ($stuId == "") {
                $msg = "请输入正确的学号！";
                $flag = false;
                break;
            } else if ($name == "") {
                $msg = "请输入正确的学生姓名！";
                $flag = false;
                break;
            }
            if ($gender == "") {
                $msg = "请输入正确的性别！";
                $flag = false;
                break;
            }
            if ($age == "") {
                $msg = "请输入正确的年龄！";
                $flag = false;
                break;
            }
            if ($year == "") {
                $msg = "请输入正确的入学年份！";
                $flag = false;
                break;
            }
            break;
        }
        if (!$flag)
            $this->error($msg, U('stuReg'));


        $data = array(
            'sno'     => $stuId,
            'name'    => $name,
            'gender'  => $gender,
            'in_age'  => $age,
            'in_year' => $year,
            'class'   => $class,
        );
        $pri = $dbCon->where("`sno` = $stuId")->select();
        if ($pri) {
            $this->error("该学号已被注册，请确认", U('forms'));
        }
        $flag = $dbCon->add($data);
        if ($flag){
            $infoCon = new MainModel('stuinfo');
            $data = array(
                'sno' => $stuId,
                'pwd' => md5($stuId),
            );
            $infoCon->add($data);
            $this->success("添加成功", U('index'));
        }
        else{
            $this->error("添加失败", U('forms'));
        }
    }

    public function selDel(){
        $sid = I('get.sid');
        $cid = I('get.cid');
        if(!$sid || !$cid){
            $this->error("未找到选课记录");
        }
        $dbCon = new MainModel('select');
        $flag = $dbCon->where("stud_sno = $sid and classs_id = $cid")->delete();
        if($flag){
            $this->success("退选成功");
        }
        else{
            $this->error("退选失败");
        }
    }

    public function setScore(){
        if($_POST){
            $newScore = I('post.score');
            $newScore = intval($newScore);
            if($newScore < 0 || $newScore > 100){

                $this->error("请输入正确的分数，0-100");
                exit;
            }
            $sid = I('get.sid');
            $cid = I('get.cid');
            $dbCon = new MainModel('select');
            $data = array(
                'score' => $newScore,
            );
            if(!$newScore || !$sid || !$cid){
                $this->error("信息错误");

            }
            else{
                $flag = $dbCon->where("stud_sno = $sid and classs_id = $cid")->save($data);
                if($flag){
                    $this->success("修改成功");
                }
                else{
                    $this->error("修改失败，数据库错误");
                }
            }

        }

    }


}