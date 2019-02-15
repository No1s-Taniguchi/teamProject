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

<a href="#" class="square_btn accept">承諾</a>
<a href="#" class="square_btn withdraw">辞退</a>

<p>
<br>
<a href="#" class="btn-back">戻る</a>
</p>