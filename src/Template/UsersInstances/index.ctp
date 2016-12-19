<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
			Associations
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Input Types</li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
	<section class="content">
		<div class="row">

			<!-- col -->
			<div class="col-md-12">
				<div class="usersInstances index large-9 medium-8 columns content">
					<table class="table table-striped" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th scope="col"><?= $this->Paginator->sort('id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('instance_id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('created') ?></th>
								<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
								<th scope="col" class="actions"><?= __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($usersInstances as $usersInstance): ?>
							<tr>
								<td><?= $this->Number->format($usersInstance->id) ?></td>
								<td><?= $usersInstance->has('user') ? $this->Html->link($usersInstance->user->fullname, ['controller' => 'Users', 'action' => 'view', $usersInstance->user->id]) : '' ?></td>
								<td><?= $usersInstance->has('instance') ? $this->Html->link($usersInstance->instance->name, ['controller' => 'Instances', 'action' => 'view', $usersInstance->instance->id]) : '' ?></td>
								<td><?= h($usersInstance->created) ?></td>
								<td><?= h($usersInstance->modified) ?></td>
								<td class="actions">
									<?= $this->Html->link(__('View'), ['action' => 'view', $usersInstance->id]) ?>
									<?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersInstance->id]) ?>
									<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersInstance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersInstance->id)]) ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="paginator">
						<ul class="pagination">
							<?= $this->Paginator->prev('< ' . __('previous')) ?>
							<?= $this->Paginator->numbers() ?>
							<?= $this->Paginator->next(__('next') . ' >') ?>
						</ul>
						<p><?= $this->Paginator->counter() ?></p>
					</div>
				</div>

			</div> 

		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrap-->
