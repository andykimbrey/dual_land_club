<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('controller' => 'ownerships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ownership'), array('controller' => 'ownerships', 'action' => 'add')); ?> </li>
	</ul>
</div>
