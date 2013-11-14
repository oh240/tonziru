One'sPersonalで使用するURLを入力しましょう。

<?php echo $this->Form->create('User');?>

http://<?php echo $this->Form->input('User.url');?>

<?php echo $this->Form->submit('デザインの選択に進む');?>
<?php echo $this->Form->end();?>