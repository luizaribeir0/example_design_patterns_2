<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property string $livro_titulo
 * @property string $usuario_email
 * @property \Cake\I18n\Date $data_emprestimo
 * @property \Cake\I18n\Date $data_prevista
 * @property \Cake\I18n\Date|null $data_devolucao
 * @property string|null $valor_multa
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Emprestimo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'livro_titulo' => true,
        'usuario_email' => true,
        'data_emprestimo' => true,
        'data_prevista' => true,
        'data_devolucao' => true,
        'valor_multa' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
