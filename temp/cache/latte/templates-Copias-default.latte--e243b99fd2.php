<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Copias/default.latte

use Latte\Runtime as LR;

class Templatee243b99fd2 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
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
			if (isset($this->params['copia'])) trigger_error('Variable $copia overwritten in foreach on line 154, 218, 283, 347');
			if (isset($this->params['maquina'])) trigger_error('Variable $maquina overwritten in foreach on line 217, 282');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="container">
        <div class="row">
                <div class="col-12 col-lg-12">
<?php
		if (isset($modo)) {
			$this->global->switch[] = ($modo);
			if (false) {
?>

<?php
			}
			elseif (end($this->global->switch) === (7)) {
?>
                                <h1>Todos las entradas de copias</h1>
<?php
			}
			elseif (end($this->global->switch) === (8)) {
				?>                                <h1>Todas las entradas de copias del cliente <?php echo LR\Filters::escapeHtmlText($cliente->nombre) /* line 12 */ ?></h1>
<?php
			}
			elseif (end($this->global->switch) === (9)) {
				?>                                <h1>Todas las entradas de copias del proveedor <?php echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 14 */ ?></h1>
<?php
			}
			elseif (end($this->global->switch) === (10)) {
				?>                                <h1>Todos las entradas de copias de la maquina #000<?php echo LR\Filters::escapeHtmlText($copias->id) /* line 16 */ ?> </h1>
<?php
			}
			array_pop($this->global->switch);
		}
		else {
?>
                        MAL
<?php
		}
?>
                </div>
<?php
		if (isset($modo)) {
			if ($modo == 10) {
?>

                <div class="col-12 col-12-lg">
                    <a class="btn btn-success" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:add", [$copias->id])) ?>"><i class="bi bi-plus-circle-fill"></i> Nuevo registro</a>
                </div>

<?php
			}
		}
?>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <table class="table">
                    <thead>
<?php
		$this->global->switch[] = ($modo);
		if (false) {
		}
		elseif (end($this->global->switch) === (7)) {
?>
                            <th class="maquina">
                                Maquina
                            </th>
                            <th class="cliente">
                                Cliente
                            </th>
                            <th class="copiasc">
                                Copias C
                            </th>
                            <th class="copiasc">
                                Copias BN
                            </th>
                            <th class="conpiasl">
                                Copias L1
                            </th>
                            <th class="copiasll">
                                Copias L2
                            </th>
                            <th class="copiaslll">
                                Copias L3
                            </th>
                            <th class="escaneos">
                                Escaneos
                            </th>
<?php
		}
		elseif (end($this->global->switch) === (8)) {
?>
                            <th class="maquina">
                                Maquina
                            </th>
                            <th class="copiasc">
                                Copias C
                            </th>
                            <th class="copiasbn">
                                Copias BN
                            </th>
                            <th class="conpiasl">
                                Copias L1
                            </th>
                            <th class="copiasll">
                                Copias L2
                            </th>
                            <th class="copiaslll">
                                Copias L3
                            </th>
                            <th class="escaneos">
                                Escaneos
                            </th>
<?php
		}
		elseif (end($this->global->switch) === (9)) {
?>
                            <th class="maquina">
                                Maquina
                            </th>
                            <th class="cliente">
                                Cliente
                            </th>
                            <th class="copiasc">
                                Copias C
                            </th>
                            <th class="copiasbn">
                                Copias BN
                            </th>
                            <th class="conpiasl">
                                Copias L1
                            </th>
                            <th class="copiasll">
                                Copias L2
                            </th>
                            <th class="copiaslll">
                                Copias L3
                            </th>
                            <th class="escaneos">
                                Escaneos
                            </th>
<?php
		}
		elseif (end($this->global->switch) === (10)) {
?>
                            <th class="fecha">
                                Fecha
                            </th>
<?php
			if ($copias->tipocontador >= 1) {
?>
                            <th class="copiasc">
                                Copias C
                            </th>
<?php
			}
			if ($copias->tipocontador >= 0) {
?>
                            <th class="copiasbn">
                                Copias BN
                            </th>
<?php
			}
			if ($copias->tipocontador == 2) {
?>
                            <th class="conpiasl">
                                Copias L1
                            </th>
<?php
			}
			if ($copias->tipocontador == 2) {
?>
                            <th class="copiasll">
                                Copias L2
                            </th>
<?php
			}
			if ($copias->tipocontador == 2) {
?>
                            <th class="copiaslll">
                                Copias L3
                            </th>
<?php
			}
?>
                            <th class="escaneos">
                                Escaneos
                            </th>
<?php
			if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") {
?>
                                <th>
                                    Opciones
                                </th>
<?php
			}
		}
		array_pop($this->global->switch) ?>
                    </thead>

<?php
		$this->global->switch[] = ($modo);
		if (false) {
		}
		elseif (end($this->global->switch) === (7)) {
			$iterations = 0;
			foreach ($copias as $copia) {
?>
                                    <tr>
                                    <td class="maquina">
                                        <?php echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 157 */ ?>

                                    </td>
                                    <td class="cliente">
<?php
				if (isset($copia->maquina->empresa->nombre)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 161 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="copiasc">
<?php
				if (isset($copia->copiascl)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 168 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="copiasbn">
<?php
				if (isset($copia->copiasbn)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 175 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="copiasl">
<?php
				if (isset($copia->copiasl)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 182 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="copiasll">
<?php
				if (isset($copia->copiasll)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 189 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="copiaslll">
<?php
				if (isset($copia->copiasll)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 196 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
                                    <td class="escaneos">
<?php
				if (isset($copia->escaneos)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 203 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
<?php
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") {
?>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) ?>"><i class="bi bi-trash-fill"></i> Remove</a>
                                            </td>
<?php
				}
?>
                                </tr>
<?php
				$iterations++;
			}
		}
		elseif (end($this->global->switch) === (8)) {
			$iterations = 0;
			foreach ($maquinas as $maquina) {
				$iterations = 0;
				foreach ($maquina->copias as $copia) {
?>
                                        <tr>
                                        <td class="maquina">
                                            <?php echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 221 */ ?>

                                        </td>
                                        <td class="cliente">
<?php
					if (isset($copia->maquina->empresa->nombre)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 225 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasc">
<?php
					if (isset($copia->copiascl)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 232 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasbn">
<?php
					if (isset($copia->copiasbn)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 239 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasl">
<?php
					if (isset($copia->copiasl)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 246 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasll">
<?php
					if (isset($copia->copiasll)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 253 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiaslll">
<?php
					if (isset($copia->copiasll)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 260 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="escaneos">
<?php
					if (isset($copia->escaneos)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 267 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
<?php
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") {
?>
                                                <td>
                                                    <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) ?>"><i class="bi bi-trash-fill"></i> Remove</a>
                                                </td>
<?php
					}
?>
                                    </tr>
<?php
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (end($this->global->switch) === (9)) {
			$iterations = 0;
			foreach ($maquinas as $maquina) {
				$iterations = 0;
				foreach ($maquina->copias as $copia) {
?>
                                        <tr>
                                        <td class="maquina">
                                            <?php echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 286 */ ?>

                                        </td>
                                        <td class="cliente">
<?php
					if (isset($copia->maquina->empresa->nombre)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 290 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasc">
<?php
					if (isset($copia->copiascl)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 297 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasbn">
<?php
					if (isset($copia->copiasbn)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 304 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasl">
<?php
					if (isset($copia->copiasl)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 311 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiasll">
<?php
					if (isset($copia->copiasll)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 318 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="copiaslll">
<?php
					if (isset($copia->copiasll)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 325 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
                                        <td class="escaneos">
<?php
					if (isset($copia->escaneos)) {
						?>                                                <?php echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 332 */ ?>

<?php
					}
					else {
?>
                                                N/S
<?php
					}
?>
                                        </td>
<?php
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") {
?>
                                                <td>
                                                    <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) ?>"><i class="bi bi-trash-fill"></i> Remove</a>
                                                </td>
<?php
					}
?>
                                    </tr>
<?php
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (end($this->global->switch) === (10)) {
			$iterations = 0;
			foreach ($copies as $copia) {
?>
                                    <tr>
                                        <td class="fecha">
                                            <?php echo LR\Filters::escapeHtmlText($copia->fecha) /* line 350 */ ?>

                                        </td>
<?php
				if ($copias->tipocontador >= 1) {
?>
                                    <td class="copiasc">
<?php
					if (isset($copia->copiascl)) {
						?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 355 */ ?>

<?php
					}
					else {
?>
                                            N/S
<?php
					}
?>
                                    </td>
<?php
				}
				if ($copias->tipocontador >= 0) {
?>
                                    <td class="copiasbn">
<?php
					if (isset($copia->copiasbn)) {
						?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 364 */ ?>

<?php
					}
					else {
?>
                                            N/S
<?php
					}
?>
                                    </td>
<?php
				}
				if ($copias->tipocontador == 2) {
?>
                                    <td class="copiasl">
<?php
					if (isset($copia->copiasl)) {
						?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 373 */ ?>

<?php
					}
					else {
?>
                                            N/S
<?php
					}
?>
                                    </td>
<?php
				}
				if ($copias->tipocontador == 2) {
?>
                                    <td class="copiasll">
<?php
					if (isset($copia->copiasll)) {
						?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 382 */ ?>

<?php
					}
					else {
?>
                                            N/S
<?php
					}
?>
                                    </td>
<?php
				}
				if ($copias->tipocontador == 2) {
?>
                                    <td class="copiaslll">
<?php
					if (isset($copia->copiasll)) {
						?>                                            <?php echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 391 */ ?>

<?php
					}
					else {
?>
                                            N/S
<?php
					}
?>
                                    </td>
<?php
				}
?>
                                    <td class="escaneos">
<?php
				if (isset($copia->escaneos)) {
					?>                                            <?php echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 399 */ ?>

<?php
				}
				else {
?>
                                            N/S
<?php
				}
?>
                                    </td>
<?php
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") {
?>
                                            <td>
                                                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) ?>"><i class="bi bi-trash-fill"></i> Remove</a>
                                            </td>
<?php
				}
?>
                                <tr>
<?php
				$iterations++;
			}
		}
		array_pop($this->global->switch) ?>
                </table>
            </div>
        </div>
    </div>
<?php
	}

}
