<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TweetImagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TweetImagesTable Test Case
 */
class TweetImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TweetImagesTable
     */
    protected $TweetImages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TweetImages',
        'app.Tweets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TweetImages') ? [] : ['className' => TweetImagesTable::class];
        $this->TweetImages = $this->getTableLocator()->get('TweetImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TweetImages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TweetImagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TweetImagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
