<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidevaluation $bidevaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bidevaluations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bidevaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($bidevaluation) ?>
    <fieldset>
        <legend><?= __('Add Bidevaluation') ?></legend>
        <?php
            echo $this->Form->control('bidinfo_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('stars');
            echo $this->Form->control('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
