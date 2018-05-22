<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Page Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $url
 * @property string $body
 * @property \Cake\I18n\FrozenTime $datacadastro
 * @property \Cake\I18n\FrozenTime $datamodificacao
 */
class Page extends Entity
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
        'titulo' => true,
        'url' => true,
        'body' => true,
        'datacadastro' => true,
        'datamodificacao' => true
    ];

    protected function _setUrl($url)
    {
        $url =  Text::slug($url);
        if(empty($url)){
            $url = Text::slug($this->_properties['title']);
        }
        return $url;
    }

    protected function _getTitulo($titulo)
    {
        $titulo =  strtolower($titulo);
        return ucwords($titulo);
    }

    protected function _getTituloUrl()
    {
        return $this->_properties['title'] .' - ' . $this->_properties['url'];
    }


}
