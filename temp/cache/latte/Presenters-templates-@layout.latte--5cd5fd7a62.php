<?php
// source: /var/www/nette/app/Presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template5cd5fd7a62 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'sidebar' => 'blockSidebar',
		'usuario' => 'blockUsuario',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'sidebar' => 'html',
		'usuario' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title> <?php
		if (isset($this->blockQueue["title"])) {
			?> <?php
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?> AveriasMBD </title>

    <meta name = "viewport" content = "width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel = "stylesheet" href = "<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */ ?>/css/style.css">

    <?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>

</head>

<body>

<?php
		$this->renderBlock('sidebar', get_defined_vars());
?>

<?php
		$this->renderBlock('usuario', get_defined_vars());
?>
<div class=container>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>    <div<?php if ($_tmp = array_filter(['alert', 'alert-' . $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 87 */ ?></div>
<?php
			$iterations++;
		}
?>

<?php
		$this->renderBlock('content', $this->params, 'html');
?>
</div>

<?php
		$this->renderBlock('scripts', get_defined_vars());
?>



</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['datos'])) trigger_error('Variable $datos overwritten in foreach on line 56');
			if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 87');
		}
		$this->createTemplate('components/form.latte', $this->params, "import")->render();
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		?> <?php
	}


	function blockSidebar($_args)
	{
		?> <?php
	}


	function blockUsuario($_args)
	{
		extract($_args);
?>

    <nav class = "navbar navbar-expand-lg navbar-light bg-light">

        <a class = "navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>"> Home </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                data-bs-target=".dual-collapse2"

                aria-controls="navbarSupportedContent" aria-expanded="false"

                aria-label="Toggle navigation">

            <span class = "navbar-toggler-icon"> </span>

        </button>

        <div class="collapse navbar-collapse w-100 order-0 dual-collapse2" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

<?php
		$iterations = 0;
		foreach ($menu as $datos) {
?>

<?php
			if ($datos['mostrar']) {
?>

                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($datos['nhref'])) ?>"><?php
				echo LR\Filters::escapeHtmlText($datos['nombre']) /* line 62 */ ?><span
                                        class="sr-only">(current)</span></a>
                        </li>

<?php
			}
?>

<?php
			$iterations++;
		}
?>

            </ul>

        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
<?php
		if ($usuarioDb) {
			?>                        <a class="nav-link " href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) ?>"><?php
			echo LR\Filters::escapeHtmlText($usuarioDb->nombre) /* line 77 */ ?> (salir)</a>
<?php
		}
		else {
?>
                        Invitado
<?php
		}
?>
                </li>
            </ul>
        </div>
    </nav>
<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>


    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 103 */ ?>/js/nette.ajax.js"></script>

    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 105 */ ?>/js/main.js"></script>



    <script>
        $(document).ready(function () {
            $(".del").click(function () {
                confirm('¿Seguro que lo quieres borrar?')
            });

            $(".alert").fadeTo(2000, 500).slideUp(500, function () {
                $(".alert").slideUp(500);
            });
        });

        $(function () {
            $('[data-toggle="popover"]').popover()
        })


    </script>
<?php
	}

}
