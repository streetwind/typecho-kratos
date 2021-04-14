<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="k-main <?php echo kratos_option('top_select', 'banner'); ?>" style="background:#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-12 page404">
                <div class="thumbnail" style="background-image: url()">
					<div class="overlay"></div>
				</div>
                <div class="content text-center">
                    <div class="title pt-4"><?php _e('很抱歉，你访问的页面不存在', 'kratos'); ?></div>
                    <div class="subtitle pt-4"><?php _e('可能是输入地址有误或该地址已被删除', 'kratos'); ?></div>
                    <div class="action pt-4">
                        <a href="javascript:history.go(-1)" class="btn btn-outline-primary back-prevpage"><?php _e('返回上页', 'kratos'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
