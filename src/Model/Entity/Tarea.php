<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarea Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property string $titulo
 * @property string $descripcion
 * @property string $estado
 * @property \Cake\I18n\DateTime $created
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Tarea extends Entity
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
        'usuario_id' => true,
        'titulo' => true,
        'descripcion' => true,
        'estado' => true,
        'created' => true,
        'usuario' => true,
    ];
}
