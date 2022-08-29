<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TweetImage Entity
 *
 * @property int $id
 * @property int $tweet_id
 * @property string $path
 *
 * @property \App\Model\Entity\Tweet $tweet
 */
class TweetImage extends Entity
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
        'tweet_id' => true,
        'path' => true,
        'tweet' => true,
    ];
}
