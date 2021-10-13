<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Averias/default.latte

use Latte\Runtime as LR;

class Template5b88e8b596 extends Latte\Runtime\Template
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
			if (isset($this->params['averia'])) trigger_error('Variable $averia overwritten in foreach on line 59');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

    <div class = "container">

         <div class = "row">
             <div class="col-12 col-lg-6">

                 <div class = "row"> <?php
		$this->renderBlock('title', get_defined_vars());
?>
 </div>
             </div>

            <div class = "col-12 col-lg-6">


                <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:add")) ?>"> Añadir Averia </a>

            </div>

         </div>

         <br>

        <div class = "row">
            <div class="col-12 col-lg-12">

                <table class = "table">

                    <thead class = "thead-dark">

                        <tr>

                            <th class="id"> ID </th>

                            <th> Usuario </th>

                            <th> Empresa </th>

                            <th class="fecha"> Fecha </th>

                            <th class="descripcion"> Descripcion </th>

                            <th class="horas"> In situ </th>

                            <th class="horas"> Horas fuera </th>

                            <th class="horas"> Horas Totales </th>

                            <th class="resolucion"> Resolucion </th>

                            <th> Accion </th>

                            <th> Estado </th>

                        </tr>

                    </thead>

                    <tbody>

<?php
		$iterations = 0;
		foreach ($averias as $averia) {
?>

                            <tr>

                                <td class="id"> <?php echo LR\Filters::escapeHtmlText($averia -> id) /* line 63 */ ?> </td>

                                <td> <?php echo LR\Filters::escapeHtmlText($averia -> usuario -> nombre) /* line 65 */ ?> </td>

                                <td> <?php echo LR\Filters::escapeHtmlText($averia -> usuario -> empresa -> nombre) /* line 67 */ ?> </td>

                                <td class="fecha"> <?php echo LR\Filters::escapeHtmlText($averia -> fechainicio) /* line 69 */ ?> </td>

                                <td class="descripcion"> <?php echo LR\Filters::escapeHtmlText($averia -> descripcion) /* line 71 */ ?> </td>

                                <td class="horas"> <?php echo LR\Filters::escapeHtmlText($averia -> insitu) /* line 73 */ ?> </td>

                                <td class="horas"> <?php echo LR\Filters::escapeHtmlText($averia -> horasfuera) /* line 75 */ ?> </td>

                                <td class="horas"> <?php echo LR\Filters::escapeHtmlText($averia -> horasfuera) /* line 77 */ ?> + <?php
			echo LR\Filters::escapeHtmlText($averia -> insitu) /* line 77 */ ?> </td>

                                <td class="resolucion"> <?php echo LR\Filters::escapeHtmlText($averia -> resolucion) /* line 79 */ ?> </td>

                                <td> <a class = "btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:edit", [$averia->id])) ?>"> Editar </a> </td>

                                <td>

<?php
			$this->global->switch[] = ($averia->estado);
			if (false) {
?>

<?php
			}
			elseif (end($this->global->switch) === (0)) {
?>

                                            <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:proceso", [$averia->id])) ?>"> Entrada </a>

<?php
			}
			elseif (end($this->global->switch) === (1)) {
?>

                                            <a class = "btn btn-xs btn-warning" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:finalizado", [$averia->id])) ?>"> En Proceso </a>

<?php
			}
			elseif (end($this->global->switch) === (2)) {
?>

                                            <a class = "btn btn-xs btn-danger"> Finalizado </a>

<?php
			}
			array_pop($this->global->switch) ?>

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

    </div>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
		?><h1> Averias </h1><?php
	}

}
