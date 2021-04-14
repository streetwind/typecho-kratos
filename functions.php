<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 定义宏版本
define('ARIA_VERSION', '0.1');

require_once 'inc/Config.php';
require_once 'inc/Help.php';

function themeConfig($form) {
    $icoUrl = new Typecho_Widget_Helper_Form_Element_Text('icoUrl', NULL, NULL, _t('站点 ICO 图标'), _t('在这里填入一个ico图标 URL 地址, 以在网站标题前加上一个 ico'));
    $form->addInput($icoUrl);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);

    $backgroundUrl = new Typecho_Widget_Helper_Form_Element_Textarea('backgroundUrl', null, null, _t('首页背景图片'), _t('需要输入http(s)://，每一行写一个URL，随机展示'));
    $form->addInput($backgroundUrl);

    $defaultThumbnail = new Typecho_Widget_Helper_Form_Element_Textarea('defaultThumbnail', null, null, _t('默认文章缩略图'), _t('填入默认的缩略图地址，未设置缩略图字段时调用此地址，需要带http(s)://，每一行写一个URL，随机展示'));
    $form->addInput($defaultThumbnail);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSearch' => _t('显示搜索')
    ),
    array('ShowSearch'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
    $navConfig = new Typecho_Widget_Helper_Form_Element_Textarea('navConfig', null,
        '{
            "text":"首页",
            "href":"' . Helper::options()->siteUrl . '",
            "class":"nav-item"
        },
        {
            "text":"归档",
            "href":"#",
            "class":"nav-item dropdown",
            "sub" : [
                {
                    "text":"日常",
                    "href":"https://eriri.ink/category/daily/",
                    "class": "nav-item"
                }
            ]
        },
        {
            "text":"留言",
            "href":"#",
            "class":"nav-item"
        },
        {
            "text":"朋友",
            "href":"#",
            "class":"nav-item"
        },
        {
            "text":"关于",
            "href":"#",
            "class":"nav-item"
        }',
        _t('导航栏配置'),
        _t('输入导航栏的配置信息')
    );
    $form->addInput($navConfig->multiMode());

    $statistics = new Typecho_Widget_Helper_Form_Element_Textarea('statistics', null, null, _t('统计代码'), _t('在此填入统计的代码(目前统计代码支持谷歌统计和百度统计的重载，若使用其他统计请关闭PJAX否则得到的统计数据不准确)'));
    $form->addInput($statistics);

    $customScript = new Typecho_Widget_Helper_Form_Element_Textarea('customScript', null, null, _t('自定义JS'), _t('会加载在main.min.js文件加载之前'));
    $form->addInput($customScript);

    $RWindConfig = new Typecho_Widget_Helper_Form_Element_Checkbox('RWindConfig',
        array(
            'enableCDN' => '开启CDN  (启用后静态资源加载公共CDN) ',
            'enablePjax' => '开启PJAX（启用后会强制关闭评论反垃圾保护）',
            'enableAjaxComment' => '开启AJAX评论',            
            'enableLazyload' => '开启图片懒加载<a href="https://appelsiini.net/projects/lazyload" target="_blank">lazyload</a>',            
            'enableMathJax' => '启用MathJax'
        ),
        array('enableCDN'),
        '开关设置'
    );
    $form->addInput($RWindConfig->multiMode());
}


function themeFields($layout)
{
    $thumbnail = new Typecho_Widget_Helper_Form_Element_Text('thumbnail', null, null, _t('文章/页面缩略图Url'), _t('需要带上http(s)://'));
    $previewContent = new Typecho_Widget_Helper_Form_Element_Text('previewContent', null, null, _t('文章预览内容'), _t('设置文章的预览内容，留空自动截取文章前50个字。'));
    $showTOC = new Typecho_Widget_Helper_Form_Element_Radio('showTOC', array(true => _t('开启'), false => _t('关闭')), false, _t('文章目录'), _t('仅会解析h2和h3标题，最多解析两层'));

    $layout->addItem($thumbnail);
    $layout->addItem($previewContent);
    $layout->addItem($showTOC);
}

