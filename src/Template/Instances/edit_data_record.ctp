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
			<?php
				$view_form = new \StdClass();
				foreach($view_schema as $input => $key){
					$view_form->{$input} =$input_blocks->{$key}; 
				}
				echo $this->element('add_data_record_one',[
					'instance'=>$instance,
					'view_form'=>$view_form
				]);
			?>
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
