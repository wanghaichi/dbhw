<?php
    /**
     * Created by PhpStorm.
     * User: dell
     * Date: 2015/12/12
     * Time: 19:25
     */

    namespace Admin\Model;
    use Think\Model;

    class MainModel extends Model
    {
        protected $connection = array(
            'db_type'  => 'mysql',
            'db_user'  => 'root',
            'db_pwd'   => '',
            'db_host'  => 'localhost',
            'db_port'  => '3306',
            'db_name'  => 'baoming',
        );
        protected $tablePrefix = '';
    }