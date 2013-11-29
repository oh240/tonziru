	
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
		<?php foreach ($snippets as $snippet) :?>
		 	<a href="#" class="list-group-item" id="snippet_<?php echo $snippet['Snippet']['id'];?>" data-id="<?php echo $snippet['Snippet']['id'];?>">
		 		<span class="badge">
		 			<?php echo $snippet['Category']['name']; ?>
		 		</span>
		    <h5 class="list-group-item-heading">
		    	<?php echo $snippet['Snippet']['title'];?>
		    </h5>
		  </a>
			<?php endforeach ;?>
		</div>
	</div>

<div class="rightContent pull-left well">
		
	<h2>すにぺっと１</h2>
	<p class="pull-right">
		<button class="btn btn-success">
			Copy 
			<span class="glyphicon glyphicon-paperclip"></span>
		</button>
		<button class="btn btn-default">
				Edit
				<span class="glyphicon glyphicon-edit"></span>
		</button>
	</p>		
	<div class="clearfix"></div>
	<pre class="codeview">
		&lt;p&gt;Sample text here...&lt;/p&gt;
		&lt;p&gt;Sample text here...&lt;/p&gt;
		&lt;p&gt;Sample text here...&lt;/p&gt;
		&lt;p&gt;Sample text here...&lt;/p&gt;
		/*ここにコメントを記入しましょう*/
	</pre>
	<div>	
				<span class="glyphicon glyphicon-tag"></span> Tags:
	    	<span class="label label-primary">Html</span>
	    	<span class="label label-primary">PHP</span>
	    	<span class="label label-primary">日本語に対する対応技術</span>
	    	<span class="label label-primary">Html</span>
	    	<span class="label label-primary">PHP</span>
	    	<span class="label label-primary">日本語に対する対応技術</span>
	    	<span class="label label-primary">Html</span>
	    	<span class="label label-primary">PHP</span>
	    	<span class="label label-primary">日本語に対する対応技術</span>
	</div>

	<hr>

	<div class="pull-right">
		<button class="btn btn-danger">
			Bat ... 
			<span class="glyphicon glyphicon-thumbs-down"></span>
		</button>
		<button class="btn btn-primary">
			Good !
			<span class="glyphicon glyphicon-thumbs-up"></span>
		</button>
	</div>

	</div>