<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Main Menu
      </h1>
		<span class="addLead fa fa-2x fa-plus-square"></span>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Input Types</li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
	<section class="content">
		<div class="row">

		 <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Records</h3>

              <div class="box-tools pull-right">
                <button id="mainMenuMin" type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Access</th>
							<?php foreach($schema as $field => $type):?>
								<th><?= $field ?></th>
							<?php endforeach;?>
							</tr>
						</thead>
						<tbody>
							<?php foreach($records as $key => $record):?>
								<tr>
									<td><i class="viewLead fa fa-2x fa-eye" data-id="<?= $record->_id->__toString() ?>" ></i></td>
									<?php foreach($schema as $field => $type):?>
										<?php if($record[$field] instanceof MongoDB\BSON\UTCDateTime) :?>
												<td><?= $record[$field]->toDateTime()->format('m/d/Y g:i a') ?></td>
										<?php else: ?>
												<td><?= $record[$field] ?></td>
										<?php endif; ?>
									<?php endforeach;?>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>

		 <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Ons</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12" id="leadView">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
		<!-- /.row -->
		 <div class="col-md-7">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Active Record</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12" id="leadView">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
		<!-- /.row -->
		 <div class="col-md-5">
          <!-- MAP & BOX PANE -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Active Record</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12" id="leadView">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrap-->
<script>
$(document).ready(function(){
	var edit_url = "<?= $this->Url->build(['controller'=>'instances','action'=>'editDataRecord']) ?>"
	var add_url = "<?= $this->Url->build(['controller'=>'instances','action'=>'addDataRecord']) ?>"
	var id = "<?= $id?>"
	var main_menu = new MainMenu(id,$("#leadView"),edit_url,add_url);

	$('.viewLead').click(function(){
		main_menu.viewLead($(this).attr('data-id'))
		$('#mainMenuMin').click();
	});

	$('.addLead').click(function(){
		main_menu.addLead();
		$('#mainMenuMin').click();
	});
});
</script>
