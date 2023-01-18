<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommentinfoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommentinfoTable Test Case
 */
class CommentinfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommentinfoTable
     */
    protected $Commentinfo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Commentinfo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Commentinfo') ? [] : ['className' => CommentinfoTable::class];
        $this->Commentinfo = $this->getTableLocator()->get('Commentinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Commentinfo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CommentinfoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
