<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Denuncia', 'doctrine');

/**
 * BaseDenuncia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $observacion
 * @property integer $atendida
 * @property integer $sucursal_anuncio_id
 * @property integer $usuario_id
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()                  Returns the current record's "id" value
 * @method string    getObservacion()         Returns the current record's "observacion" value
 * @method integer   getAtendida()            Returns the current record's "atendida" value
 * @method integer   getSucursalAnuncioId()   Returns the current record's "sucursal_anuncio_id" value
 * @method integer   getUsuarioId()           Returns the current record's "usuario_id" value
 * @method timestamp getCreatedAt()           Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()           Returns the current record's "updated_at" value
 * @method Denuncia  setId()                  Sets the current record's "id" value
 * @method Denuncia  setObservacion()         Sets the current record's "observacion" value
 * @method Denuncia  setAtendida()            Sets the current record's "atendida" value
 * @method Denuncia  setSucursalAnuncioId()   Sets the current record's "sucursal_anuncio_id" value
 * @method Denuncia  setUsuarioId()           Sets the current record's "usuario_id" value
 * @method Denuncia  setCreatedAt()           Sets the current record's "created_at" value
 * @method Denuncia  setUpdatedAt()           Sets the current record's "updated_at" value
 * 
 * @package    guammas
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDenuncia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('denuncia');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('observacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('atendida', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('sucursal_anuncio_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}