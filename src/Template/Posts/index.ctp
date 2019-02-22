<h1 class="page-header">新着エントリー</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">


    
<?php foreach($posts as $post): ?>
 
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
    <td><?= h($post->user->mail_address) ?></td>
</tr>
<tr>
	<th style=fontcolor:blue;><a href=''>お気に入り追加</a></th>	
</tr>
<tr>
	<th scope="col">期間</th>
</tr>
<tr>
    <td><?= h($post->period) ?></td>
</tr>
<tr>
	<th scope="col">スキル</th>
</tr>
<tr>
	<th scope="col">提供内容</th>
</tr>
<tr>
    <td><?= h($post->body) ?></td>
</tr>

<?php endforeach; ?>
</table>
<div class="paginator">
	<ul class="paginator">
		<?= $this->Paginator->numbers([
			'before' => $this->Paginator->first("<<"),
			'after' => $this->Paginator->last(">>"),
		]) ?>
	</ul>
</div>