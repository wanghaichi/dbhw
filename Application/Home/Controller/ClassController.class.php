<?php
    /**
     * Created by PhpStorm.
     * User: dell
     * Date: 2016/5/6
     * Time: 11:32
     */

    namespace Home\Controller;


    use Admin\Model\MainModel;
    use Think\Controller;
    use Think\Page;

    class ClassController extends Controller
    {
        public function index(){
            $this->display('classList');
        }

        public function classList(){

            $dbCon = new MainModel('clas');
            $count = $dbCon->count();

            $Page = new \Think\Page($count, 9);
            $show = $Page->show();
            $temlist = $dbCon->limit($Page->firstRow.','.$Page->listRows)->order('time DESC')->select();
            $list = array();
            $count = 0;
            $group = -1;
            foreach($temlist as $i){
                if($count == 0)
                    $group++;
                $list[$group][$count] = $i;
                $count = ($count+1)%3;
            }
            $this->assign('list', $list);
            $this->assign('page', $show);
            $this->assign('gcount', $group);
            $this->display('classList');
        }

        public function detail(){
            $dbCon = new MainModel('clas');
            $classId = I('get.id');
            if(!$classId){
                $this->error("未找到该课程");
            }
            $info = $dbCon->where("classs_id = $classId")->select();
            if(!$info){
                $this->error("未找到该课程");
            }
            else{
                $info = $info[0];
                $tea = $info['tea_name'];
                $tea = "'".$tea."'";
                $curid = $info['classs_id'];
                $other = $dbCon->where("`tea_name` = $tea and `classs_id` <> $curid")->limit(4)->order('time DESC')->select();

                $selCon = new MainModel('select');
                $id = session("id");
                $isin = $selCon->where("classs_id = $classId and stud_sno = $id")->select();
                if($isin){
                    $is = 1;
                }
                else{
                    $is = 0;
                }

                $this->assign("is", $is);
                $this->assign("sid", session("id"));
                $this->assign("other", $other);
                $this->assign('info', $info);
                $this->display('detail');
            }



        }

        public function selClas(){
            $id= I("post.id");
            $id = $id? $id: 0;
            $claCon = new MainModel('clas');
            $stuCon = new MainModel('stud');
            $claInfo = $claCon->where("classs_id = $id")->select();
            if(!$claInfo)
                $this->error("选课出错，该课程可能已被删除");
            else{
                $stuid = session("id");
                $stuInfo = $stuCon->where("`sno` = $stuid")->select();
                if(!$stuInfo){
                    $this->error("未找到学生信息");
                }
                else{
                    $stuYear = $stuInfo[0]['in_year'];
                    $claYear = $claInfo[0]['recommend_year'];
                    if ($stuYear < $claYear){
                        $this->error("选课失败，您的年级不满足该课程学习要求！");
                    }
                    else{

                        $selCon = new MainModel('select');
                        $is = $selCon
                            ->where("stud_sno = ". $stuInfo[0]['sno']." and classs_id = ".$claInfo[0]['classs_id']."")
                            ->select();
                        if($is){
                            $this->error("你已选过该课程！");
                        }
                        else{
                            $data = array(
                                'stud_sno' => $stuInfo[0]['sno'],
                                'classs_id' => $claInfo[0]['classs_id'],
                                'time' => date("Y-m-d H-i-s"),
                            );

                            $flag = $selCon->add($data);
                            if($flag)
                                $this->success("选课成功！", U('classList'));
                            else{
                                $this->error("数据库错误！");
                            }
                        }
                     }
                }
            }
        }

        public function myCourse(){
            $id = session("id");
            if(!$id) {
                $this->error("请先登录");
            }

            $dbCon = new MainModel('clas');
            $count = $dbCon->join(" `select` on clas.classs_id = select.classs_id")
                ->where("select.stud_sno = $id")
                ->count();

            $Page = new \Think\Page($count, 9);
            $show = $Page->show();
            $temlist = $dbCon->join(" `select` on clas.classs_id = select.classs_id")
                ->where("select.stud_sno = $id")
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();

            $list = array();
            $count = 0;
            $group = -1;
            foreach($temlist as $i){
                if($count == 0)
                    $group++;
                $list[$group][$count] = $i;
                $count = ($count+1)%3;
            }
            $this->assign('list', $list);
            $this->assign('page', $show);
            $this->assign('gcount', $group);
            $this->display('myCourse');
        }
    }