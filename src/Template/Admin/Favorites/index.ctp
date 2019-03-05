
<h1 class="page-header">お気に入り一覧</h1>
    
<?php foreach($favorites as $favorite): ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
<tr>
    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
</tr>
<tr>
    <td><?= h($favorite->post->id) ?></td>
</tr>
<tr>
    <th scope="col">タイトル</th>
</tr>
<tr>
    <td><?= h($favorite->post->title) ?></td>
</tr>
<tr>
    <th scope="col">名前</th>
</tr>
<tr>
    <td><?= h($favorite->user->nick_name) ?></td>
</tr>
<tr><th class="square_btn fav_on">
<?php
echo $this->Html->link("お気に入り解除",["controller" => "Favorites","action" => "delete",$favorite->post->id]);
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

