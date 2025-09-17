<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>

<div class="emprestimos form content">
    <h1>Adicionar Empréstimo</h1>

    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Preencha os dados do empréstimo') ?></legend>

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
        ?>
    </fieldset>

    <?= $this->Form->button(__('Salvar Empréstimo')) ?>
    <?= $this->Form->end() ?>
</div>
