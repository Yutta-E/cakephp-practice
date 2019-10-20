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
    <p>*以下のレコードを削除しますか？</p>
    <div>id: <?=$entity['id']?></div>
    <div>name: <?=$entity['name']?></div>
    <div>age: <?=$entity['age']?></div>

    <hr>
    <?=$this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller' =>'People',
    'action'=>'destroy']])?>
    <?=$this->Form->hidden('People.id')?>
    <div><?=$this->Form->submit('削除する')?></div>
    <?=$this->Form->end()?>
</body>
</html>