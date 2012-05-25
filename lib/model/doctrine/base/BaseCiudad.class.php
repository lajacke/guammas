<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ciudad', 'doctrine');

/**
 * BaseCiudad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $estado_id
 * 
 * @method integer getId()        Returns the current record's "id" value
 * @method string  getNombre()    Returns the current record's "nombre" value
 * @method integer getEstadoId()  Returns the current record's "estado_id" value
 * @method Ciudad  setId()        Sets the current record's "id" value
 * @method Ciudad  setNombre()    Sets the current record's "nombre" value
 * @method Ciudad  setEstadoId()  Sets the current record's "estado_id" value
 * 
 * @package    guammas
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCiudad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ciudad');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}