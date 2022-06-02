<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TweetsFixture
 */
class TweetsFixture extends TestFixture
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
                'body' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-06-02 04:43:50',
                'modified' => '2022-06-02 04:43:50',
            ],
        ];
        parent::init();
    }
}
