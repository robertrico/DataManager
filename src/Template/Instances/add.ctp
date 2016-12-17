<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Instance
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
	<section class="content">
		<div class="row">

			<!-- col -->
			<div class="col-md-6">
			  <!-- Horizontal Form -->
			  <div class="box box-warning">
				<div class="box-header with-border">
				  <h3 class="box-title">Instance Schema</h4>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<?= $this->Form->create($instance,['class'=>'form-horizontal']) ?>
				  <div class="box-body">
					<div class="form-group">
					  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
					  <div class="col-sm-10">
						<?= $this->Form->input('name',['class'=>'form-control','placeholder'=>'Instance Name','label'=>false]) ?>
					  </div>
					</div>
				  </div>
				  <!-- /.box-body -->
				  <div class="box-footer">
				  </div>
				  <!-- /.box-footer -->
				<?= $this->Form->end() ?>
			  </div>
			</div> 
			<!-- /.col -->


			<!-- col -->
			<div class="col-md-6">
			  <!-- Horizontal Form -->
			  <div class="box box-info">
				<div class="box-header with-border">
				  <h3 class="box-title">Instance Information</h4>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<?= $this->Form->create($instance,['class'=>'form-vertical']) ?>
				  <div class="box-body">
					<div class="form-group">
					  <div class="col-sm-6">
						<?= $this->Form->input('schema.field1',['class'=>'form-control','placeholder'=>'Instance Name','label'=>'Name']) ?>
					  </div>
					  <div class="col-sm-6">
						<?= $this->Form->input('schema.type1',['class'=>'form-control','placeholder'=>'Instance Name','label'=>'Type']) ?>
					  </div>
					</div>
				  </div>
				  <!-- /.box-body -->
				  <div class="box-footer">
					<button type="submit" class="btn btn-info pull-right">Create</button>
				  </div>
				  <!-- /.box-footer -->
				<?= $this->Form->end() ?>
			  </div>
			</div> 
			<!-- /.col -->


		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= $this->Html->script('instances/add.js'); ?>
<!-- AdminLTE for demo purposes -->
