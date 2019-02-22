<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
<<<<<<< HEAD
        <?= $this->Form->input('mail_address') ?>
=======
        <?= $this->Form->input('family_name') ?>
        <?= $this->Form->input('first_name') ?>
        <?= $this->Form->input('phonetic_family_name') ?>
        <?= $this->Form->input('phonetic_first_name') ?>
        <?= $this->Form->input('nick_name') ?>
>>>>>>> b20f960... ログイン
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('mail_address') ?>
        <?= $this->Form->input('sex') ?>
        <?= $this->Form->input('age') ?>
        <?= $this->Form->input('tell') ?>
        <?= $this->Form->input('job') ?>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'user' => 'user']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>