<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
/*
 * @Author: Rwind
 * @Date: 2021-04-10 00:39:40
 * @LastEditTime: 2021-04-10 02:49:29
 * @LastEditors: Please set LastEditors
 * @Description: 评论内容页
 * @FilePath: \typecho\usr\themes\rwind\page\page-comment.php
 */

function threadedComments($comments, $options) { ?>
<li class="comment cleanfix" id="<?php $comments->theId(); ?>">
        <div class="avatar float-left d-inline-block mr-2">
            <?php $comments->gravatar('50', ''); ?>
            <!-- <img src="" width="50" height="50" alt="" class="avatar avatar-50wp-user-avatar wp-user-avatar-50 alignnone photo avatar-default"> -->
        </div>
        <div class="info clearfix">
            <cite class="author_name"><?php $comments->author(); ?></cite>
            <div class="content pb-2">
                <?php if($comments->authorId != 0): ?>
                    <span>@<?php Help::comments_name($comments->authorId)?></span>
                <?php endif ?>
                <?php $comments->content(); ?>
            </div>
            <div class="meta clearfix">
                <div class="date d-inline-block float-left"><?php $comments->date('Y年m月d日'); ?> </div>
                <div class="tool reply ml-2 d-inline-block float-right"> <?php $comments->reply(); ?>  </div>
            </div>
        </div>
    <?php if ($comments->children) { ?>
        <ul class="children">
            <?php $comments->threadedComments($options); ?>
        </ul><!-- .children -->
    <?php } ?>
</li>
<?php } ?>