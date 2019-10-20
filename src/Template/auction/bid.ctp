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
<h2>「<?=$biditem->name ?>」の情報</h2>
<?= $this->Form->create($bidrequest)?>
<fieldset>
    <legend><?= __('*入札を行う')?></legend>
    <?php
    echo $this->Form->hidden('biditem_id', ['value' => $bidrequest->biditems_id]);
    echo $this->Form->hidden('user_id', ['value' => $bidrequest->user_id]);
    echo $this->Form->control('price');
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</body>
</html>