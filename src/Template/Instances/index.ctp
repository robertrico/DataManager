<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instance'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instances index large-9 medium-8 columns content">
    <h3><?= __('Instances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schmema') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instances as $instance): ?>
            <tr>
                <td><?= $this->Number->format($instance->id) ?></td>
                <td><?= h($instance->name) ?></td>
                <td><?= h($instance->schmema) ?></td>
                <td><?= h($instance->created) ?></td>
                <td><?= h($instance->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instance->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
