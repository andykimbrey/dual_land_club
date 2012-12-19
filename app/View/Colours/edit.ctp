<div class="colours form">
<?php echo $this->Form->create('Colour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Colour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Symbol');
		echo $this->Form->input('Land');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Colour.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Colour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Colours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
