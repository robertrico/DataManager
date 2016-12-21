<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Input Type
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

				<div class="instances view large-9 medium-8 columns content">
					<h3><?= h($instance->name) ?></h3>
					<table class="vertical-table">
						<tr>
							<th scope="row"><?= __('Name') ?></th>
							<td><?= h($instance->name) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Schema') ?></th>
							<td><?= h($instance->schema) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($instance->id) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Created') ?></th>
							<td><?= h($instance->created) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Modified') ?></th>
							<td><?= h($instance->modified) ?></td>
						</tr>
					</table>
				</div>

			</div> 
			<!-- /.col -->

			<div class="col-md-6">
				<div class="box box-info">
					<nav class="large-3 medium-4 columns" id="actions-sidebar">
						<ul class="side-nav">
							<li class="heading"><?= __('Actions') ?></li>
							<li><?= $this->Html->link(__('List Inputtypes'), ['action' => 'index']) ?></li>
						</ul>
					</nav>
				</div> 
			</div> 

		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrap-->
