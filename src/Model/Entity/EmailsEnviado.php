<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailsEnviado Entity
 *
 * @property int $id
 * @property string $destinatario
 * @property string $assunto
 * @property string $mensagem
 * @property string $provider
 * @property \Cake\I18n\DateTime|null $created
 */
class EmailsEnviado extends Entity
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
        'destinatario' => true,
        'assunto' => true,
        'mensagem' => true,
        'provider' => true,
        'created' => true,
    ];
}
