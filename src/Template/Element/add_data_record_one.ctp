<?= $this->Form->create($instance) ?>
	<?php foreach($view_form as $key => $input):?>
		<?= $this->Form->input($key,['type'=>$input->html_type]); ?>
	<?php endforeach;?>
	<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

<script>

$(document).ready(function(){
	var add_url = "<?= $this->Url->build(['controller'=>'instances','action'=>'addDataRecord']) ?>"
	var id = "<?= $id?>"
	var add_menu = new AddMenu(id,add_url);

	$('form').submit(function(e){
		e.preventDefault();
		add_menu.add($(this).serialize());

		return false;
	});
});

</script>
