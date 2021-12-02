<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/Presenters/templates/Averias/default.latte */
final class Template1f4da7c1f3 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['averia' => '50'], $this->params) as $ʟ_v => $ʟ_l) {
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

         <br>

        <div class = "row"> ';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo ' </div>

         <br>

        <div class = "row">

            <div class = "col col-lg-12"> <a class = "btn btn-xs btn-success" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:add")) /* line 13 */;
		echo '"> Añadir averia </a> </div>

            <br>

            <br>

        </div>

        <br>

        <div class = "row">

            <div class = "col col-lg-12">

                <table class = "table">

                    <thead class = "thead-dark">
                    
                        <tr>

                            <th> ID </th>

                            <th> Fecha </th>
                        
                            <th> Descripcion </th>

                            <th> Estado </th>

                            <th> Opciones </th>

                    
                        </tr>
                    
                    </thead>
                    
                    <tbody>

';
		$iterations = 0;
		foreach ($averias as $averia) /* line 50 */ {
			echo '
                            <tr>

                                <td> ';
			echo LR\Filters::escapeHtmlText($averia->id) /* line 54 */;
			echo ' </td>

                                <td> ';
			echo LR\Filters::escapeHtmlText($averia->fechainicio) /* line 56 */;
			echo ' </td>

                                <td> ';
			echo LR\Filters::escapeHtmlText($averia->descripcion) /* line 58 */;
			echo ' </td>

                                <td>

';
			$ʟ_switch = ($averia->estado) /* line 62 */;
			if (false) {
				echo "\n";
			}
			elseif (in_array($ʟ_switch, [0], true)) /* line 64 */ {
				echo '
                                            <a class = "btn btn-xs btn-success" style = "color : white"> Entrada </a>

';
			}
			elseif (in_array($ʟ_switch, [1], true)) /* line 68 */ {
				echo '
                                            <a class = "btn btn-xs btn-warning"> En Proceso </a>

';
			}
			elseif (in_array($ʟ_switch, [2], true)) /* line 72 */ {
				echo '
                                            <a class = "btn btn-xs btn-danger" style = "color : white"> Finalizado </a>

';
			}
			echo '
                                </td>

                                <td>

                                    <a class = "btn btn-xs btn-primary " href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Averias:edit", [$averia->id])) /* line 82 */;
			echo '"> Editar </a>

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

';
	}


	/** {block title} on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<h1> Averias </h1>';
	}

}
