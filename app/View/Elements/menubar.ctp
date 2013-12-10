<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Tonziru</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
			<?php if ($this->Session->read('Auth.User.id')) :?>
      	<li class="active">
					<a href="#">
						ようこそ
						<strong>
							<?php echo $this->Session->read('Auth.User.name');?>
						</strong>
							さん
					</a>
				</li>
	      <li>
					<?php echo $this->Html->link('ログアウト',
										array(
											'controller'=>'users',
											'action'=>'logout'
										)
								);
					?>
				</li>
			<?php endif ;?>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>