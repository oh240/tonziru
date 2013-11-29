<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<?php echo $this->Html->charset(); ?>
		<?php 
					echo $this->Html->css('bootstrap');
					echo $this->Html->css('style');
					echo $this->Html->css('typeahead.js-bootstrap');
					echo $this->fetch('css');
					echo $this->fetch('script');
		?>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/typeahead.js-bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	 <link rel="stylesheet" href="css/style.css">
	 <script type="text/javascript" src="js/bootstrap.js"></script>
	 <script type="text/javascript" src="js/typeahead.js"></script>
	 <script type="text/javascript" src="js/sample.js"></script>
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
	 <?php 
	  	echo $this->Html->script('bootstrap',array('inline'=>'false'));
	  	echo $this->Html->script('typeahead',array('inline'=>'false'));
	  	echo $this->Html->script('sample',array('inline'=>'false'));
	  ?>
</body>
</html>
