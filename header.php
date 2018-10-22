<meta charset="utf-8" />

<meta content="width=device-width,initial-scale=1.0" name="viewport" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.mini.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/highlight/github.css'); ?>" type="text/css" />
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/ui.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/highlight.pack.js'); ?>" type="text/javascript"></script>
<script>hljs.initHighlightingOnLoad();</script>

<link rel="stylesheet" href="style.css" type="text/css" />

<body>


 <header>
	  <img id="icon" src="<?php $this->options->themeUrl('img/icon.jpg'); ?>" />
	  <p><a id="site_title" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
	  <div onclick="slideToggle()" id="site_info"></div>
	  <div id="header_menu">
	  <a href="<?php $this->options->siteUrl(); ?>">首页</a>
	  <?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}">{title}</a>'); ?>
	  <a href="<?php $this->options->themeUrl('guide/'); ?>">导航</a>
	  </div>
	  <script>typeText();</script>
	</header>
	
	<div id="dog_layout">
  <p id="dog_say"></p>
  <img onclick="showDogSay()" id="dog" src="<?php $this->options->themeUrl('img/dog.gif'); ?>"/>
</div>
	
</body>