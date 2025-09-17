<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>

<div class="emprestimos view content">
    <h1>Detalhes do Empréstimo</h1>

    <table>
        <tr>
            <th>ID</th>
            <td><?= h($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th>Título do Livro</th>
            <td><?= h($emprestimo->livro_titulo) ?></td>
        </tr>
        <tr>
            <th>E-mail do Usuário</th>
            <td><?= h($emprestimo->usuario_email) ?></td>
        </tr>
        <tr>
            <th>Data do Empréstimo</th>
            <td><?= h($emprestimo->data_emprestimo) ?></td>
        </tr>
        <tr>
            <th>Data Prevista</th>
            <td><?= h($emprestimo->data_prevista) ?></td>
        </tr>
        <tr>
            <th>Valor da Multa</th>
            <td><?= '$' . number_format($emprestimo->valor_multa, 2, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($emprestimo->status) ?></td>
        </tr>
    </table>

    <div class="actions">
        <?= $this->Html->link('Editar', ['action' => 'edit', $emprestimo->id], ['class' => 'button']) ?>
        <?= $this->Form->postLink(
            'Deletar',
            ['action' => 'delete', $emprestimo->id],
            ['confirm' => 'Tem certeza que deseja deletar este empréstimo?', 'class' => 'button']
        ) ?>
        <?= $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'button']) ?>
    </div>
</div>
