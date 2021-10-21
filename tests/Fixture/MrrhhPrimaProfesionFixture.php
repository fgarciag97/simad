<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MrrhhPrimaProfesionFixture
 */
class MrrhhPrimaProfesionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mrrhh_prima_profesion';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'porcentaje' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'grado' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'mrrhh_prima_profesion_grado_fkey' => ['type' => 'foreign', 'columns' => ['grado'], 'references' => ['grado', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'porcentaje' => 1.5,
                'grado' => 1
            ],
        ];
        parent::init();
    }
}
