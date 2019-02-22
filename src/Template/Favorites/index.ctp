<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorite[]|\Cake\Collection\CollectionInterface $favorites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Favorite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="favorites index large-9 medium-8 columns content">
    <h3><?= __('Favorites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($favorites as $favorite): ?>
            <tr>
                <td><?= $this->Number->format($favorite->id) ?></td>
                <td><?= $this->Number->format($favorite->user_id) ?></td>
                <td><?= $favorite->has('post') ? $this->Html->link($favorite->post->title, ['controller' => 'Posts', 'action' => 'view', $favorite->post->id]) : '' ?></td>
                <td><?= h($favorite->active_flag) ?></td>
                <td><?= h($favorite->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $favorite->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $favorite->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $favorite->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorite->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
