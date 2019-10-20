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
    <p><?=$msg ?></p>
    <?=$this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller' =>'People',
    'action'=>'add']])?>
<fieldset class="form">
NAME: <?=$this->Form->error('People.name')?>
<?=$this->Form->text('People.name')?>

MAIL: <?=$this->Form->error('People.mail')?>
<?=$this->Form->text('People.mail')?>
AGE: <?=$this->Form->error('People.age')?>
<?=$this->Form->text('People.age')?>
<?=$this->Form->submit('送信')?>

</fieldset>
<?=$this->Form->end()?>

</body>
</html>