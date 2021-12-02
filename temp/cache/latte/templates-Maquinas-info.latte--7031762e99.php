<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/info.latte */
final class Template7031762e99 extends Latte\Runtime\Template
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
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <div class="cotnainer">
        <div class="row">
            <div class="col col-lg-12">
                <h1 class="text-center">
                    Información de la maquina nº #000';
		echo LR\Filters::escapeHtmlText($maquina->id) /* line 6 */;
		echo '
                </h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-12 col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td>
                            <h5>ID</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($maquina->id) /* line 18 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Modelo</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($maquina->modelo) /* line 26 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>IP</h5>
                        </td>
                        <td>
';
		if (isset($maquina->ip)) /* line 34 */ {
			echo '                                ';
			echo LR\Filters::escapeHtmlText($maquina->ip) /* line 35 */;
			echo "\n";
		}
		else /* line 36 */ {
			echo '                                Sin IP
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Firmaware</h5>
                        </td>
                        <td>
';
		if (isset($maquina->vfirmware)) /* line 46 */ {
			echo '                                ';
			echo LR\Filters::escapeHtmlText($maquina->vfirmware) /* line 47 */;
			echo "\n";
		}
		else /* line 48 */ {
			echo '                                Sin DATOS
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Cliente</h5>
                        </td>
                        <td>
';
		if (isset($maquina->empresa)) /* line 58 */ {
			echo '                                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$maquina->empresa->id])) /* line 59 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($maquina->empresa->nombre) /* line 59 */;
			echo '</a>
';
		}
		else /* line 60 */ {
			echo '                                Taller
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Proveedor</h5>
                        </td>
                        <td>
';
		if (isset($maquina->proveedor)) /* line 70 */ {
			echo '                                <a href="">';
			echo LR\Filters::escapeHtmlText($maquina->proveedor->nombre) /* line 71 */;
			echo '</a>
';
		}
		else /* line 72 */ {
			echo '                                Sin DATOS
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Fecha de Compra</h5>
                        </td>
                        <td>
';
		if (isset($maquina->fcompra)) /* line 82 */ {
			echo '                                ';
			echo LR\Filters::escapeHtmlText($maquina->fcompra) /* line 83 */;
			echo "\n";
		}
		else /* line 84 */ {
			echo '                                Sin DATOS
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Tipo contador</h5>
                        </td>
                        <td>
';
		if ($maquina->tipocontador <= 1) /* line 94 */ {
			echo '                                Normal
';
		}
		else /* line 96 */ {
			echo '                                Triple
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Estado</h5>
                        </td>
                        <td>
';
		$ʟ_switch = ($maquina->estado) /* line 106 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [0], true)) /* line 107 */ {
			echo '                                Sin preparar
';
		}
		elseif (in_array($ʟ_switch, [1], true)) /* line 109 */ {
			echo '                                Puesta a punto
';
		}
		elseif (in_array($ʟ_switch, [2], true)) /* line 111 */ {
			echo '                                Preparada
';
		}
		elseif (in_array($ʟ_switch, [3], true)) /* line 113 */ {
			echo '                                In Situ
';
		}
		elseif (in_array($ʟ_switch, [4], true)) /* line 115 */ {
			echo '                                Out of Service
';
		}
		elseif (in_array($ʟ_switch, [5], true)) /* line 117 */ {
			echo '                                En taller
';
		}
		elseif (in_array($ʟ_switch, [6], true)) /* line 119 */ {
			echo '                                Desguace
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Origen</h5>
                        </td>
                        <td>
';
		$ʟ_switch = ($maquina->origen) /* line 129 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [0], true)) /* line 130 */ {
			echo '                                Nueva
';
		}
		elseif (in_array($ʟ_switch, [1], true)) /* line 132 */ {
			echo '                                Ocasión
';
		}
		echo '                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Fecha Inicio Servicio</h5>
                        </td>
                        <td>
';
		if (isset($maquina->finicioservicio)) /* line 144 */ {
			echo '                                ';
			echo LR\Filters::escapeHtmlText($maquina->finicioservicio) /* line 145 */;
			echo "\n";
		}
		else /* line 146 */ {
			echo '                                Sin Empezar
';
		}
		echo '                        </td>
                    </tr>

';
		if (isset($maquina->finicioservicio)) /* line 154 */ {
			echo '                        <tr>
                            <td>
                                <h5>Fecha Final del Servicio</h5>
                            </td>
                            <td>
';
			if (isset($maquina->ffinalservicio)) /* line 160 */ {
				echo '                                    ';
				echo LR\Filters::escapeHtmlText($maquina->ffinalservicio) /* line 161 */;
				echo "\n";
			}
			else /* line 162 */ {
				echo '                                    Sin terminar
';
			}
			echo '                            </td>
                        </tr>
';
		}
		if (isset($maquina->tcontrato)) /* line 168 */ {
			echo '                        <tr>
                            <td>
                                <h5>Tipo de contrato</h5>
                            </td>
                            <td>

                            </td>
                        </tr>
';
		}
		if (isset($maquina->garantia)) /* line 178 */ {
			echo '                        <tr>
                            <td>
                                <h5>Tipo de Garantia</h5>
                            </td>
                            <td>

                            </td>
                        </tr>
';
		}
		if (isset($maquina->firmwarebackup)) /* line 188 */ {
			echo '                        <tr>
                            <td>
                                <h5>Firmware Backup</h5>
                            </td>
                            <td>
                                <a href="http://webapp.mbdinformatica.es/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($maquina->firmwarebackup)) /* line 194 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($maquina->firmwarebackup) /* line 194 */;
			echo '</a>
                            </td>
                        </tr>
';
		}
		echo '                </table>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-12">
                <a class="btn btn-info" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:default", ['value'=> $maquina->id , 'mode'=>$mode])) /* line 203 */;
		echo '"><i class="bi bi-clipboard-data"></i> Copias</a>
                <a href="" class="btn btn-warning"><i class="bi bi-gear-fill"></i> Cambios de piezas</a>
                <a class="btn btn-info" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:edit", [$maquina->id])) /* line 205 */;
		echo '"><i class="bi bi-pencil-square"></i> Editar</a>
            </div>
        </div>
    </div>
';
	}

}
