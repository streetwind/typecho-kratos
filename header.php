<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- ico -->
    <?php if($this->options->icoUrl){ ?>
        <link rel="shortcut icon" href="<?php $this->options->icoUrl(); ?>" type="image/x-icon" />
    <?php }  ?>

    <!-- 静态资源文件 -->
    <?php if (Config::isEnabled('enableCDN', 'RWindConfig')): ?>
        <!-- 公共CDNJS资源 -->
        <link rel="stylesheet" href="https://libs.cdnjs.net/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
        <script src="https://libs.cdnjs.net/jquery/1.10.0/jquery.min.js"></script>
        <script src="https://libs.cdnjs.net/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
        
        
        <?php if (Config::isEnabled('enablePjax', 'RWindConfig')): ?>
            <script src="https://libs.cdnjs.net/jquery.pjax/0.9/jquery.pjax.min.js"></script>
        <?php endif; ?>

    <?php  else: ?>
        <!-- 本地资源 -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/bootstrap.min.css'); ?>">
        <script src="<?php $this->options->themeUrl('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <?php endif; ?>


    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/rwind.css'); ?>">
    
    <script src="<?php $this->options->themeUrl('assets/js/rwind.js'); ?>"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header">
    <div class="k-header">
        <nav class="k-nav navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">
                    <?php if($this->options->logoUrl): ?>
                        <img src="<?php $this->options->logoUrl(); ?>">
                    <?php else:?>
                        <img src="<?php $this->options->themeUrl('assets/img/logo.svg'); ?>">
                    <?php endif; ?>
                    <h1 style="display:none"><?php $this->options->title(); ?></h1>                    
                </a>
                <button class="navbar-toggler navbar-toggler-right" id="navbutton" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="line first-line"></span>
                    <span class="line second-line"></span>
                    <span class="line third-line"></span>
                </button>
                <div id="navbarResponsive" class="collapse navbar-collapse">
                    <?php Config::showNav(1,'ff'); ?>                  
                </div>
            </div>
        </nav>
        <div class="banner">
            <div class="overlay"></div>
            <div class="content text-center" style="background-image: url(<?php 
            if($this->options->backgroundUrl){
                $img = $this->options->backgroundUrl();
            } else {
                $img = $this->options->themeUrl('assets/img/background.png');
            }
             ?>);">
                <div class="introduce animated fadeInUp">                    
                    <div class="mate"><?php $this->options->description();?></div>                
                </div>
            </div>
        </div>
            
    </div>
</header><!-- end #header -->
<div id="body" class="k-main banner" style="background:#f5f5f5">
    <div class="container">
        <div class="row">

    
    
