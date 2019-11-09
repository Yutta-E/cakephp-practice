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
<h2><?=$authuser['username'] ?> のホーム</h2>
<h3>評価ページ</h3>
<table cellpadding="0" cellspacing="0">
<thead>
    <tr>
		<th scope="col"><?= $this->Paginator->sort('id') ?></th>
		<th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
		<th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('point') ?></th>
    </tr>
    
</thead>
<tbody>
    <?php foreach ($bidinfo as $info): ?>
        <tr>
            <td><?= h($info->id) ?></td>
            <td><?= h($info->biditem->user->username) ?></td>
            <td><?= h($info->created) ?></td>
            <td><?= h($info->bideval->stars) ?></td>
        </tr>
    <?php endforeach; ?>
    
    <p>ポイント</p>
    <?= $this->Form->create($bideval)?>
    <?= $this->Form->select('stars',
    ['one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5])?>
    <p>コメント</p>
    <?= $this->Form->textarea('comment',['row'=>1]);?>
    <?= $this->Form->button('Submit')?>
    <?= $this->Form->end()?>
    <p>出品者情報</p>
</tbody>
</table>

<div class="paginator">
	<ul class="pagination">
		<?= $this->Paginator->first('<< ' . __('first')) ?>
		<?= $this->Paginator->prev('< ' . __('previous')) ?>
		<?= $this->Paginator->numbers() ?>
		<?= $this->Paginator->next(__('next') . ' >') ?>
		<?= $this->Paginator->last(__('last') . ' >>') ?>
	</ul>
</div>
<h6><?= $this->Html->link(__('出品情報に移動 >>'), ['action' => 'home2']) ?></h6>



</body>
</html>