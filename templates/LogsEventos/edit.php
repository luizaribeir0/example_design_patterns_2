<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LogsEvento $logsEvento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logsEvento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logsEvento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Logs Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logsEventos form content">
            <?= $this->Form->create($logsEvento) ?>
            <fieldset>
                <legend><?= __('Edit Logs Evento') ?></legend>
                <?php
                    echo $this->Form->control('evento');
                    echo $this->Form->control('descricao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
