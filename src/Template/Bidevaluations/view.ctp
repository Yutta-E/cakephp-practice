<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidevaluation $bidevaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bidevaluation'), ['action' => 'edit', $bidevaluation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bidevaluation'), ['action' => 'delete', $bidevaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidevaluation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bidevaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bidevaluation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bidevaluations view large-9 medium-8 columns content">
    <h3><?= h($bidevaluation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bidevaluation->has('user') ? $this->Html->link($bidevaluation->user->username, ['controller' => 'Users', 'action' => 'view', $bidevaluation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bidevaluation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bidinfo Id') ?></th>
            <td><?= $this->Number->format($bidevaluation->bidinfo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stars') ?></th>
            <td><?= $this->Number->format($bidevaluation->stars) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bidevaluation->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($bidevaluation->comment)); ?>
    </div>
</div>
