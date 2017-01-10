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
<table class="table table-striped">
<thead>
	<tr>
	<?php foreach($schema as $field => $type):?>
		<th><?= $field ?></th>
	<?php endforeach;?>
	</tr>
</thead>
<tbody>
	<?php foreach($records as $key => $record):?>
		<tr>
			<?php foreach($schema as $field => $type):?>
				<td><?= $record[$field] ?></td>
			<?php endforeach;?>
		</tr>
	<?php endforeach;?>
</tbody>
			<!-- /.col -->
</table>

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
