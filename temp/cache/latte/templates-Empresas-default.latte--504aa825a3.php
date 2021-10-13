<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Empresas/default.latte

use Latte\Runtime as LR;

class Template504aa825a3 extends Latte\Runtime\Template
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
			if (isset($this->params['empresa'])) trigger_error('Variable $empresa overwritten in foreach on line 50');
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
        <div class="col-12 col-lg-6">
<?php
		$this->renderBlock('title', get_defined_vars());
?>
        </div>

        <div class = "col-12 col-lg-6">

            <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:add")) ?>"> Añadir Cliente </a>

    </div>
    </div>
    <br>

    <div class = "row">

        <div class = "col-12 col-lg-12">

            <table class="table">

                <thead class="thead-dark">

                    <tr>

                        <th class="id"> ID </th>

                        <th class="nif"> Nif </th>

                        <th> Nombre </th>

                        <th> Telefono </th>

                        <th> Direccion </th>

                        <th> Contacto </th>

                        <th> Opciones </th>

                    </tr>

                </thead>

                <tbody>

<?php
		$iterations = 0;
		foreach ($empresas as $empresa) {
?>

                        <tr>

                            <td class="id"> <?php echo LR\Filters::escapeHtmlText($empresa->id) /* line 54 */ ?> </td>

                            <td class="nif"> <?php echo LR\Filters::escapeHtmlText($empresa->nif) /* line 56 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 58 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 60 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 62 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 64 */ ?> </td>

                            <td>

                                <a class = "btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) ?>"> Usuarios </a>
<?php
			if ($rol == 'admin') {
				?>                                <a class="btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) ?>"> Editar </a>
<?php
			}
			elseif ($rol == 'encargado') {
				?>                                <a class="btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) ?>"> Editar </a>
<?php
			}
			if ($rol == 'admin') {
				?>                                <a class="btn btn-xs btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) ?>"> Borrar </a>
<?php
			}
?>
                            </td>

                        </tr>

<?php
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
?>            <h1> Clientes </h1>
<?php
	}

}
