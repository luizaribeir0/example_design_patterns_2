<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>

<div class="emprestimos form content">
    <h1>Editar Empréstimo</h1>

    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Atualize os dados do empréstimo') ?></legend>

        <?php
        echo $this->Form->control('livro_titulo', [
            'label' => 'Título do Livro',
            'required' => true
        ]);
        echo $this->Form->control('usuario_email', [
            'label' => 'E-mail do Usuário',
            'required' => true
        ]);
        echo $this->Form->control('data_emprestimo', [
            'label' => 'Data do Empréstimo',
            'type' => 'date',
            'required' => true
        ]);
        echo $this->Form->control('data_prevista', [
            'label' => 'Data Prevista de Devolução',
            'type' => 'date',
            'required' => true
        ]);
        echo $this->Form->control('status', [
            'label' => 'Status',
            'type' => 'select',
            'options' => ['aberto' => 'Aberto', 'fechado' => 'Fechado'],
            'required' => true
        ]);
        ?>
    </fieldset>

    <?= $this->Form->button(__('Salvar Alterações')) ?>
    <?= $this->Form->end() ?>

    <div class="actions">
        <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'button']) ?>
    </div>
</div>
