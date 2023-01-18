<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactinfosFixture
 */
class ContactinfosFixture extends TestFixture
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
                'tableinfo_id' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'created_date' => '',
            ],
        ];
        parent::init();
    }
}
