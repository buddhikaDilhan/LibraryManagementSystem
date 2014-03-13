<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Student Index'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Batch'); ?></dt>
		<dd>
			<?php echo h($student['Student']['batch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Fine'); ?></dt>
		<dd>
			<?php echo h($student['Student']['total_fine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registered Date'); ?></dt>
		<dd>
			<?php echo h($student['Student']['registered_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['student_index'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['student_index']), null, __('Are you sure you want to delete # %s?', $student['Student']['student_index'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($student['Member'])): ?>
		<dl>
			<dt><?php echo __('Member Index'); ?></dt>
		<dd>
	<?php echo $student['Member']['member_index']; ?>
&nbsp;</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
	<?php echo $student['Member']['first_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
	<?php echo $student['Member']['last_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
	<?php echo $student['Member']['department']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $student['Member']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $student['Member']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Number Of Books Allowed'); ?></dt>
		<dd>
	<?php echo $student['Member']['number_of_books_allowed']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Member'), array('controller' => 'members', 'action' => 'edit', $student['Member']['member_index'])); ?></li>
			</ul>
		</div>
	</div>
	