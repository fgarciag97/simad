<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Me $me
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Me'), ['action' => 'edit', $me->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Me'), ['action' => 'delete', $me->id], ['confirm' => __('Are you sure you want to delete # {0}?', $me->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Me'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mes view large-9 medium-8 columns content">
    <h3><?= h($me->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Denominacion') ?></th>
            <td><?= h($me->denominacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($me->id) ?></td>
        </tr>
    </table>
</div>
