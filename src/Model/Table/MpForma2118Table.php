<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MpForma2118 Model
 *
 * @method \App\Model\Entity\MpForma2118 get($primaryKey, $options = [])
 * @method \App\Model\Entity\MpForma2118 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MpForma2118[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2118|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2118 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MpForma2118 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2118[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MpForma2118 findOrCreate($search, callable $callback = null, $options = [])
 */
class MpForma2118Table extends Table
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

        $this->setTable('mp_forma2118');
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
            ->scalar('unidad_ejecutora')
            ->allowEmptyString('unidad_ejecutora');

        $validator
            ->scalar('codigo_obra')
            ->allowEmptyString('codigo_obra');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->date('fecha_inicio')
            ->allowEmptyDate('fecha_inicio');

        $validator
            ->date('fecha_conclusion')
            ->allowEmptyDate('fecha_conclusion');

        $validator
            ->scalar('c_anteriores')
            ->allowEmptyString('c_anteriores');

        $validator
            ->scalar('c_vigentes')
            ->allowEmptyString('c_vigentes');

        $validator
            ->decimal('total_comprometidas')
            ->allowEmptyString('total_comprometidas');

        $validator
            ->scalar('e_anteriores')
            ->allowEmptyString('e_anteriores');

        $validator
            ->scalar('e_vigentes')
            ->allowEmptyString('e_vigentes');

        $validator
            ->decimal('total_ejecutadas')
            ->allowEmptyString('total_ejecutadas');

        $validator
            ->scalar('estimadas_anteriores')
            ->allowEmptyString('estimadas_anteriores');

        $validator
            ->scalar('estimadas_vigentes')
            ->allowEmptyString('estimadas_vigentes');

        return $validator;
    }
}
