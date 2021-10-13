<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Averias/edit.latte

use Latte\Runtime as LR;

class Templatea14c74f13e extends Latte\Runtime\Template
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

            <div class = "col col-lg-6"> <a class = "btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:default")) ?>"> Volver </a> </div>
        
        </div>

        <br>
        
        <div class = "row">
        
            <div class = "col col-lg-6">

<?php
		/* line 27 */ $_tmp = $this->global->uiControl->getComponent("editarAveriaForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
            </div>

            <div class="col col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <td><h2></h2></td>
                    <td><h2>Datos empresa</h2></td>
                    <td><h2>Datos Usuario</h2></td>
                    </thead>
                    <tr>
                        <td>
                            <h3>Nombre:</h3>
                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($averia->usuario->empresa->nombre) /* line 42 */ ?>

                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($averia->usuario->nombre) /* line 45 */ ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Telefono</h3>
                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($averia->usuario->empresa->telefono) /* line 53 */ ?>

                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($averia->usuario->telefono) /* line 56 */ ?> <?php
		echo LR\Filters::escapeHtmlText($averia->usuario->extensiontelefono) /* line 56 */ ?>

                        </td>

                    </tr>

                </table>
            </div>
        </div>

    </div>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
		?>            <h1> Editar Averia <?php echo LR\Filters::escapeHtmlText($averia->id) /* line 9 */ ?></h1>
<?php
	}

}
