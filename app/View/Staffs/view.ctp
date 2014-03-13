<div class="staffs view">
<h2><?php echo __('Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Staff Index'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['staff_index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Of Appoinment'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['year_of_appoinment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff'), array('action' => 'edit', $staff['Staff']['staff_index'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staff'), array('action' => 'delete', $staff['Staff']['staff_index']), null, __('Are you sure you want to delete # %s?', $staff['Staff']['staff_index'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($staff['Member'])): ?>
		<dl>
			<dt><?php echo __('Member Index'); ?></dt>
		<dd>
	<?php echo $staff['Member']['member_index']; ?>
&nbsp;</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
	<?php echo $staff['Member']['first_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
	<?php echo $staff['Member']['last_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
	<?php echo $staff['Member']['department']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $staff['Member']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $staff['Member']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Number Of Books Allowed'); ?></dt>
		<dd>
	<?php echo $staff['Member']['number_of_books_allowed']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Member'), array('controller' => 'members', 'action' => 'edit', $staff['Member']['member_index'])); ?></li>
			</ul>
		</div>
	</div>
	