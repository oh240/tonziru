	<?php echo $this->element('menu');?>
	<div class="leftContent pull-left">
		<div class="input-group">
      <!--<input type="text" class="form-control ta" name="name">-->
      <input type="text" class="form-control" id="searchWord" name="name">
      <span class="input-group-btn">
        <button class="btn btn-default" id="s_Submit" type="button">
        	<span class="glyphicon glyphicon-search">
        </button>
      </span>
    </div><!-- /input-group -->
    <br>
    <?php echo $this->Html->link('新規追加',
    			array(
    				'controller'=>'snippets',
    				'action'=>'add'
    			),
    			array(
    				'class'=>'btn btn-success btn-lg btn-block'
    			)
    		);
    ?>
    <div class="clearfix"></div>
    <br>
		<div class="list-group">

		</div>
		<div class="page">	
			<p class="pull-left preDiv">
			</p>
			<p class="pull-right nexDiv">
			</p>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="rightContent pull-left">
		<h3 class="snippetTitle">
		
		</h3>
			<p class="pull-right editor">
				<a href="#" class="btn btn-default" id="linker">
					編集
					<span class="glyphicon glyphicon-edit"></span>
				</a>
			</p>	
		<div class="well">	
			<div class="clearfix"></div>
			<div class="codeArea">
				<pre class="code"></pre>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>