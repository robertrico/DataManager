<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inputtype'), ['action' => 'edit', $inputtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inputtype'), ['action' => 'delete', $inputtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inputtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inputtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inputtype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inputtypes view large-9 medium-8 columns content">
    <h3><?= h($inputtype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($inputtype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inputtype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($inputtype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($inputtype->modified) ?></td>
        </tr>
    </table>
</div>
