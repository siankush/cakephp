<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustmrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustmrTable Test Case
 */
class CustmrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustmrTable
     */
    protected $Custmr;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Custmr',
        'app.Profile',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Custmr') ? [] : ['className' => CustmrTable::class];
        $this->Custmr = $this->getTableLocator()->get('Custmr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Custmr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustmrTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
