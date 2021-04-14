<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
/*
 * @Author: Rwind
 * @Date: 2021-04-01 23:51:41
 * @LastEditTime: 2021-04-10 02:48:02
 * @LastEditors: Please set LastEditors
 * @Description: 主题帮助类
 * @FilePath: \typecho\usr\themes\rwind\inc\Help.php
 */
class Help {
    /**
     * @description: 文章字数统计
     * @param {$cid} 文章ID
     * @return {int}
     */
    public static function  worcont($cid){
        $db=Typecho_Db::get ();
        $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
        $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
	    // echo mb_strlen($text, 'UTF-8');
        echo $cid;
    }

    public static function comments_name($cid){
        $db=Typecho_Db::get ();
        $rs=$db->fetchRow ($db->select ('table.comments.author')->from ('table.comments')->where ('table.comments.coid=?',$cid)->order ('table.comments.coid',Typecho_Db::SORT_ASC)->limit (1));
        // $name=$db->fetchRow($db->select ('table.comments.author')->from('talbe.comments')->where('table.comments.coid=?',$cid)->limit(1));
        echo $rs['author'];
    }
}