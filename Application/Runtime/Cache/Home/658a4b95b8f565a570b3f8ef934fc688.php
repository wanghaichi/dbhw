<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/whc_dbhw/Public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/whc_dbhw/Public/assets/css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo U('classList');?>">课程列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('myCourse');?>">已选课程</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header"><?php echo ($info['name']); ?>
                    <small><?php echo ($info['tea_name']); ?></small>
                </h1>

            </div>
            <div class="col-lg-6">
                <br/><br/>
                <form method="post" action="<?php echo U('selClas');?>" name="class">
                    <input name="id" type="hidden" value="<?php echo ($info['classs_id']); ?>"/>
                    <?php if($is == 0): ?><button type="submit" class="btn btn-lg btn-primary">就选他了！</button>
                        <?php else: ?>
                        <a href="<?php echo U('Admin/Index/selDel', array('sid' => $sid, 'cid' => $info['classs_id']));?>">
                            <button type="button" class="btn btn-lg btn-danger">俺不选了！</button>
                        </a><?php endif; ?>
                    </form>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src=/whc_dbhw/Public/Uploads/<?php echo ($info['pic']); ?> alt="">
            </div>

            <div class="col-md-4">
                <h3>课程描述</h3>
                <p><?php echo ($info['content']); ?></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">该老师所开其他课程：</h3>
            </div>
            <?php if(empty($other)): ?><div class="col-sm-12 col-xs-6">
                    <b><h4>该老师还没有开其他课程</h4></b>
                </div>
                <?php else: ?>
            <?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-3 col-xs-6">
                    <h3><?php echo ($vo["name"]); ?></h3>
                    <a href="<?php echo U('detail', array('id' => $vo['classs_id']));?>">
                        <img class="img-responsive portfolio-item" src=/whc_dbhw/Public/Uploads/<?php echo ($vo["pic"]); ?>  alt="">
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>




        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/whc_dbhw/Public/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/whc_dbhw/Public/assets/js/bootstrap.min.js"></script>

</body>

</html>