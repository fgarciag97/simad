<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewPresupuestoForma2121Disponible Model
 *
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewPresupuestoForma2121Disponible findOrCreate($search, callable $callback = null, $options = [])
 */
class ViewPresupuestoForma2121DisponibleTable extends Table
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

        $this->setTable('view_presupuesto_forma2121_disponible');
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
            ->integer('id_partida')
            ->allowEmptyString('id_partida');

        $validator
            ->decimal('disponible')
            ->allowEmptyString('disponible');

        $validator
            ->scalar('partida')
            ->maxLength('partida', 20)
            ->allowEmptyString('partida');

        $validator
            ->scalar('denominacion')
            ->allowEmptyString('denominacion');

        return $validator;
    }
}
