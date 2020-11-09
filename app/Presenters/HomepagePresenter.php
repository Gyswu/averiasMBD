<?php
declare( strict_types = 1 );

namespace App\Presenters;

final class HomepagePresenter extends BasePresenter {
    
    public function actionDefault() {}
    
    public function renderDefault() {
         
        //$this->template->date = date("D");
        
        $user = $this->getDbUser();
        
        if ($user->rol == "user"){
        
            $this->flashMessage('Bienvenido'. $user->nombre , 'success');
        
            $this->redirect('Usuarios:default');
        
        } /*elseif ($user->rol == "profesor"){
        
            $this->flashMessage('Bienvenido profesor '. $user->nombre , 'success');
        
            $this->redirect('Clases:default');
        
        }*/
    
    }
    
}
