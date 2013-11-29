	<div class="menu">	

		<ul class="nav nav-pills">
		<?php foreach ($categories as $category) :?>
	  	<li>
	  		<a href="#" id="category_<?php echo $category['Category']['id'];?>" data-id="<?php echo $category['Category']['id'];?>">
	  			<?php echo $category['Category']['name'];?>
	  		</a>
	  	</li>
	  <?php endforeach ;?>
		</ul>
	</div>
	<hr>