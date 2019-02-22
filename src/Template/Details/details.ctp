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
    <?php if($result->sex == 1): ?>
        <td><?php echo '男性'; ?></td>
    <?php else: ?>
        <td><?php echo '女性'; ?></td>
    <?php endif; ?>
  </tr>
  <tr>
    <td class="reft">年齢</td>
    <td><?php echo $result->age; ?></td>
  </tr>
  <tr>
    <td class="reft">時間</td>
    <td><?php echo $result->time->i18nFormat('YYYY/MM/dd HH:mm:ss'); ?></td>
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

<form method="POST" name="add" action="Details">

<?php if(empty($fav) || $fav == 0): ?>
<a><input type="submit" name="fav_on" class="square_btn fav_on" value="お気に入り" onClick="alert('お気に入りに登録しました');"></a>
<?php else: ?>
<a><input type="submit" name="fav_off" class="square_btn fav_off" value="お気に入り" onClick="alert('お気に入りを解除しました');"></a>

<?php endif; ?>

<a><input type="submit" name="ask" class="square_btn ask" value="依頼する" onClick="alert('依頼しました');"></a>
</form>
<p>
<br>
<a href="Posts" class="btn-back">戻る</a>
</p>

