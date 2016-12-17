<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instances'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instances form large-9 medium-8 columns content">
    <?= $this->Form->create($instance) ?>
    <fieldset>
        <legend><?= __('Add Instance') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('schmema');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
