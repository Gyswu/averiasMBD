<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Averias/default.latte */
final class Template7d0a6e98c6 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
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
			foreach (array_intersect_key(['averia' => '59'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '
    <div class = "container">

         <div class = "row">
             <div class="col-12 col-lg-6">

                 <div class = "row"> ';
		$this->renderBlock('title', get_defined_vars()) /* line 8 */;
		echo ' </div>
             </div>

            <div class = "col-12 col-lg-6">


                <a class = "btn btn-xs btn-success" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:add")) /* line 14 */;
		echo '"> Añadir Averia </a>

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

';
		$iterations = 0;
		foreach ($averias as $averia) /* line 59 */ {
			echo '
                            <tr>

                                <td class="id"> ';
			echo LR\Filters::escapeHtmlText($averia->id) /* line 63 */;
			echo ' </td>

                                <td> ';
			echo LR\Filters::escapeHtmlText($averia->usuario->nombre) /* line 65 */;
			echo ' </td>

                                <td> ';
			echo LR\Filters::escapeHtmlText($averia->usuario->empresa->nombre) /* line 67 */;
			echo ' </td>

                                <td class="fecha"> ';
			echo LR\Filters::escapeHtmlText($averia->fechainicio) /* line 69 */;
			echo ' </td>

                                <td class="descripcion"> ';
			echo LR\Filters::escapeHtmlText($averia->descripcion) /* line 71 */;
			echo ' </td>

                                <td class="horas"> ';
			echo LR\Filters::escapeHtmlText($averia->insitu) /* line 73 */;
			echo ' </td>

                                <td class="horas"> ';
			echo LR\Filters::escapeHtmlText($averia->horasfuera) /* line 75 */;
			echo ' </td>

                                <td class="horas"> ';
			echo LR\Filters::escapeHtmlText($averia->horasfuera) /* line 77 */;
			echo ' + ';
			echo LR\Filters::escapeHtmlText($averia->insitu) /* line 77 */;
			echo ' </td>

                                <td class="resolucion"> ';
			echo LR\Filters::escapeHtmlText($averia->resolucion) /* line 79 */;
			echo ' </td>

                                <td> <a class = "btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:edit", [$averia->id])) /* line 81 */;
			echo '"> Editar </a> </td>

                                <td>

';
			$ʟ_switch = ($averia->estado) /* line 85 */;
			if (false) {
				echo "\n";
			}
			elseif (in_array($ʟ_switch, [0], true)) /* line 87 */ {
				echo '
                                            <a class = "btn btn-xs btn-success" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:proceso", [$averia->id])) /* line 89 */;
				echo '"> Entrada </a>

';
			}
			elseif (in_array($ʟ_switch, [1], true)) /* line 91 */ {
				echo '
                                            <a class = "btn btn-xs btn-warning" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:finalizado", [$averia->id])) /* line 93 */;
				echo '"> En Proceso </a>

';
			}
			elseif (in_array($ʟ_switch, [2], true)) /* line 95 */ {
				echo '
                                            <a class = "btn btn-xs btn-danger"> Finalizado </a>

';
			}
			echo '
                                </td>

                            </tr>

';
			$iterations++;
		}
		echo '
                    </tbody>

                </table>

            </div>
        </div>

        </div>

    </div>

';
	}


	/** {block title} on line 8 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<h1> Averias </h1>';
	}

}
