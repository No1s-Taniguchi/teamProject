<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorite $favorite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Favorite'), ['action' => 'edit', $favorite->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Favorite'), ['action' => 'delete', $favorite->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorite->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Favorites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favorite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="favorites view large-9 medium-8 columns content">
    <h3><?= h($favorite->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $favorite->has('post') ? $this->Html->link($favorite->post->title, ['controller' => 'Posts', 'action' => 'view', $favorite->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($favorite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($favorite->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($favorite->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Flag') ?></th>
            <td><?= $favorite->active_flag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
