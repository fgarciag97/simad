<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2121Ajuste Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Ajuste findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2121AjusteTable extends Table
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

        $this->setTable('view_presupuesto_forma2121_ajuste');
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
            ->allowEmptyString('id');

        $validator
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->scalar('partida')
            ->maxLength('partida', 20)
            ->allowEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        $validator
            ->decimal('ajuste')
            ->allowEmptyString('ajuste');

        return $validator;
    }
}
