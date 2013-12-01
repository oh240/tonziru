<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Tonziru | <?php echo $title_for_layout ;?></title>
			<?php echo $this->Html->charset(); ?>
		<?php 
					echo $this->Html->css('bootstrap');
					echo $this->Html->css('style');
					echo $this->Html->css('typeahead.js-bootstrap');
					echo $this->Html->css('shCore');
					echo $this->Html->css('shThemeDefault');
					echo $this->fetch('css');
					echo $this->fetch('script');
		?>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/typeahead.js-bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<h1 class="text-center">
			Tonziru
		</h1>
	</header>
	 <?php echo $this->fetch('content'); ?>
	 <footer>
	 	<hr>
	 </footer>
	 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	 <?php
	  	echo $this->Html->script('shCore',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushXml',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushPython',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushCss',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushPerl',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushJava',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushPhp',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushJScript',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushSql',array('inline'=>'false'));
	  	echo $this->Html->script('shBrushRuby',array('inline'=>'false'));
	  	echo $this->Html->script('bootstrap',array('inline'=>'false'));
	  	echo $this->Html->script('typeahead',array('inline'=>'false'));
	  	echo $this->Html->script('sample',array('inline'=>'false'));
	  ?>
	  <script type="text/javascript">SyntaxHighlighter.all();</script>
</body>
</html>
