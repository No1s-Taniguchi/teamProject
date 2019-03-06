<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->input('nick_name') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('送信')); ?>
<?= $this->Form->end() ?>
</div>