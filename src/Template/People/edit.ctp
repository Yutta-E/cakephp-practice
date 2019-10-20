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
    <?=$this->Form->create($entity,
    ['type' =>'post',
    'url'=>['controller'=>'People',
    'action'=>'update']])?>
    <?=$this->Form->hidden('People.id')?>
    <div>name</div>
    <div><?=$this->Form->text('People.name')?></div>
    <div>mail</div>
    <div><?=$this->Form->text('People.mail')?></div>
    <div>age</div>
    <div><?=$this->Form->text('People.age')?></div>
    <div><?=$this->Form->submit('送信')?></div>    
    <?=$this->Form->end()?>
</body>
</html>