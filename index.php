<?php
/**
 * 自己用的typechon主题
 * 
 * @package 自用主题 
 * @author RWind
 * @version 0.1
 * @link https://www.sysblz.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-lg-8 board" id="main">
<?php while($this->next()): ?>
	<div class="article-panel">
		<span class="a-card d-none d-md-block d-lg-block">			
		</span>    
		<div class="a-thumb">
			<a href="<?php $this->permalink() ?>">
				<img src="<?php Help::getPostImg($this); ?>">		
			</a>
		</div>
		<div class="a-post">
			<div class="header">				
				<a class="label" href="<?php echo $this->categories[0]['permalink']; ?>"><?php $this->category(' • ',false,'无') ?><i class="label-arrow"></i></a>
				<h3 class="title"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h3>
			</div>
			<div class="content">
				<p>
					<?php 
							if($this->fields->previewContent)
								$this->fields->previewContent();
							else
								$this->excerpt(50, '...');
					?>
				</p>
			</div>
    	</div>
		<div class="a-meta">
			<span class="float-left d-none d-md-block">			
				<span class="mr-2"><i class="kicon i-calendar"></i><?php $this->date('Y年m月d日'); ?></span>
				<span class="mr-2"><i class="kicon i-comments"></i><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
			</span>
			<span class="float-left d-block">
				<?php if(Config::pluginStat('Stat')):?>
				<span class="mr-2"><i class="kicon i-hot"></i><?php $this->stat(); ?>点热度</span>
				<?php endif ?>
				<span class="mr-2"><i class="kicon i-good"></i>人点赞</span>
				<span class="mr-2"><i class="kicon i-book"></i><?php Help::worcont($this->cid); ?>字</span>
				<span class="mr-2"><i class="kicon i-author"></i><?php $this->author(); ?></span>
			</span>
			<span class="float-right">
				<a href="<?php $this->permalink(); ?>"><?php _e('阅读全文', 'kratos'); ?><i class="kicon i-rightbutton"></i></a>
			</span>
    	</div>   
	</div>
<?php endwhile; ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
