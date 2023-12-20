<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LibrosFixture
 */
class LibrosFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'imagen' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-12-20 18:41:05',
                'modified' => '2023-12-20 18:41:05',
            ],
        ];
        parent::init();
    }
}
