<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TweetImagesFixture
 */
class TweetImagesFixture extends TestFixture
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
                'tweet_id' => 1,
                'path' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
