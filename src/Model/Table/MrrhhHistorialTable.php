<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhHistorial Model
 *
 * @method \App\Model\Entity\MrrhhHistorial get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhHistorial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhHistorial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistorial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistorial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhHistorial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistorial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhHistorial findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhHistorialTable extends Table
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

        $this->setTable('mrrhh_historial');
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
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('tipo_nomina')
            ->requirePresence('tipo_nomina', 'create')
            ->notEmptyString('tipo_nomina');

        $validator
            ->scalar('tipo_personal')
            ->requirePresence('tipo_personal', 'create')
            ->notEmptyString('tipo_personal');

        $validator
            ->scalar('cargo')
            ->requirePresence('cargo', 'create')
            ->notEmptyString('cargo');

        $validator
            ->scalar('banco')
            ->requirePresence('banco', 'create')
            ->notEmptyString('banco');

        $validator
            ->scalar('numero_cuenta')
            ->requirePresence('numero_cuenta', 'create')
            ->notEmptyString('numero_cuenta');

        return $validator;
    }
}
