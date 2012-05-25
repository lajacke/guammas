<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AnuncioOferta', 'doctrine');

/**
 * BaseAnuncioOferta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $comentario
 * @property timestamp $fecha_inicio
 * @property timestamp $fecha_fin
 * @property integer $anuncio_id
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer       getId()           Returns the current record's "id" value
 * @method integer       getComentario()   Returns the current record's "comentario" value
 * @method timestamp     getFechaInicio()  Returns the current record's "fecha_inicio" value
 * @method timestamp     getFechaFin()     Returns the current record's "fecha_fin" value
 * @method integer       getAnuncioId()    Returns the current record's "anuncio_id" value
 * @method timestamp     getCreatedAt()    Returns the current record's "created_at" value
 * @method timestamp     getUpdatedAt()    Returns the current record's "updated_at" value
 * @method AnuncioOferta setId()           Sets the current record's "id" value
 * @method AnuncioOferta setComentario()   Sets the current record's "comentario" value
 * @method AnuncioOferta setFechaInicio()  Sets the current record's "fecha_inicio" value
 * @method AnuncioOferta setFechaFin()     Sets the current record's "fecha_fin" value
 * @method AnuncioOferta setAnuncioId()    Sets the current record's "anuncio_id" value
 * @method AnuncioOferta setCreatedAt()    Sets the current record's "created_at" value
 * @method AnuncioOferta setUpdatedAt()    Sets the current record's "updated_at" value
 * 
 * @package    guammas
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAnuncioOferta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('anuncio_oferta');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('comentario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_inicio', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fecha_fin', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('anuncio_id', 'integer', 4, array(
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