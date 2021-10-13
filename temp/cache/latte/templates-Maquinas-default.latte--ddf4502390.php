<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/default.latte

use Latte\Runtime as LR;

class Templateddf4502390 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'mas_scripts' => 'blockMas_scripts',
	];

	public $blockTypes = [
		'content' => 'html',
		'mas_scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		$this->renderBlock('mas_scripts', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['maquina'])) trigger_error('Variable $maquina overwritten in foreach on line 94, 163');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
<?php
		$this->global->switch[] = ($mode);
		if (false) {
		}
		elseif (end($this->global->switch) === (7)) {
?>
                    <h1>Todas las maquinas</h1>
<?php
		}
		elseif (end($this->global->switch) === (8)) {
			?>                    <h1>Maquinas del clinete <?php echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 9 */ ?></h1>
<?php
		}
		elseif (end($this->global->switch) === (9)) {
			?>                    <h1>Maquinas del proveedor <?php echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 11 */ ?></h1>
<?php
		}
		array_pop($this->global->switch) ?>
            </div>
            <div class="col col-lg-6">
                <a class = "btn btn-xs btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:add")) ?>"><i class="bi bi-plus-circle-fill"></i> Añadir</a>


            </div>
            <div class="col col-lg-10">
                <table class="table">
                    <thead class = "thead-dark">
<?php
		$this->global->switch[] = ($mode);
		if (false) {
		}
		elseif (end($this->global->switch) === (7)) {
?>
                            <th class="id">
                                ID
                            </th>
                            <th class="modelo">
                                Modelo
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 1])) ?>"><i class="bi bi-arrow-up-circle-fill"></i></a>
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 2])) ?>"><i class="bi bi-arrow-down-circle-fill"></i></a>
                            </th>
                            <th class="proveedor">
                                Proveedor
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 3])) ?>"><i class="bi bi-arrow-up-circle-fill"></i></a>
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 4])) ?>"><i class="bi bi-arrow-down-circle-fill"></i></a>
                            </th>
                            <th class="cliente">
                                Cliente
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 5])) ?>"><i class="bi bi-arrow-up-circle-fill"></i></a>
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 6])) ?>"><i class="bi bi-arrow-down-circle-fill"></i></a>
                            </th>
                            <th class="estado">
                                Estado
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 7])) ?>"><i class="bi bi-arrow-up-circle-fill"></i></a>
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 8])) ?>"><i class="bi bi-arrow-down-circle-fill"></i></a>
                            </th>
                            <th class="opciones">
                                Opciones
                            </th>
                            </thead>
<?php
		}
		elseif (end($this->global->switch) === (8)) {
?>
                            <th class="id">
                                ID
                            </th>
                            <th class="modelo">
                                Modelo
                            </th>
                            <th class="proveedor">
                                Proveedor
                            </th>
                            <th class="cliente">
                                Cliente
                            </th>
                            <th class="estado">
                                Estado
                            </th>
                            <th class="opciones">
                                Opciones
                            </th>
                            </thead>
<?php
		}
		elseif (end($this->global->switch) === (9)) {
?>
                            <th class="id">
                                ID
                            </th>
                            <th class="modelo">
                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $proveedor->id , 'mode'=> 9 , 'order'=> 1])) ?>">Modelo</a>
                            </th>
                            <th class="proveedor">
                                Proveedor
                            </th>
                            <th class="cliente">
                                Cliente
                            </th>
                            <th class="estado">
                                Estado
                            </th>
                            <th class="opciones">
                                Opciones
                            </th>
                            </thead>
<?php
		}
		array_pop($this->global->switch) ?>


<?php
		$iterations = 0;
		foreach ($maquinas as $maquina) {
?>
                        <tr>
                            <td class="id">
                                <?php echo LR\Filters::escapeHtmlText($maquina->id) /* line 97 */ ?>

                            </td>

                            <td class="modelo">
                                <?php echo LR\Filters::escapeHtmlText($maquina->modelo) /* line 101 */ ?>

                            </td>

                            <td class="proveedor">
                                <?php echo LR\Filters::escapeHtmlText($maquina->proveedor->nombre) /* line 105 */ ?>

                            </td>

                            <td class="cliente">
<?php
			if (isset($maquina->empresa->nombre)) {
				?>                                    <?php echo LR\Filters::escapeHtmlText($maquina->empresa->nombre) /* line 110 */ ?>

<?php
			}
?>
                            </td>

                            <td class="estado">
<?php
			$this->global->switch[] = ($maquina->estado);
			if (false) {
			}
			elseif (end($this->global->switch) === (0)) {
?>
                                    Sin preparar
<?php
			}
			elseif (end($this->global->switch) === (1)) {
?>
                                    Puesta a punto
<?php
			}
			elseif (end($this->global->switch) === (2)) {
?>
                                    Preparada
<?php
			}
			elseif (end($this->global->switch) === (3)) {
?>
                                    In Situ
<?php
			}
			elseif (end($this->global->switch) === (4)) {
?>
                                    Out of Service
<?php
			}
			elseif (end($this->global->switch) === (5)) {
?>
                                    En taller
<?php
			}
			elseif (end($this->global->switch) === (6)) {
?>
                                    Desguace
<?php
			}
			array_pop($this->global->switch) ?>
                            </td>
                            <td class="opciones">
                                <a class = "btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:info", [$maquina->id])) ?>"><i class="bi bi-info-circle-fill"></i> Información</a>
                                <button class="btn btn-success"data-bs-toggle="modal" data-bs-target="#myModal<?php
			echo LR\Filters::escapeHtmlAttr($maquina->id) /* line 134 */ ?>">Añadir Copias</button>
                                <div class="modal fade" id="myModal<?php echo LR\Filters::escapeHtmlAttr($maquina->id) /* line 135 */ ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Añadir copias a maquina #000<?php
			echo LR\Filters::escapeHtmlText($maquina->id) /* line 139 */ ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

<?php
			/* line 144 */ $_tmp = $this->global->uiControl->getComponent("addCopiasForm-$maquina->id");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
<?php
			$iterations++;
		}
?>
                </table>
            </div>
        </div>
    </div>
<?php
	}


	function blockMas_scripts($_args)
	{
		extract($_args);
?>
    <script>
<?php
		$iterations = 0;
		foreach ($maquinas as $maquina) {
			?>        var myModal = document.getElementById('myModal<?php echo LR\Filters::escapeJs($maquina->id) /* line 164 */ ?>')
        var myInput = document.getElementById('myInput<?php echo LR\Filters::escapeJs($maquina->id) /* line 165 */ ?>')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })
<?php
			$iterations++;
		}
?>
    </script>
<?php
	}

}
