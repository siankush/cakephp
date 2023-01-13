<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Tableinfo;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Tableinfo Test Case
 */
class TableinfoTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Tableinfo
     */
    protected $Tableinfo;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('info') ? [] : ['className' => Tableinfo::class];
        $this->Tableinfo = $this->getTableLocator()->get('info', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tableinfo);

        parent::tearDown();
    }
}
