<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/whc_dbhw/Public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/whc_dbhw/Public/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/whc_dbhw/Public/assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/whc_dbhw/Public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <?php if($type == 'index'): ?><li class="active">
                    <?php else: ?>
                    <li><?php endif; ?>
                    <a href="<?php echo U('index');?>"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                </li>
                <!--<?php if($type == 'charts'): ?>-->
                    <!--<li class="active">-->
                        <!--<?php else: ?>-->
                    <!--<li>-->
                <!--<?php endif; ?>-->
                    <!--<a href="<?php echo U('charts');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>-->
                <!--</li>-->

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Tables <i class="fa fa-fw fa-caret-down"></i></a>
                    <?php if($type == 'tables'): ?><ul id="demo" class="collapse in" aria-expanded="true">
                            <?php else: ?>
                        <ul id="demo" class="collapse"><?php endif; ?>
                        <li class="active">
                            <a href="<?php echo U('courseList');?>">课程查看</a>
                        </li>
                        <li>
                            <a href="<?php echo U('selectionList');?>">选课记录查看</a>
                        </li>
                    </ul>
                </li>
                <li>

                <?php if($type == 'forms'): ?><li class="active">
                        <?php else: ?>
                    <li><?php endif; ?>
                    <a href="<?php echo U('forms');?>"><i class="fa fa-fw fa-edit"></i> 添加课程</a>
                </li>

                <?php if($type == 'stuReg'): ?><li class="active">
                        <?php else: ?>
                    <li><?php endif; ?>
                <a href="<?php echo U('stuReg');?>"><i class="fa fa-fw fa-edit"></i>学生注册</a>
                </li>


                <!--<?php if($type == 'elements'): ?>-->
                    <!--<li class="active">-->
                        <!--<?php else: ?>-->
                    <!--<li>-->
                <!--<?php endif; ?>-->
                    <!--<a href="<?php echo U('elements');?>"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>-->
                <!--</li>-->
                <!--<?php if($type == 'grid'): ?>-->
                    <!--<li class="active">-->
                        <!--<?php else: ?>-->
                    <!--<li>-->
                <!--<?php endif; ?>-->
                    <!--<a href="<?php echo U('grid');?>"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>-->
                <!--</li>-->

                <!--<?php if($type == 'blankpage'): ?>-->
                    <!--<li class="active">-->
                        <!--<?php else: ?>-->
                    <!--<li>-->
                <!--<?php endif; ?>-->
                    <!--<a href="<?php echo U('blankpage');?>"><i class="fa fa-fw fa-file"></i> Blank Page</a>-->
                <!--</li>-->
                <!--<?php if($type == 'rtl'): ?>-->
                    <!--<li class="active">-->
                        <!--<?php else: ?>-->
                    <!--<li>-->
                <!--<?php endif; ?>-->
                    <!--<a href="<?php echo U('rtl');?>"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>-->
                <!--</li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                    <div class="col-lg-12">
                        <h2>全部课程</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>课程名称</th>
                                        <th>授课教师</th>
                                        <th>学分</th>
                                        <th>适合年份</th>
                                        <th>课程介绍</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($vo["name"]); ?></td>
                                        <td><?php echo ($vo["tea_name"]); ?></td>
                                        <td><?php echo ($vo["credit"]); ?></td>
                                        <td><?php echo ($vo["recommend_year"]); ?></td>
                                        <td><?php echo ($vo["content"]); ?></td>
                                        <td><a href="<?php echo U('courseDel', array('id' => $vo['classs_id']));?>"><button type="button" class="btn btn-xs btn-danger">删除</button></a>
                                        <a href="<?php echo U('courseChange', array('id' => $vo['classs_id']));?>"><button type="button" class="btn btn-xs btn-info">修改</button></a></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/whc_dbhw/Public/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/whc_dbhw/Public/assets/js/bootstrap.min.js"></script>

</body>

</html>