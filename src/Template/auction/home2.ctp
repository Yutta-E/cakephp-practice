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
<h3>※出品情報</h3>
<table cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th scope="col"><?= $this->Paginator->sort('id') ?></th>
		<th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
		<th scope="col"><?= $this->Paginator->sort('created') ?></th>
		<th scope="col" class="actions"><?= __('Actions') ?></th>
	</tr>
</thead>
<tbody>
	<?php foreach ($biditems as $biditem): ?>
	<tr>
		<td><?= h($biditem->id) ?></td>
		<td><?= h($biditem->name) ?></td>
		<td><?= h($biditem->created) ?></td>
		<td class="actions">
			<?php if (!empty($biditem->bidinfo)): ?>
			<?= $this->Html->link(__('View'), ['action' => 'msg', $biditem->bidinfo->id]) ?>
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
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
<h6><?= $this->Html->link(__('<< 落札情報に戻る'), ['action' => 'home']) ?></h6>


</body>
</html>