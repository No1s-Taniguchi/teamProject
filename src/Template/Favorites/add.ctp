<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorite $favorite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Favorites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="favorites form large-9 medium-8 columns content">
    <?= $this->Form->create($favorite) ?>
    <fieldset>
        <legend><?= __('Add Favorite') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('active_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
