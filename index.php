<?php
/**
 * maicao简洁主题。
 * 
 * @package maicao
 * @author maicao
 * @version 1.0
 * @link http://maicao.fun
 */
?>

<?php $this->need('header.php');?>


<title><?php $this->options->title() ?>&nbsp;<?php echo ' 第 '.$this->_currentPage.' 页'; ?></title>


<body>
		<!--列表-->
	  <div id="list_content">
	    <?php while($this->next()): ?>
	      <div id="list">
		      <a href="<?php $this->permalink() ?>" id="list_title"><?php $this->title() ?></a>
		        
		        <p>
		          <span id="list_time"><?php $this->date('Y'); ?>年<?php $this->date('n'); ?>月<?php $this->date('j'); ?>日</span>
		    
		          <span id="list_categery"><?php $this->category('-'); ?></span>
		    
		          <span id="list_author"><?php $this->author(); ?></span>
		        </p>
		        
		      <div id="list_zaiyao">
		        <?php $this->content(''); ?>
		      </div>
		      
		      <hr id="list_hr"/>
		    </div>
		  <?php endwhile; ?>
		  <script>hideLastHr();</script>
	  </div>
		
		<!-- 上一页都下一页-->
    <ul class="pager">
	    <li class="previous">
		    <?php $this->pageLink('上一页'); ?>
	    </li>
	
	    <li><?php echo $this->_currentPage;?>/<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></li>
	
	    <li class="next">
		    <?php $this->pageLink('下一页', 'next'); ?>
	    </li>
    </ul>
    
		<!--页脚-->
		<?php $this->need('footer.php'); ?>

</body>