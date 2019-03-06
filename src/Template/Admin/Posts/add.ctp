<h1 class="page-header">新規登録</h1>
<?php
echo $this->Form->create($post);
echo $this->Form->input('title');
echo $this->Form->input('period');
echo $this->Form->input('body');
echo $this->Form->hidden('user_id',["value" => $user_id]);
echo $this->Form->button("登録");
echo $this->Form->end();    
/*
echo $this->Form->create($book);
echo $this->Form->input('title');
echo $this->Form->input('price');
echo $this->Form->input('author_id', ['options' => $authors, "empty"=>"選択"]);
echo $this->Form->input('category_id', ['options' => $categories, "empty"=>"選択"]);
echo $this->Form->button("登録");
echo $this->Form->end();

 * echo $this->Form->create($event);
echo $this->Form->input('name');
echo $this->Form->input('detail');
echo $this->Form->input('max_participant');
echo $this->Form->input('category_id', ['options' => $category, "empty"=>"選択"]);
echo $this->Form->input('user_id', ['options' => $user, "default" => $user_id]);
echo $this->Form->button("登録");
echo $this->Form->end();
 
 * 
 */
?>