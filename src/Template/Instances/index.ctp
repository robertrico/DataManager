
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Instances
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

				<div class="instances index large-9 medium-8 columns content">
					<h3><?= __('Instances') ?></h3>
					<table class="table table-striped" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th scope="col"><?= $this->Paginator->sort('id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('name') ?></th>
								<th scope="col"><?= $this->Paginator->sort('schema') ?></th>
								<th scope="col"><?= $this->Paginator->sort('created') ?></th>
								<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
								<th scope="col" class="actions"><?= __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($instances as $instance): ?>
							<tr>
								<td><?= $this->Number->format($instance->id) ?></td>
								<td><?= h($instance->name) ?></td>
								<td><?= h($instance->schema) ?></td>
								<td><?= h($instance->created) ?></td>
								<td><?= h($instance->modified) ?></td>
								<td class="actions">
									<?= $this->Html->link(__('View'), ['action' => 'view', $instance->id]) ?>
									<?= $this->Html->link(__('Edit'), ['action' => 'edit', $instance->id]) ?>
									<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instance->id)]) ?>
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
