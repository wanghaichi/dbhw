<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>已选课程</title>

    <!-- Bootstrap Core CSS -->
    <link href="/whc_dbhw/Public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/whc_dbhw/Public/assets/css/3-col-portfolio.css" rel="stylesheet">

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

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">已选课程
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row">
                    <?php if(!empty($vo["0"])): ?><div class="col-md-4 portfolio-item">
                            <?php if(empty($vo["0"]["pic"])): ?><a href="<?php echo U('detail', array('id' => $vo[0]['classs_id']));?>">
                                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                </a>
                                <?php else: ?>
                                <a href="<?php echo U('detail', array('id' => $vo[0]['classs_id']));?>">
                                    <img class="img-responsive" src="/whc_dbhw/Public/Uploads/<?php echo ($vo["0"]["pic"]); ?>" alt="">
                                </a><?php endif; ?>
                            <h3>
                                <a href="<?php echo U('detail', array('id' => $vo[0]['classs_id']));?>"><?php echo ($vo["0"]["name"]); ?>  (<?php echo ($vo["0"]["tea_name"]); ?>)</a>
                            </h3>

                            <p><?php echo ($vo["0"]["content"]); ?></p>
                        </div><?php endif; ?>
                <?php if(!empty($vo["1"])): ?><div class="col-md-4 portfolio-item">
                    <?php if(empty($vo["1"]["pic"])): ?><a href="<?php echo U('detail', array('id' => $vo[1]['classs_id']));?>">
                            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                        </a>
                        <?php else: ?>
                        <a href="<?php echo U('detail', array('id' => $vo[1]['classs_id']));?>">
                            <img class="img-responsive" src=/whc_dbhw/Public/Uploads/<?php echo ($vo["1"]["pic"]); ?> alt="">
                        </a><?php endif; ?>
                    <h3>
                        <a href="<?php echo U('detail', array('id' => $vo[1]['classs_id']));?>"><?php echo ($vo["1"]["name"]); ?> (<?php echo ($vo["1"]["tea_name"]); ?>)</a>
                    </h3>
                    <p><?php echo ($vo["1"]["content"]); ?></p>
                </div><?php endif; ?>
                <?php if(!empty($vo["2"])): ?><div class="col-md-4 portfolio-item">

                    <?php if(empty($vo["2"]["pic"])): ?><a href="<?php echo U('detail', array('id' => $vo[2]['classs_id']));?>">
                             <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                         </a>
                        <?php else: ?>
                        <a href="<?php echo U('detail', array('id' => $vo[2]['classs_id']));?>">
                            <img class="img-responsive" src=/whc_dbhw/Public/Uploads/<?php echo ($vo["2"]["pic"]); ?> alt="">
                        </a><?php endif; ?>

                    <h3>
                        <a href="<?php echo U('detail', array('id' => $vo[2]['classs_id']));?>"><?php echo ($vo["2"]["name"]); ?> (<?php echo ($vo["2"]["tea_name"]); ?>)</a>
                    </h3>
                    <p><?php echo ($vo["2"]["content"]); ?></p>
                </div><?php endif; ?>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>


        <!-- /.row -->

        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <?php echo ($page); ?>
            </div>
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