<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commentinfo Entity
 *
 * @property int $id
 * @property int $tableinfo_id
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created_date
 */
class Commentinfo extends Entity
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
    protected $_accessible = [
        'tableinfo_id' => true,
        'address' => true,
        'created_date' => true,
    ];
}
