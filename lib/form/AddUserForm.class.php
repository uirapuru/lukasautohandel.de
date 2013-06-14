<?php

/**
 * Base project form.
 * 
 * @package    CapoeiraApelido
 * @subpackage form
 * @author     Grzegorz Kaszuba 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class AddUserForm
        extends BaseForm
{

    public function configure()
    {
        $this->embedForm('apelido', new ApelidoForm());
        $this->embedForm('user', new UserForm());
        $this->embedForm('city', new CityForm());
        $this->embedForm('group', new GroupForm());

        $this->embeddedForms["apelido"]->disableCSRFProtection();
        $this->embeddedForms["user"]->disableCSRFProtection();
        $this->embeddedForms["city"]->disableCSRFProtection();
        $this->embeddedForms["group"]->disableCSRFProtection();
    }

    public function bind(array $taintedValues = null,array $taintedFiles = null)
    {
        $form_array = $this->getEmbeddedForms();
        $parameters = array_intersect_key($taintedValues, $form_array + array("_csrf_token" => null));

        foreach ($this->getEmbeddedForms() as $name => $form) {
            $form->bind($this->getValue($name));
        }
        
        var_dump($this->embeddedForms['apelido']->getValues());  die;
        
        parent::bind($parameters);
    }

    public function save()
    {
        $ids = array();

        foreach ($this->getEmbeddedForms() as $name => $form) {
            if ($name == 'user') {
                $user_form = $form;
                continue;
            }

            $form->bind($this->getValue($form->getName()));
            $object = $form->getObject();
//            $object->save();
//            $ids[$name . "_id"] = $object->getId();
        }

        var_dump($ids);
        die;
    }

}
