<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmailsEnviado $emailsEnviado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Emails Enviado'), ['action' => 'edit', $emailsEnviado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Emails Enviado'), ['action' => 'delete', $emailsEnviado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailsEnviado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Emails Enviados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Emails Enviado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="emailsEnviados view content">
            <h3><?= h($emailsEnviado->destinatario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Destinatario') ?></th>
                    <td><?= h($emailsEnviado->destinatario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assunto') ?></th>
                    <td><?= h($emailsEnviado->assunto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Provider') ?></th>
                    <td><?= h($emailsEnviado->provider) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($emailsEnviado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($emailsEnviado->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Mensagem') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($emailsEnviado->mensagem)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>