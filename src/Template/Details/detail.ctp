<h3>詳細</h3>
<?php
echo $this->Html->css('details');
?>

<table border="1" class="s1">
  <tr>
    <td class="reft" width="30">名前</td>
    <td width="200"><?php echo $name; ?></td>
  </tr>
  <tr>
    <td class="reft">性別</td>
    <td><?php echo $sex; ?></td>
  </tr>
  <tr>
    <td class="reft">年齢</td>
    <td><?php echo $age; ?></td>
  </tr>
  <tr>
    <td class="reft">時間</td>
    <td><?php echo $time; ?></td>
  </tr>
    <tr>
    <td class="reft">内容</td>
    <td><?php echo $content; ?></td>
  </tr>
    <tr>
    <td class="reft">備考</td>
    <td><?php echo $remarks; ?></td>
  </tr>
</table>

<a href="#" class="square_btn reg">お気に入り</a>
<a href="#" class="square_btn req">依頼する</a>

<p>
<a href="#" class="s1">戻る</a>
</p>