<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
/*
 * @Author: your name
 * @Date: 2021-04-21 00:12:43
 * @LastEditTime: 2021-04-29 01:53:58
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \typecho\usr\themes\rwind\inc\Route.php
 */




$db = Typecho_Db::get();
$prefix = $db->getPrefix();
// contents 如果没有likes字段，则添加
if (!array_key_exists('likes', $db->fetchRow($db->select()->from('table.contents'))))
    $db->query('ALTER TABLE `'. $prefix .'contents` ADD `likes` INT(10) DEFAULT 0;');