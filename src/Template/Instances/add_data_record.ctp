<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Data Record
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
			<div class="col-md-6">
			  <!-- Horizontal Form -->
			    <div class="box box-warning">
					<?= $this->Form->create($instance) ?>

						<?php foreach($schema as $field => $type): ?>
							<?php echo $this->Form->input($field,['type'=>$input_types{$type}]); ?>
						<?php endforeach; ?>

						<?= $this->Form->button(__('Submit')) ?>
					<?= $this->Form->end() ?>
				</div>
			</div> 
			<!-- /.col -->

			<div class="col-md-6">
				<div class="box box-info">
				</div> 
			</div> 

		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrap-->
