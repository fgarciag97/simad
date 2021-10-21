<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Me $me
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $me->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $me->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mes form large-9 medium-8 columns content">
    <?= $this->Form->create($me) ?>
    <fieldset>
        <legend><?= __('Edit Me') ?></legend>
        <?php
            echo $this->Form->control('denominacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
