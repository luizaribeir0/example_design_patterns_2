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
            <?= $this->Html->link(__('Edit Logs Evento'), ['action' => 'edit', $logsEvento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Logs Evento'), ['action' => 'delete', $logsEvento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logsEvento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logs Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Logs Evento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logsEventos view content">
            <h3><?= h($logsEvento->evento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Evento') ?></th>
                    <td><?= h($logsEvento->evento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($logsEvento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($logsEvento->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($logsEvento->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>