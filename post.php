<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
<div class="col-lg-8 details">
    <div class="article">
        <div class="breadcrumb-box">
        </div>
        <div class="header">
            <center>
                <h1 class="title"><?php $this->title() ?></h1>
            </center>
            <center>
                <div class="meta">
                    <span><?php $this->date('Y年m月d日'); ?></span>
                    <span><?php $this->stat(); ?>点热度</span>
                    <span>人点赞</span>
                    <span><?php $this->commentsNum('0评论', '1 条评论', '%d 条评论'); ?></span>
                </div>
            </center>
        </div>
        <div class="content">
            <?php $this->content(); ?>
        </div>
        <div class="footer clearfix">
            <div class="tags float-left">
                <span>标签：</span>
                <?php $this->tags(',', true, '暂无'); ?>
            </div>
            <div class="tool float-right d-none d-lg-block">
                <div data-toggle="tooltip" data-html="true" data-original-title="最后更新：<?php echo date('Y年m月d日',$this->modified)?>">
                    <span>最后更新：<?php echo date('Y年m月d日',$this->modified)?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="toolbar clearfix">
        <div class="meta float-md-left">
            <?php $this->author->gravatar(30);?>
            <p class="name"><?php $this->options->title(); ?></p>
            <p class="motto mb-0"><?php $this->options->description();?></p>
        </div>
        <div class="share float-md-right text-center">
            <!-- <a href="javascript:;" id="donate" class="btn btn-donate mr-3" role="button"><i class="kicon i-donate"></i> 打赏</a> -->
            <a href="javascript:;" id="thumbs" data-action="love" data-id="652" role="button" class="btn btn-thumbs "><i class="kicon i-like"></i><span class="ml-1">点赞</span></a>
        </div>
    </div>
    <nav class="navigation post-navigation clearfix" role="navigation">
        <div class="nav-previous clearfix"><?php $this->thePrev('%s','没有了'); ?></div>
        <div class="nav-next"><?php $this->theNext('%s','没有了'); ?></div>
    </nav>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>