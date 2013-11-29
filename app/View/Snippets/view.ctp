<div class="snippets view">
<h2><?php echo __('Snippet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goods'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['goods']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bats'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['bats']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($snippet['Snippet']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snippet'), array('action' => 'edit', $snippet['Snippet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snippet'), array('action' => 'delete', $snippet['Snippet']['id']), null, __('Are you sure you want to delete # %s?', $snippet['Snippet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snippets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snippet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
