<?php
declare(strict_types=1);

namespace App\Model\Entity;

// use Cake\Auth\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $password
 * @property string|null $gender
 * @property \Cake\I18n\FrozenTime $created_date
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property string|null $token
 */
class User extends Entity
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
        'last_name' => true,
        'email' => true,
        'phone_number' => true,
        'password' => true,
        'created_date' => true,
        'modified_date' => true,
        'token' => true,
        'file' => true,
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


    // protected function _setPassword($password)
    // {
    //     if (strlen($password) > 0) {
    //         return (new DefaultPasswordHasher)->hash($password);
    //     }
    // }

}
