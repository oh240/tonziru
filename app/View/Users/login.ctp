<div class="jumbotron">
<h1 class="text-center">
	Tonziru.com
</h1>
<br>
<p class="lead text-center">
	Tonziruはプログラマーのために作られたスニペットツールです。<br>
	様々な言語に対応している便利なWebツールです。
</p>
</div>

<?php echo $this->Html->link(
		'Facebookでログイン',
		'/auth/facebook/',
		array(
			'class'=>'btn btn-primary btn-lg btn-block'
		)
	);
?>