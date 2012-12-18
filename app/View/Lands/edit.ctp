<div class="lands form">
<?php echo $this->Form->create('Land'); ?>
	<fieldset>
		<legend><?php echo __('Edit Land'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Land.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Land.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('controller' => 'ownerships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ownership'), array('controller' => 'ownerships', 'action' => 'add')); ?> </li>
	</ul>
</div>
