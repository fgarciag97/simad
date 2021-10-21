<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrrhhCargosObrerosNoPermanentes Model
 *
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrrhhCargosObrerosNoPermanente findOrCreate($search, callable $callback = null, $options = [])
 */
class MrrhhCargosObrerosNoPermanentesTable extends Table
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

        $this->setTable('mrrhh_cargos_obreros_no_permanentes');
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
