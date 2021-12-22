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
			foreach (array_intersect_key(['empresa' => '53, 128'], $this->params) as $ʟ_v => $ʟ_l) {
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
    <div class="container">

        <br>

        <div class="row">
            <div class="col-12 col-lg-6">
';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '            </div>

            <div class="col-12 col-lg-6">

                <a class="btn btn-xs btn-success mb-1" href="';
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

        <div class="row">

            <div class="col-12 col-lg-12">

                <table class="table">

                    <thead class="thead-dark">

                    <tr>

                        <th class="id"> ID</th>

                        <th class="nif"> Nif</th>

                        <th> Nombre</th>

                        <th> Telefono</th>

                        <th> Direccion</th>

                        <th> Contacto</th>

                        <th> Opciones</th>

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

                                <td><a class="nounderline" href="tel:';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($empresa->telefono)) /* line 63 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 63 */;
				echo '</a></td>

                                <td> <a class="nounderline" href="https://www.google.com/maps/search/?api=1&query=';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(str_replace(" ", "+", $empresa->direccion))) /* line 65 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 65 */;
				echo '</a> </td>

                                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 67 */;
				echo ' </td>

                                <td>

                                    <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 71 */;
				echo '">
                                        Usuarios </a>
                                    <a
                                            class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresa->id , 'mode'=> 8 ])) /* line 73 */;
				echo '"> Maquinas </a>
';
				if ($rol == 'admin') /* line 75 */ {
					echo '                                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 76 */;
					echo '">
                                            Editar </a>
';
				}
				elseif ($rol == 'encargado') /* line 78 */ {
					echo '                                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 79 */;
					echo '">
                                            Editar </a>
';
				}
				if ($rol == 'admin') /* line 82 */ {
					echo '                                        <a class="btn btn-xs btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 83 */;
					echo '">
                                            Borrar </a>
';
				}
				echo '                                </td>

                            </tr>

';
				$iterations++;
			}
		}
		elseif (in_array($ʟ_switch, [1], true)) /* line 91 */ {
			echo '                        <tr>

                            <td class="id"> ';
			echo LR\Filters::escapeHtmlText($empresax->id) /* line 94 */;
			echo ' </td>

                            <td class="nif"> ';
			echo LR\Filters::escapeHtmlText($empresax->nif) /* line 96 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresax->nombre) /* line 98 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresax->telefono) /* line 100 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresax->direccion) /* line 102 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresax->contacto) /* line 104 */;
			echo ' </td>

                            <td>

                                <a class="btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresax->id])) /* line 108 */;
			echo '">
                                    Usuarios </a>
                                <a
                                        class="btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresax->id , 'mode'=> 8 ])) /* line 110 */;
			echo '"> Maquinas </a>
';
			if ($rol == 'admin') /* line 112 */ {
				echo '                                    <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresax->id])) /* line 113 */;
				echo '">
                                        Editar </a>
';
			}
			elseif ($rol == 'encargado') /* line 115 */ {
				echo '                                    <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresax->id])) /* line 116 */;
				echo '">
                                        Editar </a>
';
			}
			if ($rol == 'admin') /* line 119 */ {
				echo '                                    <a class="btn btn-xs btn-danger" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresax->id])) /* line 120 */;
				echo '">
                                        Borrar </a>
';
			}
			echo '                            </td>

                        </tr>
';
		}
		elseif (in_array($ʟ_switch, [2], true)) /* line 126 */ {
			echo "\n";
			$iterations = 0;
			foreach ($empresat as $empresa) /* line 128 */ {
				echo '
                            <tr>

                                <td class="id"> ';
				echo LR\Filters::escapeHtmlText($empresa->id) /* line 132 */;
				echo ' </td>

                                <td class="nif"> ';
				echo LR\Filters::escapeHtmlText($empresa->nif) /* line 134 */;
				echo ' </td>

                                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 136 */;
				echo ' </td>

                                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 138 */;
				echo ' </td>

                                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 140 */;
				echo ' </td>

                                <td> ';
				echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 142 */;
				echo ' </td>

                                <td>

                                    <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 146 */;
				echo '">
                                        Usuarios </a>
                                    <a
                                            class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $empresa->id , 'mode'=> 8 ])) /* line 148 */;
				echo '"> Maquinas </a>
';
				if ($rol == 'admin') /* line 150 */ {
					echo '                                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 151 */;
					echo '">
                                            Editar </a>
';
				}
				elseif ($rol == 'encargado') /* line 153 */ {
					echo '                                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 154 */;
					echo '">
                                            Editar </a>
';
				}
				if ($rol == 'admin') /* line 157 */ {
					echo '                                        <a class="btn btn-xs btn-danger" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 158 */;
					echo '">
                                            Borrar </a>
';
				}
				echo '                                </td>

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
		echo '                <h1> Clientes </h1>
';
	}

}
