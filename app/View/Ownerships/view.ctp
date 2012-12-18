<div class="ownerships view">
<h2><?php  echo __('Ownership'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ownership['Ownership']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ownership['Member']['name'], array('controller' => 'members', 'action' => 'view', $ownership['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ownership['Land']['Name'], array('controller' => 'lands', 'action' => 'view', $ownership['Land']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Undecked'); ?></dt>
		<dd>
			<?php echo h($ownership['Ownership']['number_undecked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Decked'); ?></dt>
		<dd>
			<?php echo h($ownership['Ownership']['number_decked']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ownership'), array('action' => 'edit', $ownership['Ownership']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ownership'), array('action' => 'delete', $ownership['Ownership']['id']), null, __('Are you sure you want to delete # %s?', $ownership['Ownership']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ownership'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
