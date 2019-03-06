<h1 class="page-header">ユーザ編集</h1>

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <?= $this->Form->input('family_name') ?>
        <?= $this->Form->input('first_name') ?>
        <?= $this->Form->input('phonetic_family_name') ?>
        <?= $this->Form->input('phonetic_first_name') ?>
        <?= $this->Form->input('nick_name') ?>
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