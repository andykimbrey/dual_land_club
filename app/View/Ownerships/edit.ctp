<div class="ownerships form">
<?php echo $this->Form->create('Ownership'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ownership'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('land_id');
		echo $this->Form->input('number_undecked');
		echo $this->Form->input('number_decked');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ownership.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ownership.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
