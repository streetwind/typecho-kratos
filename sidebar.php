<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="col-lg-4 sidebar d-none d-lg-block" id="secondary" role="complementary">
    <div class="widget w-about">
        <div class="background" style="background:url(https://cdn.jsdelivr.net/gh/5iux/uploads/pic/20200624092748.jpg) no-repeat center center;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
        <div class="wrapper text-center">
            <a href="<?php $this->options->adminUrl(); ?>">
                <?php $this->author->gravatar(32);?>
            </a>
        </div>
        <div class="textwidget text-center">
            <p class="username"><?php $this->options->title(); ?></p>
            <p class="about"><?php $this->options->description();?></p>
        </div>
    </div>
    <div class="widget w-search">
        <div class="title">站内搜索</div>
        <div class="item">
            <form role="search" method="post" id="search" class="searchform" action="<?php $this->options->siteUrl(); ?>">
                <div class="input-group mt-2 mb-2">
                    <input type="text" name="s" id="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-search" type="submit" id="searchsubmit"><?php _e('搜索'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- end #sidebar -->