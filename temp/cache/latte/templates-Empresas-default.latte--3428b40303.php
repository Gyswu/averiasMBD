<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Empresas/default.latte */
final class Template3428b40303 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['empresa' => '53, 118'], $this->params) as $ʟ_v => $ʟ_l) {
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

    <div class = "row">
        <div class="col-12 col-lg-6">
';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '        </div>

        <div class = "col-12 col-lg-6">

            <a class = "btn btn-xs btn-success mb-1" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:add")) /* line 14 */;
		echo '"> Añadir Cliente </a>
';
		/* line 15 */ $_tmp = $this->global->uiControl->getComponent("addSearchClientForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '
    </div>
    </div>
    <br>

    <div class = "row">

        <div class = "col-12 col-lg-12">

            <table class="table">

                <thead class="thead-dark">

                    <tr>

                        <th class="id"> ID </th>

                        <th class="nif"> Nif </th>

                        <th> Nombre </th>

                        <th> Telefono </th>

                        <th> Direccion </th>

                        <th> Contacto </th>

                        <th> Opciones </th>

                    </tr>

                </thead>

                <tbody>
';
		$ʟ_switch = ($mode) /* line 50 */;
		if (false) {
		}
		elseif (in_array($ʟ_switch, [0], true)) /* line 51 */ {
			echo "\n";
			$iterations = 0;
			foreach ($empresas as $empresa) /* line 53 */ {
				echo '
                        <tr>

                            <td class="id"> ';
				echo LR\Filters::escapeHtmlText($empresa->id) /* line 57 */;
				echo ' </td>

                            <td class="nif"> ';
				echo LR\Filters::escapeHtmlText($empresa->nif) /* line 59 */;
				echo ' </td>

                            <td> ';
				echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 61 */;
				echo ' </td>

                            <td> ';
				echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 63 */;
				echo ' </td>

                            <td> ';
				echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 65 */;
				echo ' </td>

                            <td> ';
				echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 67 */;
				echo ' </td>

                            <td>

                                <a class = "btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 71 */;
				echo '"> Usuarios </a>
                                <a class = "btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresa->id , 'mode'=> 8 ])) /* line 72 */;
				echo '"> Maquinas </a>
';
				if ($rol == 'admin') /* line 73 */ {
					echo '                                <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 74 */;
					echo '"> Editar </a>
';
				}
				elseif ($rol == 'encargado') /* line 75 */ {
					echo '                                <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 76 */;
					echo '"> Editar </a>
';
				}
				if ($rol == 'admin') /* line 78 */ {
					echo '                                <a class="btn btn-xs btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 79 */;
					echo '"> Borrar </a>
';
				}
				echo '                            </td>

                        </tr>

';
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [1], true)) /* line 86 */ {
			echo '    <tr>

        <td class="id"> ';
			echo LR\Filters::escapeHtmlText($empresax->id) /* line 89 */;
			echo ' </td>

        <td class="nif"> ';
			echo LR\Filters::escapeHtmlText($empresax->nif) /* line 91 */;
			echo ' </td>

        <td> ';
			echo LR\Filters::escapeHtmlText($empresax->nombre) /* line 93 */;
			echo ' </td>

        <td> ';
			echo LR\Filters::escapeHtmlText($empresax->telefono) /* line 95 */;
			echo ' </td>

        <td> ';
			echo LR\Filters::escapeHtmlText($empresax->direccion) /* line 97 */;
			echo ' </td>

        <td> ';
			echo LR\Filters::escapeHtmlText($empresax->contacto) /* line 99 */;
			echo ' </td>

        <td>

            <a class = "btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresax->id])) /* line 103 */;
			echo '"> Usuarios </a>
            <a class = "btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresax->id , 'mode'=> 8 ])) /* line 104 */;
			echo '"> Maquinas </a>
';
			if ($rol == 'admin') /* line 105 */ {
				echo '                <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresax->id])) /* line 106 */;
				echo '"> Editar </a>
';
			}
			elseif ($rol == 'encargado') /* line 107 */ {
				echo '                <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresax->id])) /* line 108 */;
				echo '"> Editar </a>
';
			}
			if ($rol == 'admin') /* line 110 */ {
				echo '                <a class="btn btn-xs btn-danger" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresax->id])) /* line 111 */;
				echo '"> Borrar </a>
';
			}
			echo '        </td>

    </tr>
';
		}
		elseif (in_array($ʟ_switch, [2], true)) /* line 116 */ {
			echo "\n";
			$iterations = 0;
			foreach ($empresat as $empresa) /* line 118 */ {
				echo '
            <tr>

                <td class="id"> ';
				echo LR\Filters::escapeHtmlText($empresa->id) /* line 122 */;
				echo ' </td>

                <td class="nif"> ';
				echo LR\Filters::escapeHtmlText($empresa->nif) /* line 124 */;
				echo ' </td>

                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 126 */;
				echo ' </td>

                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 128 */;
				echo ' </td>

                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 130 */;
				echo ' </td>

                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 132 */;
				echo ' </td>

                <td>

                    <a class = "btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 136 */;
				echo '"> Usuarios </a>
                    <a class = "btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresa->id , 'mode'=> 8 ])) /* line 137 */;
				echo '"> Maquinas </a>
';
				if ($rol == 'admin') /* line 138 */ {
					echo '                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 139 */;
					echo '"> Editar </a>
';
				}
				elseif ($rol == 'encargado') /* line 140 */ {
					echo '                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 141 */;
					echo '"> Editar </a>
';
				}
				if ($rol == 'admin') /* line 143 */ {
					echo '                        <a class="btn btn-xs btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 144 */;
					echo '"> Borrar </a>
';
				}
				echo '                </td>

            </tr>

';
				$iterations++;
			}
		}
		echo '
            </tbody>

        </table>

    </div>

 </div>

</div>

';
	}


	/** {block title} on line 9 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '            <h1> Clientes </h1>
';
	}

}
