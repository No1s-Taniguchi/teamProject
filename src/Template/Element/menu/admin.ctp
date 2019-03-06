<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		<?= $this->Html->link("サービス提供サイト", ["controller" => "Homes"], ["class"=>"navbar-brand"]); ?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<p class="navbar-text"><?=$auth["nick_name"]; ?>さん</p>
                                <li class="dropdown">
					<?=$this->Html->link("マイページ","#",["data-toggle"=>"dropdown"]); ?>
					<ul class="dropdown-menu">
                                                <li><?=$this->Html->link("新規追加","/admin/posts/add"); ?></li>
						<li><?=$this->Html->link("マイワーク一覧","/admin/posts/mylist"); ?></li>
                                                <li><?=$this->Html->link("ユーザ編集","/admin/users/edit"); ?></li>
					</ul>
				</li>
				<li class="dropdown">
					<?=$this->Html->link("お気に入り","/admin/favorites"); ?>
				</li>
				<li class="dropdown">
					<?=$this->Html->link("ログアウト","/admin/users/logout"); ?>
				</li>
			</ul>
		</div>
	</div>
</div>
			