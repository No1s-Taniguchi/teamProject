<h1 class="page-header">新着エントリー</h1>

test
    
<?php foreach($posts as $post): ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
<tr>
    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
</tr>
<tr>
    <td><?= h($post->id) ?></td>
</tr>
<tr>
    <th scope="col">タイトル</th>
</tr>
<tr>
    <td><?= h($post->title) ?></td>
</tr>
<tr>
    <th scope="col">名前</th>
</tr>
<tr>
    <td><?= h($post->user->nick_name) ?></td>
</tr>
<tr><th class="square_btn fav_on">
<?php
echo $this->Html->link("お気に入り追加",["controller" => "Favorites","action" => "add", $post->id]);
?>
</th></tr>
</table>
<?php endforeach; ?>


<div class="paginator">
	<ul class="paginator">
		<?= $this->Paginator->numbers([
			'before' => $this->Paginator->first("<<"),
			'after' => $this->Paginator->last(">>"),
		]) ?>
	</ul>
</div>