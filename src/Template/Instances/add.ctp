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

	<?= $this->Form->create($instance,['class'=>'form-horizontal']) ?>
		<!-- Main content -->
		<section class="content">
			<div class="row">

				<!-- col -->
				<div class="col-md-6">
				  <!-- Horizontal Form -->
				  <div class="box box-info">
					<div class="box-header with-border">
					  <h3 class="box-title">Instance Schema</h4>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
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
					  <div class="box-body">
					    <div class="col-sm-12">
						  <button type="button" id="addSchemaField" class="btn btn-primary pull-right">Add More Fields</button>
					    </div>
						<div id="fieldValue" class="form-group">
						  <div class="col-sm-6">
							<?= $this->Form->input('schema.field1',['class'=>'form-control','placeholder'=>'Instance Name','label'=>'Name']) ?>
						  </div>
						  <div class="col-sm-6">
							<?= $this->Form->input('schema.type1',['class'=>'form-control','placeholder'=>'Instance Name','label'=>'Type','options'=>$input_types]) ?>
						  </div>
						</div>
					  </div>
					  <!-- /.box-body -->
					  <!-- /.box-footer -->
				  </div>
				</div> 
				<!-- /.col -->

				<div class="col-md-12">
					<!-- Horizontal Form -->
					<div class="box box-danger text-center">
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div>
				</div> 


			</div>
			<!-- /.row -->
		</section>
	<?= $this->Form->end() ?>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Make PHP Vars Available to JS -->
<script>
	var input_types = JSON.parse("<?php echo addslashes(json_encode($input_types)); ?>");
</script>

<!-- Load JS -->
<?= $this->Html->script('instances/add.js'); ?>
