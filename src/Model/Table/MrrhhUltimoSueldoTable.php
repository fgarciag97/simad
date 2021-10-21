<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhUltimoSueldo Model
 *
 * @method \App\Model\Entity\MrrhhUltimoSueldo get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhUltimoSueldo findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhUltimoSueldoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mrrhh_ultimo_sueldo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('cedula')
            ->allowEmptyString('cedula');

        $validator
            ->integer('id_tipo_personal')
            ->allowEmptyString('id_tipo_personal');

        $validator
            ->integer('mes')
            ->allowEmptyString('mes');

        $validator
            ->integer('quincena')
            ->allowEmptyString('quincena');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
}
