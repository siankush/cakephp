<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $users_id
 * @property string $post
 * @property \Cake\I18n\FrozenTime $created_date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Comment[] $comment
 */
class Post extends Entity
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
        'users_id' => true,
        'post' => true,
        'created_date' => true,
        'user' => true,
        'comment' => true,
    ];
}
