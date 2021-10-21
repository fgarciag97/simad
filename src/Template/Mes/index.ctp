<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Me[]|\Cake\Collection\CollectionInterface $mes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Me'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mes index large-9 medium-8 columns content">
    <h3><?= __('Mes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('denominacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mes as $me): ?>
            <tr>
                <td><?= $this->Number->format($me->id) ?></td>
                <td><?= h($me->denominacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $me->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $me->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $me->id], ['confirm' => __('Are you sure you want to delete # {0}?', $me->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
