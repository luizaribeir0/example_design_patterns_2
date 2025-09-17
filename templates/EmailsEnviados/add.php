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
            <?= $this->Html->link(__('List Emails Enviados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="emailsEnviados form content">
            <?= $this->Form->create($emailsEnviado) ?>
            <fieldset>
                <legend><?= __('Add Emails Enviado') ?></legend>
                <?php
                    echo $this->Form->control('destinatario');
                    echo $this->Form->control('assunto');
                    echo $this->Form->control('mensagem');
                    echo $this->Form->control('provider');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
