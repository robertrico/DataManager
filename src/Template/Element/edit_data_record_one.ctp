<?= $this->Form->create($instance) ?>
	<?php foreach($view_form as $key => $input):?>
		<?= $this->Form->input($key,['type'=>$input->html_type]); ?>
	<?php endforeach;?>
	<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
