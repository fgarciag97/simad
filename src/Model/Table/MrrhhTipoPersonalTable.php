<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhTipoPersonal Model
 *
 * @method \App\Model\Entity\MrrhhTipoPersonal get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhTipoPersonal findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhTipoPersonalTable extends Table
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

        $this->setTable('mrrhh_tipo_personal');
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
            ->scalar('denominacion')
            ->requirePresence('denominacion', 'create')
            ->notEmptyString('denominacion');

        $validator
            ->integer('tipo_nomina')
            ->allowEmptyString('tipo_nomina');

        return $validator;
    }
}
