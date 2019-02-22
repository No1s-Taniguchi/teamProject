<h3>依頼詳細</h3>
<?php
echo $this->Html->css('details');
?>
<table border="1" class="s1">
  <tr>
  <?php foreach ($results as $result): ?>
    <td class="reft" width="30">依頼主</td>
    <td width="200"><?php echo $result->client; ?></td>
  </tr>
  <tr>
    <td class="reft">内容</td>
    <td><?php echo $result->content; ?></td>
  </tr>
  <tr>
    <td class="reft">時間</td>
    <td><?php echo $result->time; ?></td>
  </tr>
  <tr>
    <td class="reft">報酬</td>
    <td><?php echo $result->compensation; ?></td>
  </tr>
    <tr>
    <td class="reft">備考</td>
    <td><?php echo $result->remarks; ?></td>
  </tr>
  <?php endforeach; ?>
</table>

<a><input type="submit" class="square_btn accept" value="承諾する" onClick="alert('依頼を承諾しました');"></a>
<a><input type="submit" class="square_btn withdraw" value="辞退する" onClick="alert('依頼を辞退しました');"></a>

<p>
<br>
<a href="Posts" class="btn-back">戻る</a>
</p>