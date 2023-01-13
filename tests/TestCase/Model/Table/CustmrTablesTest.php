<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustmrTables;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustmrTables Test Case
 */
class CustmrTablesTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustmrTables
     */
    protected $CustmrTables;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Custmrs') ? [] : ['className' => CustmrTables::class];
        $this->CustmrTables = $this->getTableLocator()->get('Custmrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CustmrTables);

        parent::tearDown();
    }
}
