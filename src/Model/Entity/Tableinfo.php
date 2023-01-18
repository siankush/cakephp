<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tableinfo Entity
 *
 * @property int $Id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $gender
 * @property string $password
 * @property string $image
 * @property string|null $token
 *
 * @property \App\Model\Entity\Contactinfo $contactinfo
 */
class Tableinfo extends Entity
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
        'name' => true,
        'email' => true,
        'phone' => true,
        'gender' => true,
        'password' => true,
        'image' => true,
        'token' => true,
        'commentinfo' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
        'token',
    ];
}
