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
<h2>商品を出品する</h2>
<?= $this->Form->create($biditem) ?>
<fieldset>
	<legend>※商品名と終了日時を入力：</legend>
	<?php
		echo $this->Form->hidden('user_id', ['value' => $authuser['id']]);
		echo '<p><strong>USER: ' . $authuser['username'] . '</strong></p>';
		echo $this->Form->control('name');
		echo $this->Form->hidden('finished', ['value' => 0]);
		echo $this->Form->control('endtime');
	?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</body>
</html>