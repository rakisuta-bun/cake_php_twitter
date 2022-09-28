<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FavoritesFixture
 */
class FavoritesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'tweet_id' => 1,
                'created' => '2022-09-28 04:16:31',
                'modified' => '2022-09-28 04:16:31',
            ],
        ];
        parent::init();
    }
}
