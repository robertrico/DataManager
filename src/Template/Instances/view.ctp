<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instance'), ['action' => 'edit', $instance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instance'), ['action' => 'delete', $instance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Instances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instance'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instances view large-9 medium-8 columns content">
    <h3><?= h($instance->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($instance->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schema') ?></th>
            <td><?= h($instance->schema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($instance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($instance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($instance->modified) ?></td>
        </tr>
    </table>
</div>
