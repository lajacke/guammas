<?php

/**
 * Usuario form.
 *
 * @package    guammas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioForm extends BaseUsuarioForm {

    public function configure() {
        unset(
            $this["nombre"], 
            $this["apellido"], 
            $this["actividad"], 
            $this["ultimo_inicio_sesion"],
            $this["activo"], 
            $this["created_at"], 
            $this["updated_at"]
        );
    }

}
