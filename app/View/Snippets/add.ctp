<div class="snippets form">
<?php echo $this->Form->create('Snippet'); ?>
	<fieldset>
		<legend><?php echo __('Add Snippet'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('goods');
		echo $this->Form->input('bats');
		echo $this->Form->input('tags');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Snippets'), array('action' => 'index')); ?></li>
	</ul>
</div>
