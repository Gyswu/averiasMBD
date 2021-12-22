<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/default.latte */
final class Templatecc5c5bda7e extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'mas_scripts' => 'blockMas_scripts'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo "\n";
		$this->renderBlock('mas_scripts', get_defined_vars()) /* line 176 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['maquina' => '99, 178'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
';
		$ʟ_switch = ($mode) /* line 5 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 6 */ {
			echo '                    <h1>Todas las maquinas</h1>
';
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 8 */ {
			echo '                    <h1>Maquinas del clinete ';
			echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 9 */;
			echo '</h1>
';
		}
		elseif (in_array($ʟ_switch, [9], true)) /* line 10 */ {
			echo '                    <h1>Maquinas del proveedor ';
			echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 11 */;
			echo '</h1>
';
		}
		echo '            </div>
            <div class="col col-lg-6">
                <a class="btn btn-xs btn-success" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:add")) /* line 15 */;
		echo '"><i class="bi bi-plus-circle-fill"></i>
                    Añadir</a>


            </div>
            <div class="col col-lg-10">
                <table class="table">
                    <thead class="thead-dark">
';
		$ʟ_switch = ($mode) /* line 23 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 24 */ {
			echo '                    <th class="id">
                        ID
                    </th>
                    <th class="modelo">
                        Modelo
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 1])) /* line 30 */;
			echo '"><i
                                    class="bi bi-arrow-up-circle-fill"></i></a>
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 2])) /* line 32 */;
			echo '"><i class="bi bi-arrow-down-circle-fill"></i></a>
                    </th>
                    <th class="proveedor">
                        Proveedor
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 3])) /* line 36 */;
			echo '"><i
                                    class="bi bi-arrow-up-circle-fill"></i></a>
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 4])) /* line 38 */;
			echo '"><i class="bi bi-arrow-down-circle-fill"></i></a>
                    </th>
                    <th class="cliente">
                        Cliente
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 5])) /* line 42 */;
			echo '"><i
                                    class="bi bi-arrow-up-circle-fill"></i></a>
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 6])) /* line 44 */;
			echo '"><i class="bi bi-arrow-down-circle-fill"></i></a>
                    </th>
                    <th class="estado">
                        Estado
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 7])) /* line 48 */;
			echo '"><i
                                    class="bi bi-arrow-up-circle-fill"></i></a>
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['mode'=> 7 , 'order'=> 8])) /* line 50 */;
			echo '"><i class="bi bi-arrow-down-circle-fill"></i></a>
                    </th>
                    <th class="opciones">
                        Opciones
                    </th>
                    </thead>
';
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 56 */ {
			echo '                    <th class="id">
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
';
		}
		elseif (in_array($ʟ_switch, [9], true)) /* line 76 */ {
			echo '                    <th class="id">
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
';
		}
		echo '

';
		$iterations = 0;
		foreach ($maquinas as $maquina) /* line 99 */ {
			if ($maquina->modelo !== "blank") /* line 100 */ {
				echo '                            <tr>
                                <td class="id">
                                    ';
				echo LR\Filters::escapeHtmlText($maquina->id) /* line 103 */;
				echo '
                                </td>

                                <td class="modelo">
                                    ';
				echo LR\Filters::escapeHtmlText($maquina->modelo) /* line 107 */;
				echo '
                                </td>

                                <td class="proveedor">
                                    ';
				echo LR\Filters::escapeHtmlText($maquina->proveedor->nombre) /* line 111 */;
				echo '
                                </td>

                                <td class="cliente">
';
				if (isset($maquina->empresa->nombre)) /* line 115 */ {
					echo '                                        ';
					echo LR\Filters::escapeHtmlText($maquina->empresa->nombre) /* line 116 */;
					echo "\n";
				}
				echo '                                </td>

                                <td class="estado">
';
				$ʟ_switch = ($maquina->estado) /* line 121 */;
				if (false) {
				}
				elseif (in_array($ʟ_switch, [0], true)) /* line 122 */ {
					echo '                                        Sin preparar
';
				}
				elseif (in_array($ʟ_switch, [1], true)) /* line 124 */ {
					echo '                                        Puesta a punto
';
				}
				elseif (in_array($ʟ_switch, [2], true)) /* line 126 */ {
					echo '                                        Preparada
';
				}
				elseif (in_array($ʟ_switch, [3], true)) /* line 128 */ {
					echo '                                        In Situ
';
				}
				elseif (in_array($ʟ_switch, [4], true)) /* line 130 */ {
					echo '                                        Out of Service
';
				}
				elseif (in_array($ʟ_switch, [5], true)) /* line 132 */ {
					echo '                                        En taller
';
				}
				elseif (in_array($ʟ_switch, [6], true)) /* line 134 */ {
					echo '                                        Desguace
';
				}
				echo '                                </td>
                                <td class="opciones">
                                    <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:info", [$maquina->id])) /* line 139 */;
				echo '"><i
                                                class="bi bi-info-circle-fill"></i> Información</a>
                                    <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#myModal';
				echo LR\Filters::escapeHtmlAttr($maquina->id) /* line 142 */;
				echo '">Añadir Copias
                                    </button>
                                    <div class="modal fade" id="myModal';
				echo LR\Filters::escapeHtmlAttr($maquina->id) /* line 144 */;
				echo '" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Añadir copias a
                                                        maquina #000';
				echo LR\Filters::escapeHtmlText($maquina->id) /* line 150 */;
				echo '</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

';
				/* line 156 */ $_tmp = $this->global->uiControl->getComponent("addCopiasForm-$maquina->id");
				if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
				$_tmp->render();
				echo '                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
';
			}
			$iterations++;
		}
		echo '                </table>
            </div>
        </div>
    </div>
';
	}


	/** {block mas_scripts} on line 176 */
	public function blockMas_scripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <script>
';
		$iterations = 0;
		foreach ($maquinas as $maquina) /* line 178 */ {
			echo '        var myModal = document.getElementById(\'myModal';
			echo LR\Filters::escapeJs($maquina->id) /* line 179 */;
			echo '\')
        var myInput = document.getElementById(\'myInput';
			echo LR\Filters::escapeJs($maquina->id) /* line 180 */;
			echo '\')

        myModal.addEventListener(\'shown.bs.modal\', function () {
            myInput.focus()
        })
';
			$iterations++;
		}
		echo '    </script>
';
	}

}
