<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MpForma2100 Entity
 *
 * @property int $forma
 * @property int $ano
 * @property string|null $nombre_alcalde
 * @property string|null $director_general
 * @property string|null $personal_directivo
 * @property string|null $nombres_directivo
 * @property string|null $correo_directivo
 * @property string|null $telefono_directivo
 * @property string|null $correo_director_general
 * @property string|null $correo_consejal
 * @property string|null $telefono_director_general
 * @property string|null $contralor_municipal
 * @property string|null $domicilio_contralor
 * @property string|null $telefono_contralor
 * @property string|null $pagina_web_contralor
 * @property string|null $fax_contralor
 * @property string|null $presidente_concejo_municipal
 * @property string|null $secretario_concejo_municipal
 * @property string|null $domicilio_concejo_municipal
 * @property string|null $telefono_concejo_municipal
 * @property string|null $pagina_web_concejo_municipal
 * @property string|null $fax_concejo_municipal
 * @property string|null $concejo_local
 */
class MpForma2100 extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'ano' => true,
        'nombre_alcalde' => true,
        'director_general' => true,
        'personal_directivo' => true,
        'nombres_directivo' => true,
        'correo_directivo' => true,
        'telefono_directivo' => true,
        'correo_director_general' => true,
        'correo_consejal' => true,
        'telefono_director_general' => true,
        'contralor_municipal' => true,
        'domicilio_contralor' => true,
        'telefono_contralor' => true,
        'pagina_web_contralor' => true,
        'fax_contralor' => true,
        'presidente_concejo_municipal' => true,
        'secretario_concejo_municipal' => true,
        'domicilio_concejo_municipal' => true,
        'telefono_concejo_municipal' => true,
        'pagina_web_concejo_municipal' => true,
        'fax_concejo_municipal' => true,
        'concejo_local' => true
    ];
}
