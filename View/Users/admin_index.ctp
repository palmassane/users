<?php
/**
 * Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2011, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="users index">
	<h2><?php echo __d('users', 'Users'); ?></h2>

	<h3><?php echo __d('users', 'Filter'); ?></h3>
	<?php 
	echo $this->Form->create($model, array('action' => 'index'));
		echo $this->Form->input('username', array('label' => __d('users', 'Username')));
		echo $this->Form->input('email', array('label' => __d('users', 'Email')));
	echo $this->Form->end(__d('users', 'Search'));
	?>

	<?php echo $this->element('paging'); ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('email_authenticated'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __d('users', 'Actions'); ?></th>
		</tr>
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $user[$model]['username']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email_authenticated']; ?>
				</td>
				<td>
					<?php echo $user[$model]['active']; ?>
				</td>
				<td>
					<?php echo $user[$model]['created']; ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__d('users', 'View'), array('action'=>'view', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Edit'), array('action'=>'edit', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Delete'), array('action'=>'delete', $user[$model]['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $user[$model]['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php echo $this->element('Users/admin_sidebar'); ?>
