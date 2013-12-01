	<?php echo $this->element('menu');?>
	<div class="leftContent pull-left">
		<div class="input-group">
      <!--<input type="text" class="form-control ta" name="name">-->
      <input type="text" class="form-control" id="ta" name="name">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
        	<span class="glyphicon glyphicon-search">
        </button>
      </span>
    </div><!-- /input-group -->
    <br>
		<div class="list-group">

		</div>
		<p class="pull-left">
			<button class="btn btn-default Prev">
				Prev
			</button>
		</p>
		<p class="pull-right">
			<button class="btn btn-default Next">
				Next
			</button>
		</p>
		<div class="clearfix"></div>
	</div>

	<div class="rightContent pull-left well">
			
		<h3 class="snippetTitle">
			
		</h3>
			<p class="pull-right">
				<button class="btn btn-default">
						Edit
						<span class="glyphicon glyphicon-edit"></span>
				</button>
			</p>		
			<div class="clearfix"></div>
			<div class="codeArea">
				<pre></pre>
			</div>
			<hr>
		<div class="pull-right">
			<button class="btn btn-success">
				Copy 
				<span class="glyphicon glyphicon-paperclip"></span>
			</button>
			<button class="btn btn-primary goods">
			</button>
			<button class="btn btn-danger bats">
			</button>
		</div>

		</div>