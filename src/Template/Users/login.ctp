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
    <div class="users form">
        <?= $this->Flash->render('auth')?>
        <?= $this->Form->create()?>
        <fieldset>
            <legend>アカウント名とパスワードを入力して下さい。</legend>
            <?= $this->Form->input('username')?>
            <?= $this->Form->input('password')?>
            
        </fieldset>

        <?= $this->Form->button(__('Login'));?>
        <?= $this->Form->end()?>

    </div>
</body>
</html>