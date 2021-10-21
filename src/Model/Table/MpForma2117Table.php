<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2117 Model
 *
 * @method \App\Model\Entity\MpForma2117 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2117 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2117[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2117|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2117 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2117 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2117[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2117 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2117Table extends Table
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

        $this->setTable('mp_forma2117');
        $this->setDisplayField('forma');
        $this->setPrimaryKey('forma');
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
            ->integer('forma')
            ->allowEmptyString('forma', null, 'create');

        $validator
            ->scalar('partida')
            ->allowEmptyString('partida');

        $validator
            ->scalar('programa_social')
            ->allowEmptyString('programa_social');

        $validator
            ->decimal('recursos_propios')
            ->allowEmptyString('recursos_propios');

        $validator
            ->decimal('otros_organismos')
            ->allowEmptyString('otros_organismos');

        $validator
            ->decimal('asignacion_anual')
            ->allowEmptyString('asignacion_anual');

        return $validator;
    }
}
