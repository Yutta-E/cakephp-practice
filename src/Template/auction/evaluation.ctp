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
<h3>評価ページ</h3>

<p>ポイント</p>
    <?= $this->Form->create($bideval)?>
    <?= $this->Form->hidden('bidinfo_id', ['value' => $bidinfo->id]) ?>
    <?= $this->Form->hidden('user_id', ['value' => $authuser['id']]) ?>
    <?= $this->Form->select('stars',
    [1=>1,2=>2,3=>3,4=>4,5=>5])?>
<p>コメント</p>
    <?= $this->Form->textarea('comment',['row'=>1]);?>
    <?= $this->Form->button('Submit')?>
    <?= $this->Form->end()?>


<table cellpadding="0" cellspacing="0">
<thead>
    <tr>
		<th scope="col">商品名</th>
		<th scope="col">ユーザー名</th>
		<th scope="col">送信時間</th>
        <th scope="col">ポイント</th>
        <th class="main" scope="col">コメント</th>
    </tr>
    
</thead>
<tbody>
    <?php if (!empty($bidevals)): ?>
    <?php foreach ($bidevals as $bideval): ?>
    <pre><?php //print_r($bidinfo)?></pre>
        <tr>
            <td><?= h($bidinfo->biditem->name) ?></td>
            <td><?= h($bidinfo->biditem->user->username) ?></td>
            <td><?= h($bidinfo->created) ?></td>
            <td><?= h($bideval->stars) ?></td>
            <td><?= h($bideval->comment) ?></td>
        </tr>
    <?php endforeach; ?>
    <?php else:?>
        <tr><td colspan="3">※メッセージがありません。</td></tr>
    <?php endif;?>
    
    <p>出品者情報</p>
    
    <pre><?php //print_r($bideval)?></pre>
</tbody>
</table>
<?php else: ?>
<h2>※落札情報はありません。</h2>
<?php endif; ?>


</body>
</html>