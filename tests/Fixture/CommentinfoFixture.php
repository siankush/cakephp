<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentinfoFixture
 */
class CommentinfoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'commentinfo';
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
