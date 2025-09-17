<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo[]|\Cake\Collection\CollectionInterface $emprestimos
 */
?>

<div class="emprestimos index content">
    <h1>Lista de Empréstimos</h1>

    <?= $this->Html->link('Adicionar Empréstimo', ['action' => 'add'], ['class' => 'button float-right']) ?>

    <table>
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('livro_titulo', 'Título do Livro') ?></th>
            <th><?= $this->Paginator->sort('usuario_email', 'E-mail do Usuário') ?></th>
            <th><?= $this->Paginator->sort('data_emprestimo', 'Data do Empréstimo') ?></th>
            <th><?= $this->Paginator->sort('data_prevista', 'Data Prevista') ?></th>
            <th>Valor da Multa</th>
            <th>Status</th>
            <th class="actions">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
                <td><?= h($emprestimo->id) ?></td>
                <td><?= h($emprestimo->livro_titulo) ?></td>
                <td><?= h($emprestimo->usuario_email) ?></td>
                <td><?= h($emprestimo->data_emprestimo) ?></td>
                <td><?= h($emprestimo->data_prevista) ?></td>
                <td><?= 'R$ ' . number_format($emprestimo->valor_multa, 2, ',', '.') ?></td>
                <td><?= h($emprestimo->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Ver', ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(
                        'Deletar',
                        ['action' => 'delete', $emprestimo->id],
                        ['confirm' => 'Tem certeza que deseja deletar este empréstimo?']
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<<') ?>
            <?= $this->Paginator->prev('<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>') ?>
            <?= $this->Paginator->last('>>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} empréstimos')) ?></p>
    </div>
</div>
