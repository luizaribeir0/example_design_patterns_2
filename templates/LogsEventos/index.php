<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LogsEvento> $logsEventos
 */
?>
<div class="logsEventos index content">
    <?= $this->Html->link(__('New Logs Evento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Logs Eventos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('evento') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logsEventos as $logsEvento): ?>
                <tr>
                    <td><?= $this->Number->format($logsEvento->id) ?></td>
                    <td><?= h($logsEvento->evento) ?></td>
                    <td><?= h($logsEvento->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $logsEvento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logsEvento->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $logsEvento->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $logsEvento->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>