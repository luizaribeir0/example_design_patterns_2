<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EmailsEnviado> $emailsEnviados
 */
?>
<div class="emailsEnviados index content">
    <?= $this->Html->link(__('New Emails Enviado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Emails Enviados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('destinatario') ?></th>
                    <th><?= $this->Paginator->sort('assunto') ?></th>
                    <th><?= $this->Paginator->sort('provider') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emailsEnviados as $emailsEnviado): ?>
                <tr>
                    <td><?= $this->Number->format($emailsEnviado->id) ?></td>
                    <td><?= h($emailsEnviado->destinatario) ?></td>
                    <td><?= h($emailsEnviado->assunto) ?></td>
                    <td><?= h($emailsEnviado->provider) ?></td>
                    <td><?= h($emailsEnviado->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $emailsEnviado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailsEnviado->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $emailsEnviado->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $emailsEnviado->id),
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