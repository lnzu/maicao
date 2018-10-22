<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<title><?php $this->title() ?></title>

<div id="posts">
	<a href="<?php $this->permalink() ?>" id="post_title"><?php $this->title() ?></a>

	<p>
	<span id="post_time"><?php $this->date('Y'); ?>年<?php $this->date('n'); ?>月<?php $this->date('j'); ?>日</span>  
	<span id="post_categery"><?php $this->category(','); ?></span>
	<span id="post_author"><?php $this->author(); ?></span>
	</p>
	
	<div id="post_content">
	  <?php $this->content(''); ?>
	</div>
	   
</div>

<div style="margin-left:5px">
<p>上一篇: <?php $this->thePrev('%s','没有了'); ?></p>
<p>下一篇: <?php $this->theNext('%s','没有了'); ?></p>
</div>

<?php $this->need('footer.php'); ?>
