<!DOCTYPE html>
<html lang="ja">
<head>
    
    <title><?=$title ?></title>
    <style>
    h1{font-size:48pt;
            margin: 0px 0px 10px 0px; padding: 0px 20px; color:white;
            background: linear-gradient(to right, #aaa,#fff);}
            p{font-size:14pt; color:#666;}
    }
    </style>
</head>
<body>
<?php if (!empty($bidinfo)): ?>
<h2>商品「<?=$bidinfo->biditem->name ?> 」</h2>
<h3>※メッセージ情報</h3>
<h6>※メッセージを送信する</h6>
<?= $this->Form->create($bidmsg) ?>
<?= $this->Form->hidden('bidinfo_id', ['value' => $bidinfo->id]) ?>
<?= $this->Form->hidden('user_id', ['value' => $authuser['id']]) ?>
<?= $this->Form->textarea('message', ['rows'=>2]); ?>
<?= $this->Form->button('Submit') ?>
<?= $this->Form->end() ?>
<table cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th scope="col">送信者</th>
		<th class="main" scope="col">メッセージ</th>
		<th scope="col">送信時間</th>
	</tr>
</thead>
<tbody>
<?php if (!empty($bidmsgs)): ?>
	<?php foreach ($bidmsgs as $msg): ?>
	<tr>
		<td><?= h($msg->user->username) ?></td>
		<td><?= h($msg->message) ?></td>
		<td><?= h($msg->created) ?></td>
	</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr><td colspan="3">※メッセージがありません。</td></tr>
<?php endif; ?>
</tbody>
</table>
<?php else: ?>
<h2>※落札情報はありません。</h2>
<?php endif; ?>


</body>
</html>