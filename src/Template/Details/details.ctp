<h3>詳細</h3>
<?php
echo $this->Html->css('details');
?>

<table border="1" class="s1">
  <tr>
  <?php foreach ($results as $result): ?>
    <td class="reft" width="30">名前</td>
    <td width="200"><?php echo $result->name; ?></td>
  </tr>
  <tr>
    <td class="reft">性別</td>
    <td><?php echo $result->sex; ?></td>
  </tr>
  <tr>
    <td class="reft">年齢</td>
    <td><?php echo $result->age; ?></td>
  </tr>
  <tr>
    <td class="reft">時間</td>
    <td><?php echo $result->time; ?></td>
  </tr>
    <tr>
    <td class="reft">内容</td>
    <td><?php echo $result->content; ?></td>
  </tr>
    <tr>
    <td class="reft">備考</td>
    <td><?php echo $result->remarks; ?></td>
  </tr>
  <?php endforeach; ?>
</table>

<a href="#" class="square_btn fav">お気に入り</a>
<a href="#" class="square_btn ask">依頼する</a>

<p>
<br>
<a href="#" class="btn-back">戻る</a>
</p>