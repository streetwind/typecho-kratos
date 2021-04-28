<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
/*
 * @Author: your name
 * @Date: 2021-04-21 00:09:33
 * @LastEditTime: 2021-04-29 00:58:46
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \typecho\usr\themes\rwind\inc\Wget.php
 */
class OneCircle extends Typecho_Widget implements Widget_Interface_Do{
    private $db;

    public function __construct($request, $response, $params = NULL)
    {
        parent::__construct($request, $response, $params);
        $this->db = Typecho_Db::get();        
    }    
    
    public function action(){
        print_r("都是什么鬼啊");
        $request = Typecho_Request::getInstance();        
        $this->response->throwJson("success");       
    }
}

class theme_plugin{
    public static function markdown($text){        
        return ParsedownExtra::instance()->setBreaksEnabled(true)->text($text);
    }
}