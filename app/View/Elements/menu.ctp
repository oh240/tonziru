	<div class="menu">	
		<ul class="nav nav-pills">
			<li class="active">
				<a href="#" class="categoryAll">
					All
				</a>
			<li>
		<?php foreach ($categories as $category) :?>
	  	<li>
	  		<a href="#" class="categoryLink" data-id="<?php echo $category['Category']['id'];?>">
	  			<?php echo $category['Category']['name'];?>
	  		</a>
	  	</li>
	  <?php endforeach ;?>
		</ul>
	</div>
	<hr>