<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/info.latte

use Latte\Runtime as LR;

class Templatec97fde30d8 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="cotnainer">
        <div class="row">
            <div class="col col-lg-12">
                <h1 class="text-center">
                    Información de la maquina nº #000<?php echo LR\Filters::escapeHtmlText($maquina->id) /* line 6 */ ?>

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
                            <?php echo LR\Filters::escapeHtmlText($maquina->id) /* line 18 */ ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Modelo</h5>
                        </td>
                        <td>
                            <?php echo LR\Filters::escapeHtmlText($maquina->modelo) /* line 26 */ ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>IP</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->ip)) {
			?>                                <?php echo LR\Filters::escapeHtmlText($maquina->ip) /* line 35 */ ?>

<?php
		}
		else {
?>
                                Sin IP
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Firmaware</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->vfirmware)) {
			?>                                <?php echo LR\Filters::escapeHtmlText($maquina->vfirmware) /* line 47 */ ?>

<?php
		}
		else {
?>
                                Sin DATOS
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Cliente</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->empresa)) {
			?>                                <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$maquina->empresa->id])) ?>"><?php
			echo LR\Filters::escapeHtmlText($maquina->empresa->nombre) /* line 59 */ ?></a>
<?php
		}
		else {
?>
                                Taller
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Proveedor</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->proveedor)) {
			?>                                <a href=""><?php echo LR\Filters::escapeHtmlText($maquina->proveedor->nombre) /* line 71 */ ?></a>
<?php
		}
		else {
?>
                                Sin DATOS
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Fecha de Compra</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->fcompra)) {
			?>                                <?php echo LR\Filters::escapeHtmlText($maquina->fcompra) /* line 83 */ ?>

<?php
		}
		else {
?>
                                Sin DATOS
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Tipo contador</h5>
                        </td>
                        <td>
<?php
		if ($maquina->tipocontador <= 1) {
?>
                                Normal
<?php
		}
		else {
?>
                                Triple
<?php
		}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Estado</h5>
                        </td>
                        <td>
<?php
		$this->global->switch[] = ($maquina->estado);
		if (false) {
		}
		elseif (end($this->global->switch) === (0)) {
?>
                                Sin preparar
<?php
		}
		elseif (end($this->global->switch) === (1)) {
?>
                                Puesta a punto
<?php
		}
		elseif (end($this->global->switch) === (2)) {
?>
                                Preparada
<?php
		}
		elseif (end($this->global->switch) === (3)) {
?>
                                In Situ
<?php
		}
		elseif (end($this->global->switch) === (4)) {
?>
                                Out of Service
<?php
		}
		elseif (end($this->global->switch) === (5)) {
?>
                                En taller
<?php
		}
		elseif (end($this->global->switch) === (6)) {
?>
                                Desguace
<?php
		}
		array_pop($this->global->switch) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Origen</h5>
                        </td>
                        <td>
<?php
		$this->global->switch[] = ($maquina->origen);
		if (false) {
		}
		elseif (end($this->global->switch) === (0)) {
?>
                                Nueva
<?php
		}
		elseif (end($this->global->switch) === (1)) {
?>
                                Ocasión
<?php
		}
		else {
?>
                                Sin determinar
<?php
		}
		array_pop($this->global->switch) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Fecha Inicio Servicio</h5>
                        </td>
                        <td>
<?php
		if (isset($maquina->finicioservicio)) {
			?>                                <?php echo LR\Filters::escapeHtmlText($maquina->finicioservicio) /* line 145 */ ?>

<?php
		}
		else {
?>
                                Sin Empezar
<?php
		}
?>
                        </td>
                    </tr>

<?php
		if (isset($maquina->finicioservicio)) {
?>
                        <tr>
                            <td>
                                <h5>Fecha Final del Servicio</h5>
                            </td>
                            <td>
<?php
			if (isset($maquina->ffinalservicio)) {
				?>                                    <?php echo LR\Filters::escapeHtmlText($maquina->ffinalservicio) /* line 161 */ ?>

<?php
			}
			else {
?>
                                    Sin terminar
<?php
			}
?>
                            </td>
                        </tr>
<?php
		}
		if (isset($maquina->tcontrato)) {
?>
                        <tr>
                            <td>
                                <h5>Tipo de contrato</h5>
                            </td>
                            <td>

                            </td>
                        </tr>
<?php
		}
		if (isset($maquina->garantia)) {
?>
                        <tr>
                            <td>
                                <h5>Tipo de Garantia</h5>
                            </td>
                            <td>

                            </td>
                        </tr>
<?php
		}
		if (isset($maquina->firmwarebackup)) {
?>
                        <tr>
                            <td>
                                <h5>Firmware Backup</h5>
                            </td>
                            <td>
                                <a href="http://webapp.mbdinformatica.es/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($maquina->firmwarebackup)) /* line 194 */ ?>"><?php
			echo LR\Filters::escapeHtmlText($maquina->firmwarebackup) /* line 194 */ ?></a>
                            </td>
                        </tr>
<?php
		}
?>
                </table>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-12">
                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Copias:default", ['value'=> $maquina->id , 'mode'=>$mode])) ?>"><i class="bi bi-clipboard-data"></i> Copias</a>
                <a href="" class="btn btn-warning"><i class="bi bi-gear-fill"></i> Cambios de piezas</a>
                <a class="btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:edit", [$maquina->id])) ?>"><i class="bi bi-pencil-square"></i> Editar</a>
            </div>
        </div>
    </div>
<?php
	}

}
