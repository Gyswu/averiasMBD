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
			foreach (array_intersect_key(['copia' => '152, 218, 285, 351', 'maquina' => '217, 284'], $this->params) as $ʟ_v => $ʟ_l) {
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
				echo '                        <h1>Todos las entradas de copias</h1>
';
			}
			elseif (in_array($ʟ_switch, [8], true)) /* line 11 */ {
				echo '                        <h1>Todas las entradas de copias del cliente ';
				echo LR\Filters::escapeHtmlText($cliente->nombre) /* line 12 */;
				echo '</h1>
';
			}
			elseif (in_array($ʟ_switch, [9], true)) /* line 13 */ {
				echo '                        <h1>Todas las entradas de copias del proveedor ';
				echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 14 */;
				echo '</h1>
';
			}
			elseif (in_array($ʟ_switch, [10], true)) /* line 15 */ {
				echo '                        <h1>Todos las entradas de copias de la maquina #000';
				echo LR\Filters::escapeHtmlText($copias->id) /* line 16 */;
				echo ' </h1>
';
			}
		}
		else /* line 18 */ {
			echo '                    MAL
';
		}
		echo '            </div>
';
		if (isset($modo)) /* line 23 */ {
			if ($modo == 10) /* line 24 */ {
				echo '
                    <div class="col-12 col-12-lg">
                        <a class="btn btn-success" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:add", [$copias->id])) /* line 27 */;
				echo '"><i
                                    class="bi bi-plus-circle-fill"></i> Nuevo registro</a>
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
		$ʟ_switch = ($modo) /* line 38 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 39 */ {
			echo '                        <th class="maquina">
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
		elseif (in_array($ʟ_switch, [8], true)) /* line 64 */ {
			echo '                        <th class="maquina">
                            Maquina
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
		elseif (in_array($ʟ_switch, [9], true)) /* line 83 */ {
			echo '                        <th class="maquina">
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
		elseif (in_array($ʟ_switch, [10], true)) /* line 108 */ {
			echo '                        <th class="fecha">
                            Fecha
                        </th>
';
			if ($copias->tipocontador <= 1) /* line 112 */ {
				echo '                            <th class="copiasc">
                                Copias C
                            </th>
';
			}
			if ($copias->tipocontador >= 0) /* line 117 */ {
				echo '                            <th class="copiasbn">
                                Copias BN
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 122 */ {
				echo '                            <th class="conpiasl">
                                Copias L1
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 127 */ {
				echo '                            <th class="copiasll">
                                Copias L2
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 132 */ {
				echo '                            <th class="copiaslll">
                                Copias L3
                            </th>
';
			}
			echo '                        <th class="escaneos">
                            Escaneos
                        </th>
';
			if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 140 */ {
				echo '                            <th>
                                Opciones
                            </th>
';
			}
		}
		echo '                    </thead>

';
		$ʟ_switch = ($modo) /* line 150 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 151 */ {
			$iterations = 0;
			foreach ($copias as $copia) /* line 152 */ {
				echo '                        <tr>
                            <td class="maquina">
                                ';
				echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 155 */;
				echo '
                            </td>
                            <td class="cliente">
';
				if (isset($copia->maquina->empresa->nombre)) /* line 158 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 159 */;
					echo "\n";
				}
				else /* line 160 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="copiasc">
';
				if (isset($copia->copiascl)) /* line 165 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 166 */;
					echo "\n";
				}
				else /* line 167 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="copiasbn">
';
				if (isset($copia->copiasbn)) /* line 172 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 173 */;
					echo "\n";
				}
				else /* line 174 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="copiasl">
';
				if (isset($copia->copiasl)) /* line 179 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 180 */;
					echo "\n";
				}
				else /* line 181 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="copiasll">
';
				if (isset($copia->copiasll)) /* line 186 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 187 */;
					echo "\n";
				}
				else /* line 188 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="copiaslll">
';
				if (isset($copia->copiasll)) /* line 193 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 194 */;
					echo "\n";
				}
				else /* line 195 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
                            <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 200 */ {
					echo '                                    ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 201 */;
					echo "\n";
				}
				else /* line 202 */ {
					echo '                                    N/S
';
				}
				echo '                            </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 206 */ {
					echo '                                <td>
                                    <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 208 */;
					echo '"><i
                                                class="bi bi-pencil-square"></i> Editar</a>
                                    <a
                                            class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 210 */;
					echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                </td>
';
				}
				echo '                        </tr>
';
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 216 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 217 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 218 */ {
					echo '                            <tr>
                                <td class="maquina">
                                    ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 221 */;
					echo '
                                </td>
                                <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 224 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 225 */;
						echo "\n";
					}
					else /* line 226 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 231 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 232 */;
						echo "\n";
					}
					else /* line 233 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 238 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 239 */;
						echo "\n";
					}
					else /* line 240 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 245 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 246 */;
						echo "\n";
					}
					else /* line 247 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 252 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 253 */;
						echo "\n";
					}
					else /* line 254 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 259 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 260 */;
						echo "\n";
					}
					else /* line 261 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 266 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 267 */;
						echo "\n";
					}
					else /* line 268 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 272 */ {
						echo '                                    <td>
                                        <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 274 */;
						echo '"><i
                                                    class="bi bi-pencil-square"></i> Editar</a>
                                        <a
                                                class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 276 */;
						echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                    </td>
';
					}
					echo '                            </tr>
';
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [9], true)) /* line 283 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 284 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 285 */ {
					echo '                            <tr>
                                <td class="maquina">
                                    ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 288 */;
					echo '
                                </td>
                                <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 291 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 292 */;
						echo "\n";
					}
					else /* line 293 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 298 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 299 */;
						echo "\n";
					}
					else /* line 300 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 305 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 306 */;
						echo "\n";
					}
					else /* line 307 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 312 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 313 */;
						echo "\n";
					}
					else /* line 314 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 319 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 320 */;
						echo "\n";
					}
					else /* line 321 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 326 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 327 */;
						echo "\n";
					}
					else /* line 328 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
                                <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 333 */ {
						echo '                                        ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 334 */;
						echo "\n";
					}
					else /* line 335 */ {
						echo '                                        N/S
';
					}
					echo '                                </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 339 */ {
						echo '                                    <td>
                                        <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 341 */;
						echo '"><i
                                                    class="bi bi-pencil-square"></i> Editar</a>
                                        <a
                                                class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 343 */;
						echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                    </td>
';
					}
					echo '                            </tr>
';
					$iterations++;
				}
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [10], true)) /* line 350 */ {
			$iterations = 0;
			foreach ($copies as $copia) /* line 351 */ {
				echo '                    <tr>
                        <td class="fecha">
                            ';
				echo LR\Filters::escapeHtmlText($copia->fecha) /* line 354 */;
				echo '
                        </td>
';
				if ($copias->tipocontador <= 1) /* line 356 */ {
					echo '                            <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 358 */ {
						echo '                                    ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 359 */;
						echo "\n";
					}
					else /* line 360 */ {
						echo '                                    N/S
';
					}
					echo '                            </td>
';
				}
				if ($copias->tipocontador >= 0) /* line 365 */ {
					echo '                            <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 367 */ {
						echo '                                    ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 368 */;
						echo "\n";
					}
					else /* line 369 */ {
						echo '                                    N/S
';
					}
					echo '                            </td>
';
				}
				if ($copias->tipocontador == 2) /* line 374 */ {
					echo '                            <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 376 */ {
						echo '                                    ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 377 */;
						echo "\n";
					}
					else /* line 378 */ {
						echo '                                    N/S
';
					}
					echo '                            </td>
';
				}
				if ($copias->tipocontador == 2) /* line 383 */ {
					echo '                            <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 385 */ {
						echo '                                    ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 386 */;
						echo "\n";
					}
					else /* line 387 */ {
						echo '                                    N/S
';
					}
					echo '                            </td>
';
				}
				if ($copias->tipocontador == 2) /* line 392 */ {
					echo '                            <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 394 */ {
						echo '                                    ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 395 */;
						echo "\n";
					}
					else /* line 396 */ {
						echo '                                    N/S
';
					}
					echo '                            </td>
';
				}
				echo '                        <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 402 */ {
					echo '                                ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 403 */;
					echo "\n";
				}
				else /* line 404 */ {
					echo '                                N/S
';
				}
				echo '                        </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 408 */ {
					echo '                            <td>
                                <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 410 */;
					echo '"><i
                                            class="bi bi-pencil-square"></i> Editar</a>
                                <a
                                        class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 412 */;
					echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                            </td>
';
				}
				echo '                    <tr>
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
