<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentFixture
 */
class CommentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'comment';
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
                'post_id' => 'Lorem ipsum dolor sit amet',
                'comment' => 'Lorem ipsum dolor sit amet',
                'created_date' => '',
            ],
        ];
        parent::init();
    }
}
