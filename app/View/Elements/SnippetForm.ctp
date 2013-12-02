<?php echo $this->Form->create();?>

	<?php echo $this->Form->input('Snippet.id');?>
	<h3 class="text-center">
		<?php echo $this->Form->input('Snippet.title',
			array(
					'class'=>'form-control titleInput',
					'label'=>false
				)
			);
		?>
	</h3>
	<hr>
	<?php echo $this->Form->input('Snippet.category_id',
			array(
				'type'=>'select',
				'options'=>$categoryList,
				'class'=>'form-control',
				'label'=>false
			)
		);
	?>
	<hr>
	<div class="well">
		<?php echo $this->Form->input('Snippet.body',
			array(
					'type'=>'textarea',
					'class'=>'form-control',
					'rows'=>15,
					'label'=>false
				)
			);
		?>
		<br>
		<?php if ($this->action == 'edit') :?>
		
			<?php echo $this->Form->submit('編集',
					array(
						'class'=>'btn btn-success pull-right'
					)
				);
			?>
		
      <?php 
				echo $this->Form->postLink('削除する', 
					array(
				      'action' => 'delete',
				       $snippet['Snippet']['id']
					),
					array(
				      'class'=>'btn btn-danger pull-right'
					), __('本当に削除しますか?')
				); 
     	?>

		<?php else :?>
			<?php echo $this->Form->submit('登録',
					array(
						'class'=>'btn btn-success pull-right'
					)
				);
			?>
		<?php endif ;?>
		<div class="clearfix"></div>

	</div>

	<p>
		<?php echo $this->Html->link('戻る',array(
				'controller'=>'snippets',
				'action'=>'index'
			),
			array(
				'class'=>'btn btn-default'
			)
		)
		?>
	</p>

<?php echo $this->Form->end();?>