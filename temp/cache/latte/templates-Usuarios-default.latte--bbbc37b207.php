<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Usuarios/default.latte

use Latte\Runtime as LR;

class Templatebbbc37b207 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['usuario'])) trigger_error('Variable $usuario overwritten in foreach on line 71');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    
    <div class = "container">

        <br>
    
        <div class = "row">
    
<?php
		$this->renderBlock('title', get_defined_vars());
?>
    
        </div>

        <br>
    
        <div class = "row">
    
            <div class = "col col-lg-6">

<?php
		if (isset($empresa)) {
?>

                    <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:add", [$empresa->id])) ?>"> Añadir Usuario </a>

<?php
		}
		else {
?>

                        <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:add")) ?>"> Añadir Usuario </a>

<?php
		}
?>
    
            </div>
    
        </div>

        <br>
    
        <div class = "row">
    
            <div class = "col col-lg-12">
    
                <table class = "table">
    
                    <thead class = "thead-dark">

                        <tr>

<?php
		if ($rol == 'admin') {
?>

                                <th> Empresa </th>

<?php
		}
?>

                            <th> Nombre </th>

                            <th> Apellidos </th>

                            <th> Correo </th>

                            <th> Rol </th>
                        
                            <th> Telefono </th>

                            <th> Extension </th>

                            <th> Opciones </th>
                       
                        </tr>
                    
                    </thead>
                    
                    <tbody>

<?php
		$iterations = 0;
		foreach ($usuarios as $usuario) {
			if ($usuario->id !== 666) {
?>
                            <tr>

<?php
				if ($rol == 'admin') {
?>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->empresa->nombre) /* line 77 */ ?> </td>

<?php
				}
?>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->nombre) /* line 81 */ ?> </td>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->apellidos) /* line 83 */ ?></td>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->correo) /* line 85 */ ?> </td>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->rol) /* line 87 */ ?> </td>

                                    <td> <?php echo LR\Filters::escapeHtmlText($usuario->telefono) /* line 89 */ ?> </td>

                                    <td><?php echo LR\Filters::escapeHtmlText($usuario->extensiontelefono) /* line 91 */ ?></td>

<?php
				if ($rol == 'admin') {
?>

                                    <td>
                            
                                        <a class = "btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:editar", [$usuario->id])) ?>"> Editar </a>
                            
                                        <a class = "btn btn-xs btn-danger del" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:borrarUsuario", [$usuario->id])) ?>"> Borrar </a>
                            
                                    </td>

<?php
				}
?>

                            </tr>
<?php
			}
			$iterations++;
		}
?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>            <h1> Usuarios </h1>
<?php
	}

}
