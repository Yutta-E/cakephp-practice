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
    <p>This is People table records.</p>
    <?=$this->Form->create(null,
    ['type'=>'post',
    'url'=>['cotroller'=>'Messages',
    'action'=>'index']])?>
   <fieldset class="form">
person id 
<?=$this->Form->error('Messages.person_id');?>
<?=$this->Form->text('Messages.person_id')?>

Message
<?=$this->Form->error('Messages.message')?>
<?=$this->Form->text('Messages.message')?>
<?=$this->Form->submit('投稿')?>

</fieldset>
<?=$this->Form->end()?>

<hr>
<table>
    <thead><tr>
        <th>ID</th><th>Message</th><th>name</th><th>created at</th>
    </tr></thead>
    <?php foreach($data->toArray() as $obj):?>
    <tr>
        <td><?=h($obj->id)?></td>
        <td><?=h($obj->message)?></td>
        <td><?=h($obj->name)?></td>
        <td><?=h($obj->created_at)?></td>
    </tr>
<?php endforeach;?>
</table>

</body>
</html>