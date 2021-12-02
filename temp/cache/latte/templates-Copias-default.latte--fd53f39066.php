<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Copias/default.latte */
final class Templatefd53f39066 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['copia' => '154, 218, 283, 347', 'maquina' => '217, 282'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <div class="col-12 col-lg-12">
';
		if (isset($modo)) /* line 6 */ {
			$ʟ_switch = ($modo) /* line 7 */;
			if (false) {
				echo "\n";
			}
			elseif (in_array($ʟ_switch, [7], true)) /* line 9 */ {
				echo '                                <h1>Todos las entradas de copias</h1>
';
			}
			elseif (in_array($ʟ_switch, [8], true)) /* line 11 */ {
				echo '                                <h1>Todas las entradas de copias del cliente ';
				echo LR\Filters::escapeHtmlText($cliente->nombre) /* line 12 */;
				echo '</h1>
';
			}
			elseif (in_array($ʟ_switch, [9], true)) /* line 13 */ {
				echo '                                <h1>Todas las entradas de copias del proveedor ';
				echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 14 */;
				echo '</h1>
';
			}
			elseif (in_array($ʟ_switch, [10], true)) /* line 15 */ {
				echo '                                <h1>Todos las entradas de copias de la maquina #000';
				echo LR\Filters::escapeHtmlText($copias->id) /* line 16 */;
				echo ' </h1>
';
			}
		}
		else /* line 18 */ {
			echo '                        MAL
';
		}
		echo '                </div>
';
		if (isset($modo)) /* line 23 */ {
			if ($modo == 10) /* line 24 */ {
				echo '
                <div class="col-12 col-12-lg">
                    <a class="btn btn-success" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:add", [$copias->id])) /* line 27 */;
				echo '"><i class="bi bi-plus-circle-fill"></i> Nuevo registro</a>
                </div>

';
			}
		}
		echo '        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <table class="table">
                    <thead>
';
		$ʟ_switch = ($modo) /* line 37 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 38 */ {
			echo '                            <th class="maquina">
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
';
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 63 */ {
			echo '                            <th class="maquina">
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
';
		}
		elseif (in_array($ʟ_switch, [9], true)) /* line 85 */ {
			echo '                            <th class="maquina">
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
';
		}
		elseif (in_array($ʟ_switch, [10], true)) /* line 110 */ {
			echo '                            <th class="fecha">
                                Fecha
                            </th>
';
			if ($copias->tipocontador >= 1) /* line 114 */ {
				echo '                            <th class="copiasc">
                                Copias C
                            </th>
';
			}
			if ($copias->tipocontador >= 0) /* line 119 */ {
				echo '                            <th class="copiasbn">
                                Copias BN
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 124 */ {
				echo '                            <th class="conpiasl">
                                Copias L1
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 129 */ {
				echo '                            <th class="copiasll">
                                Copias L2
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 134 */ {
				echo '                            <th class="copiaslll">
                                Copias L3
                            </th>
';
			}
			echo '                            <th class="escaneos">
                                Escaneos
                            </th>
';
			if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 142 */ {
				echo '                                <th>
                                    Opciones
                                </th>
';
			}
		}
		echo '                    </thead>

';
		$ʟ_switch = ($modo) /* line 152 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 153 */ {
			$iterations = 0;
			foreach ($copias as $copia) /* line 154 */ {
				echo '                                    <tr>
                                    <td class="maquina">
                                        ';
				echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 157 */;
				echo '
                                    </td>
                                    <td class="cliente">
';
				if (isset($copia->maquina->empresa->nombre)) /* line 160 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 161 */;
					echo "\n";
				}
				else /* line 162 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasc">
';
				if (isset($copia->copiascl)) /* line 167 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 168 */;
					echo "\n";
				}
				else /* line 169 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasbn">
';
				if (isset($copia->copiasbn)) /* line 174 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 175 */;
					echo "\n";
				}
				else /* line 176 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasl">
';
				if (isset($copia->copiasl)) /* line 181 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 182 */;
					echo "\n";
				}
				else /* line 183 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasll">
';
				if (isset($copia->copiasll)) /* line 188 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 189 */;
					echo "\n";
				}
				else /* line 190 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiaslll">
';
				if (isset($copia->copiasll)) /* line 195 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 196 */;
					echo "\n";
				}
				else /* line 197 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 202 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 203 */;
					echo "\n";
				}
				else /* line 204 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 208 */ {
					echo '                                            <td>
                                                <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 210 */;
					echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 211 */;
					echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                            </td>
';
				}
				echo '                                </tr>
';
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 216 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 217 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 218 */ {
					echo '                                        <tr>
                                        <td class="maquina">
                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 221 */;
					echo '
                                        </td>
                                        <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 224 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 225 */;
						echo "\n";
					}
					else /* line 226 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 231 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 232 */;
						echo "\n";
					}
					else /* line 233 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 238 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 239 */;
						echo "\n";
					}
					else /* line 240 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 245 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 246 */;
						echo "\n";
					}
					else /* line 247 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 252 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 253 */;
						echo "\n";
					}
					else /* line 254 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 259 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 260 */;
						echo "\n";
					}
					else /* line 261 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 266 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 267 */;
						echo "\n";
					}
					else /* line 268 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 272 */ {
						echo '                                                <td>
                                                    <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 274 */;
						echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 275 */;
						echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                                </td>
';
					}
					echo '                                    </tr>
';
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [9], true)) /* line 281 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 282 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 283 */ {
					echo '                                        <tr>
                                        <td class="maquina">
                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 286 */;
					echo '
                                        </td>
                                        <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 289 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 290 */;
						echo "\n";
					}
					else /* line 291 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 296 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 297 */;
						echo "\n";
					}
					else /* line 298 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 303 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 304 */;
						echo "\n";
					}
					else /* line 305 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 310 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 311 */;
						echo "\n";
					}
					else /* line 312 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 317 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 318 */;
						echo "\n";
					}
					else /* line 319 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 324 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 325 */;
						echo "\n";
					}
					else /* line 326 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 331 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 332 */;
						echo "\n";
					}
					else /* line 333 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 337 */ {
						echo '                                                <td>
                                                    <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 339 */;
						echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 340 */;
						echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                                </td>
';
					}
					echo '                                    </tr>
';
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [10], true)) /* line 346 */ {
			$iterations = 0;
			foreach ($copies as $copia) /* line 347 */ {
				echo '                                    <tr>
                                        <td class="fecha">
                                            ';
				echo LR\Filters::escapeHtmlText($copia->fecha) /* line 350 */;
				echo '
                                        </td>
';
				if ($copias->tipocontador >= 1) /* line 352 */ {
					echo '                                    <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 354 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 355 */;
						echo "\n";
					}
					else /* line 356 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador >= 0) /* line 361 */ {
					echo '                                    <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 363 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 364 */;
						echo "\n";
					}
					else /* line 365 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 370 */ {
					echo '                                    <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 372 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 373 */;
						echo "\n";
					}
					else /* line 374 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 379 */ {
					echo '                                    <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 381 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 382 */;
						echo "\n";
					}
					else /* line 383 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 388 */ {
					echo '                                    <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 390 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 391 */;
						echo "\n";
					}
					else /* line 392 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				echo '                                    <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 398 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 399 */;
					echo "\n";
				}
				else /* line 400 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 404 */ {
					echo '                                            <td>
                                                <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 406 */;
					echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 407 */;
					echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                            </td>
';
				}
				echo '                                <tr>
';
				$iterations++;
			}
		}
		echo '                </table>
            </div>
        </div>
    </div>
';
	}

}
