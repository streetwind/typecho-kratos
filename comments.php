<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php require_once 'page/page-comment.php'; ?>
<div class="comments" id="comments">
    <h3 class="title"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <?php $comments->listComments(array(
            'before'        =>  '<div class="list">',
            'after'         =>  '</div>',
            'beforeAuthor'  =>  '',
            'afterAuthor'   =>  '',
            'beforeDate'    =>  '',
            'afterDate'     =>  '',
            'dateFormat'    =>  'Y年m月d日',
            'replyWord'     =>  _t('回复'),
            'commentStatus' =>  _t('您的评论正等待审核!'),
            'avatarSize'    =>  50,
            'defaultAvatar' =>  NULL
        )); ?>    
    <?php endif; ?>	
	<div id="commentpage" class="nav text-center my-3">		
	</div>
	<div id="<?php $this->respondId(); ?>" class="comment-respond mt-2">

		<form id="comment-form" name="commentform" action="<?php $this->commentUrl() ?>" method="post">
			<div class="comment-form">
			<?php if(! $this->user->hasLogin()): ?>				
				<div class="comment-info mb-3 row">
					<div class="col-md-6 comment-form-author">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="kicon i-user"></i></span>
							</div>
							<input class="form-control" id="author" placeholder="<?php _e('昵称'); ?>" name="author" type="text" value="<?php $this->remember('author'); ?>">
						</div>
					</div>
					<div class="col-md-6 mt-3 mt-md-0 comment-form-email">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="kicon i-cemail"></i></span>
							</div>
							<input id="mail" class="form-control" name="mail" placeholder="<?php _e('邮箱'); ?>" type="email" value="<?php $this->remember('mail'); ?>">
						</div>
					</div>
					<div class="col-md-6 mt-3 comment-form-author">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="kicon i-url"></i></span>
							</div>
							<input class="form-control" id="url" placeholder="<?php _e('网址', 'kratos'); ?>" name="url" type="url" value="<?php $this->remember('url'); ?>">
						</div>
					</div>
				</div>	
			<?php endif ?>			
				<div class="comment-textarea">
					<textarea class="form-control" id="textarea" name="text" rows="7" required="required"><?php $this->remember('text'); ?></textarea>
					<div class="text-bar clearfix">
						<div class="tool float-left">
							<a class="addbtn" href="#" id="addsmile"><i class="kicon i-face"></i></a>
							<div class="smile">
								<div class="clearfix">									
								</div>
							</div>
						</div>
						<div class="float-right">							
							<input name="submit" type="submit" id="submit" class="btn btn-primary" value="<?php _e('提交评论');?>">
						</div>
					</div>
				</div>
			</div>
		</form>
	
	</div>
</div>
