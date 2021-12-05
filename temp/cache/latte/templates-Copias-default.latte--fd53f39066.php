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
			foreach (array_intersect_key(['copia' => '151, 215, 280, 344', 'maquina' => '214, 279'], $this->params) as $ʟ_v => $ʟ_l) {
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
		elseif (in_array($ʟ_switch, [9], true)) /* line 82 */ {
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
		elseif (in_array($ʟ_switch, [10], true)) /* line 107 */ {
			echo '                            <th class="fecha">
                                Fecha
                            </th>
';
			if ($copias->tipocontador <= 1) /* line 111 */ {
				echo '                            <th class="copiasc">
                                Copias C
                            </th>
';
			}
			if ($copias->tipocontador >= 0) /* line 116 */ {
				echo '                            <th class="copiasbn">
                                Copias BN
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 121 */ {
				echo '                            <th class="conpiasl">
                                Copias L1
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 126 */ {
				echo '                            <th class="copiasll">
                                Copias L2
                            </th>
';
			}
			if ($copias->tipocontador == 2) /* line 131 */ {
				echo '                            <th class="copiaslll">
                                Copias L3
                            </th>
';
			}
			echo '                            <th class="escaneos">
                                Escaneos
                            </th>
';
			if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 139 */ {
				echo '                                <th>
                                    Opciones
                                </th>
';
			}
		}
		echo '                    </thead>

';
		$ʟ_switch = ($modo) /* line 149 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [7], true)) /* line 150 */ {
			$iterations = 0;
			foreach ($copias as $copia) /* line 151 */ {
				echo '                                    <tr>
                                    <td class="maquina">
                                        ';
				echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 154 */;
				echo '
                                    </td>
                                    <td class="cliente">
';
				if (isset($copia->maquina->empresa->nombre)) /* line 157 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 158 */;
					echo "\n";
				}
				else /* line 159 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasc">
';
				if (isset($copia->copiascl)) /* line 164 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 165 */;
					echo "\n";
				}
				else /* line 166 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasbn">
';
				if (isset($copia->copiasbn)) /* line 171 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 172 */;
					echo "\n";
				}
				else /* line 173 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasl">
';
				if (isset($copia->copiasl)) /* line 178 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 179 */;
					echo "\n";
				}
				else /* line 180 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiasll">
';
				if (isset($copia->copiasll)) /* line 185 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 186 */;
					echo "\n";
				}
				else /* line 187 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="copiaslll">
';
				if (isset($copia->copiasll)) /* line 192 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 193 */;
					echo "\n";
				}
				else /* line 194 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
                                    <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 199 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 200 */;
					echo "\n";
				}
				else /* line 201 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 205 */ {
					echo '                                            <td>
                                                <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 207 */;
					echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 208 */;
					echo '"><i class="bi bi-trash-fill"></i> Remove</a>
                                            </td>
';
				}
				echo '                                </tr>
';
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [8], true)) /* line 213 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 214 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 215 */ {
					echo '                                        <tr>
                                        <td class="maquina">
                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 218 */;
					echo '
                                        </td>
                                        <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 221 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 222 */;
						echo "\n";
					}
					else /* line 223 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 228 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 229 */;
						echo "\n";
					}
					else /* line 230 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 235 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 236 */;
						echo "\n";
					}
					else /* line 237 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 242 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 243 */;
						echo "\n";
					}
					else /* line 244 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 249 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 250 */;
						echo "\n";
					}
					else /* line 251 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 256 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 257 */;
						echo "\n";
					}
					else /* line 258 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 263 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 264 */;
						echo "\n";
					}
					else /* line 265 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 269 */ {
						echo '                                                <td>
                                                    <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 271 */;
						echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 272 */;
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
		elseif (in_array($ʟ_switch, [9], true)) /* line 278 */ {
			$iterations = 0;
			foreach ($maquinas as $maquina) /* line 279 */ {
				$iterations = 0;
				foreach ($maquina->copias as $copia) /* line 280 */ {
					echo '                                        <tr>
                                        <td class="maquina">
                                            ';
					echo LR\Filters::escapeHtmlText($copia->maquina->modelo) /* line 283 */;
					echo '
                                        </td>
                                        <td class="cliente">
';
					if (isset($copia->maquina->empresa->nombre)) /* line 286 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->maquina->empresa->nombre) /* line 287 */;
						echo "\n";
					}
					else /* line 288 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 293 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 294 */;
						echo "\n";
					}
					else /* line 295 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 300 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 301 */;
						echo "\n";
					}
					else /* line 302 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 307 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 308 */;
						echo "\n";
					}
					else /* line 309 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 314 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 315 */;
						echo "\n";
					}
					else /* line 316 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 321 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 322 */;
						echo "\n";
					}
					else /* line 323 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
                                        <td class="escaneos">
';
					if (isset($copia->escaneos)) /* line 328 */ {
						echo '                                                ';
						echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 329 */;
						echo "\n";
					}
					else /* line 330 */ {
						echo '                                                N/S
';
					}
					echo '                                        </td>
';
					if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 334 */ {
						echo '                                                <td>
                                                    <a class="btn btn-info" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 336 */;
						echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                    <a class="btn btn-danger" href="';
						echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 337 */;
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
		elseif (in_array($ʟ_switch, [10], true)) /* line 343 */ {
			$iterations = 0;
			foreach ($copies as $copia) /* line 344 */ {
				echo '                                    <tr>
                                        <td class="fecha">
                                            ';
				echo LR\Filters::escapeHtmlText($copia->fecha) /* line 347 */;
				echo '
                                        </td>
';
				if ($copias->tipocontador <= 1) /* line 349 */ {
					echo '                                    <td class="copiasc">
';
					if (isset($copia->copiascl)) /* line 351 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiascl) /* line 352 */;
						echo "\n";
					}
					else /* line 353 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador >= 0) /* line 358 */ {
					echo '                                    <td class="copiasbn">
';
					if (isset($copia->copiasbn)) /* line 360 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasbn) /* line 361 */;
						echo "\n";
					}
					else /* line 362 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 367 */ {
					echo '                                    <td class="copiasl">
';
					if (isset($copia->copiasl)) /* line 369 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasl) /* line 370 */;
						echo "\n";
					}
					else /* line 371 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 376 */ {
					echo '                                    <td class="copiasll">
';
					if (isset($copia->copiasll)) /* line 378 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 379 */;
						echo "\n";
					}
					else /* line 380 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				if ($copias->tipocontador == 2) /* line 385 */ {
					echo '                                    <td class="copiaslll">
';
					if (isset($copia->copiasll)) /* line 387 */ {
						echo '                                            ';
						echo LR\Filters::escapeHtmlText($copia->copiasll) /* line 388 */;
						echo "\n";
					}
					else /* line 389 */ {
						echo '                                            N/S
';
					}
					echo '                                    </td>
';
				}
				echo '                                    <td class="escaneos">
';
				if (isset($copia->escaneos)) /* line 395 */ {
					echo '                                            ';
					echo LR\Filters::escapeHtmlText($copia->escaneos) /* line 396 */;
					echo "\n";
				}
				else /* line 397 */ {
					echo '                                            N/S
';
				}
				echo '                                    </td>
';
				if ($rol == "admin" || $rol == "gerente" || $rol == "miriam") /* line 401 */ {
					echo '                                            <td>
                                                <a class="btn btn-info" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:edit", [$copia->id])) /* line 403 */;
					echo '"><i class="bi bi-pencil-square"></i> Editar</a>
                                                <a class="btn btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:removeCopia", ['idcopia' => $copia->id, 'modo' => $modo])) /* line 404 */;
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
