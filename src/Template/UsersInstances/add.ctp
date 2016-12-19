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
				<div class="usersInstances form large-9 medium-8 columns content">
					<?= $this->Form->create($usersInstance) ?>
					<fieldset>
						<legend><?= __('Add Users Instance') ?></legend>
						<?php
							echo $this->Form->input('user_id', ['options' => $users]);
							echo $this->Form->input('instance_id', ['options' => $instances]);
						?>
					</fieldset>
					<?= $this->Form->button(__('Submit')) ?>
					<?= $this->Form->end() ?>
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
