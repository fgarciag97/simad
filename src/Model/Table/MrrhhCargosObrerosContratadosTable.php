<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCargosObrerosContratados Model
 *
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosContratado findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCargosObrerosContratadosTable extends Table
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

        $this->setTable('mrrhh_cargos_obreros_contratados');
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

        return $validator;
    }
}
