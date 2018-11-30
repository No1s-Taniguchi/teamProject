<h1 class="page-header">新着エントリー</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
<tr>
	<th scope="col"><?= $this->Paginator->sort('id') ?></th>
</tr>
<tr>
	<th scope="col">タイトル</th>
        <td></td>
</tr>
<tr>
	<th scope="col">名前</th>
        <td><?= h($post->name) ?></td>
</tr>
<tr>
	<th style=fontcolor:blue;><a href=''>お気に入り追加</a></th>	
</tr>
<tr>
	<th scope="col">期間</th>
        
</tr>
<tr>
	<th scope="col">スキル</th>
</tr>
<tr>
	<th scope="col">提供内容</th>
</tr>


</table>
<div class="paginator">
	<ul class="paginator">
		<?= $this->Paginator->numbers([
			'before' => $this->Paginator->first("<<"),
			'after' => $this->Paginator->last(">>"),
		]) ?>
	</ul>
</div>