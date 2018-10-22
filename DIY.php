<?php
/**
 * DIY
 *
 * @package custom
 *
 */
?>

<?php $this->need('header.php'); ?>

<title><?php $this->title() ?></title>

<div id="posts">
	<a href="<?php $this->permalink() ?>" id="post_title"><?php $this->title() ?></a>

	<p>
	<span id="post_time"><?php $this->date('Y'); ?>年<?php $this->date('n'); ?>月<?php $this->date('j'); ?>日</span>  
	<span id="post_author"><?php $this->author(); ?></span>
	</p>
	
	<div id="post_content">
	  <?php $this->content(''); ?>
	</div>
</div>

<?php $this->need('footer.php'); ?>
