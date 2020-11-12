<?php

declare( strict_types = 1 );

namespace App\Forms;

use App\Model\Orm\Usuario;

//use App\Model\Orm\Empresa;

use Nette;

use Nette\Application\UI\Form;

final class UsuariosFormFactory {

    private const PASSWORD_MIN_LENGTH = 7;
    
    use Nette\SmartObject;

    public function createNuevo() {
        $form = $this->create();
        return $form;
    }
    
    public function createEdit(Usuario $usuario) {
        $form = $this->create();
        $form->setDefaults($usuario->toArray(2));
        return $form;
    }


    
    public function create(): Form {
        $form = ( new FormFactory() )->create();

        $form->addHidden('id', 'Id de Usuario');

        $form->addText('nombre', 'Nombre del Usuario')->setRequired();

        $form->addText('apellidos', 'Apellidos')->setRequired();

        $form->addEmail('correo', 'Correo electronico')->setRequired();

        $form->addInteger('telefono', 'Telefono')

            ->addRule($form::MIN_LENGTH, 'Telefono demasiado corto', '9')

            ->addRule($form::MAX_LENGTH, 'Telefono demasiado largo', '9');

        $form->addInteger('extensiontelefono', 'Extensión telefonica');

        $form->addPassword('password', 'Contraseña')

            ->addRule($form::MIN_LENGTH, null, self::PASSWORD_MIN_LENGTH);

        $form->addSelect('rol', 'Rol',[
            'cliente' => 'Cliente',
            'admin' => 'Administrador',
        ]);
        $form->addSubmit('send', 'Guardar')
            ->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}
