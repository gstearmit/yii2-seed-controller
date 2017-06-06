<?php
/**
 * @author Donii Sergii <doniysa@gmail.com>
 */

namespace sonrac\seeds\tests\testTable;

use sonrac\seeds\Seed;

/**
 * Class SeedFirst
 *
 * @package sonrac\seeds\tests\testTable
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class SeedError extends Seed
{
    public $tableName = 'test';

    /**
     * @inheritDoc
     */
    public function run(): bool
    {
        return $this->handle();
    }

    public function getData(): array
    {
        return [
            [
                'id'   => 1,
                'name' => 'Check',
            ],
            [
                'id'   => 2,
                'name' => 'Fly',
            ],
        ];
    }
}