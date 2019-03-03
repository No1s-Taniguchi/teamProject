<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		<?= $this->Html->link("サービス提供サイト", ["controller" => "Homes"], ["class"=>"navbar-brand"]); ?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<?=$this->Html->link("マイページ","#",["data-toggle"=>"dropdown"]); ?>
					<ul class="dropdown-menu">
						<li><?=$this->Html->link("マイワーク一覧","/admin/events/mylist"); ?></li>
						<li><?=$this->Html->link("参加イベント一覧","/admin/events/participate"); ?></li>						
						<li><?=$this->Html->link("新規追加","/admin/events/add"); ?></li>
					</ul>
				</li>
				<li class="dropdown">
					<?=$this->Html->link("お気に入り","/posts/favorite"); ?>
				</li>
                                <li class="dropdown">
					<?=$this->Html->link("依頼一覧",""); ?>
				</li>    
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<p class="navbar-text">ようこそ、<?=$auth["nick_name"]; ?></p>
				<li class="dropdown">
					<?=$this->Html->link("管理","#",["data-toggle"=>"dropdown"]); ?>
					<ul class="dropdown-menu">
						<li><?=$this->Html->link("ユーザ一覧","/admin/users/index"); ?></li>
						<li><?=$this->Html->link("ユーザ編集","/admin/users/edit"); ?></li>
						<li><?=$this->Html->link("ログアウト","/admin/users/logout"); ?></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
			