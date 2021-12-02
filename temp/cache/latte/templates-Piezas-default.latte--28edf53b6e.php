<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Piezas/default.latte */
final class Template28edf53b6e extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['cambio' => '37'], $this->params) as $ʟ_v => $ʟ_l) {
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
                <h1>Cambios de Piezas</h1>
            </div>
            <div class="col col-lg-6">

            </div>
            <div class="col col-lg-10">
                <table class="table">
                    <thead class="thead-dark">
';
		if ($mode == 0) /* line 13 */ {
			echo '                            <th>
                                Maquina
                            </th>
';
		}
		echo '                        <th>
                            Pieza
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Razón
                        </th>
                        <th>
                            Origen
                        </th>
                        <th>
                            Tecnico
                        </th>
                        <th>
                            Garantía
                        </th>
                    </thead>
';
		$iterations = 0;
		foreach ($cambios as $cambio) /* line 37 */ {
			echo '                        <tr>
';
			if ($mode == 0) /* line 39 */ {
				echo '                                <td>x
                                    ';
				echo LR\Filters::escapeHtmlText($cambio->maquina->id) /* line 41 */;
				echo '
                                </td>
';
			}
			echo '                            <td>
                                Pieza (TODO)
                            </td>
                            <td>
                                Añadir campo fecha
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($cambio->causa) /* line 51 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($cambio->origen) /* line 54 */;
			echo '
                            </td>
                            <td>
                                ';
			echo LR\Filters::escapeHtmlText($cambio->tecnico) /* line 57 */;
			echo '
                            </td>
                            <td>
';
			if ($cambio->garantia) /* line 60 */ {
				echo '                                    Si
';
			}
			else /* line 62 */ {
				echo '                                    No
';
			}
			echo '                            </td>
                        </tr>
';
			$iterations++;
		}
		echo '                </table>

            </div>
        </div>
    </div>';
	}

}
