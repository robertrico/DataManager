<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Instance'), ['action' => 'edit', $usersInstance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Instance'), ['action' => 'delete', $usersInstance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersInstance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Instances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Instance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instances'), ['controller' => 'Instances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instance'), ['controller' => 'Instances', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersInstances view large-9 medium-8 columns content">
    <h3><?= h($usersInstance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersInstance->has('user') ? $this->Html->link($usersInstance->user->id, ['controller' => 'Users', 'action' => 'view', $usersInstance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instance') ?></th>
            <td><?= $usersInstance->has('instance') ? $this->Html->link($usersInstance->instance->name, ['controller' => 'Instances', 'action' => 'view', $usersInstance->instance->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersInstance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usersInstance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usersInstance->modified) ?></td>
        </tr>
    </table>
</div>
