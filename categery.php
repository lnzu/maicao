<?php
/**
 * categery
 *
 * @package custom
 *
 */
 	 $this->need('header.php');
?>

<title>分类搜索</title>
<!--搜索框-->
<form method="post" action="">
  
  <div class="search">
    <img id="s-icon" src="<?php $this->options->themeUrl('img/search-icon.png'); ?>" />
    <input 
      maxlength="30"
      id="search" 
      placeholder="Search......" 
      autocomplete="off" 
      required="true" 
      name="s" 
      type="text" 
    />
  </div>
  
</form>

<!--分类云-->
<div style="min-height: 280px;height: auto;">
	<div class="categery">
		<?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}">{name}（{count}）</a>');?>
	</div>
</div>



<!--页脚-->
	<?php $this->need('footer.php');?>