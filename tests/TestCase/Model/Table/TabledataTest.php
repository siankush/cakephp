<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Tabledata;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Tabledata Test Case
 */
class TabledataTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Tabledata
     */
    protected $Tabledata;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('data') ? [] : ['className' => Tabledata::class];
        $this->Tabledata = $this->getTableLocator()->get('data', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tabledata);

        parent::tearDown();
    }
}
