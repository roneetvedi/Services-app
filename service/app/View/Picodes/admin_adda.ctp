<div class="row">
<div class="col-sm-3">
<div class="dishSubcats form">
<?php echo $this->Form->create('Picode'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Picode'); ?></legend>
	<?php
		echo $this->Form->input('res_id');
                echo $this->Form->input('pincode');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<div class="col-sm-3">
<div class="actions action_menu">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Picodes'), array('action' => 'indexa')); ?></li>
		
	</ul>
</div>
</div>
</div>
