<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactinfosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactinfosTable Test Case
 */
class ContactinfosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactinfosTable
     */
    protected $Contactinfos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Contactinfos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contactinfos') ? [] : ['className' => ContactinfosTable::class];
        $this->Contactinfos = $this->getTableLocator()->get('Contactinfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Contactinfos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContactinfosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
