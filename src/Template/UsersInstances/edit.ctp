<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersInstance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersInstance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Instances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instances'), ['controller' => 'Instances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instance'), ['controller' => 'Instances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersInstances form large-9 medium-8 columns content">
    <?= $this->Form->create($usersInstance) ?>
    <fieldset>
        <legend><?= __('Edit Users Instance') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('instance_id', ['options' => $instances]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
