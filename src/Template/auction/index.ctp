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
<h2>ミニオークション!</h2>
<h3>※出品されている商品</h3>
<table cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
		<th scope="col"><?= $this->Paginator->sort('finished') ?></th>
		<th scope="col"><?= $this->Paginator->sort('endtime') ?></th>
		<th scope="col" class="actions"><?= __('Actions') ?></th>
	</tr>
</thead>
<tbody>
	<?php foreach ($auction as $biditem): ?>
	<tr>
		<td><?= h($biditem->name) ?></td>
		<td><?= h($biditem->finished ? 'Finished':'') ?></td>
		<td><?= h($biditem->endtime) ?></td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $biditem->id]) ?>
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

</body>
</html>