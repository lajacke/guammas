<?php

/**
 * usuario actions.
 *
 * @package    guammas
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions {

    public function executeNew(sfWebRequest $request) {
        if ($request->isXmlHttpRequest()) {
            $this->form = new UsuarioForm();
        }else{
            return $this->forward404();
        }
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new UsuarioForm();
        if(!$this->processForm($request, $this->form)){
            $this->redirect("bienvenido/index");
        }
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $usuario = $form->save();
            return true;
        }else{
            return false;
        }
    }
}
