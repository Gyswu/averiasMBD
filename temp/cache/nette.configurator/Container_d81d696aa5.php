<?php
// source: /var/www/nette/app/config/common.neon
// source: /var/www/nette/app/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_d81d696aa5 extends Nette\DI\Container
{
	protected $tags = [
		'nette.inject' => [
			'application.1' => true,
			'application.10' => true,
			'application.11' => true,
			'application.12' => true,
			'application.13' => true,
			'application.14' => true,
			'application.15' => true,
			'application.16' => true,
			'application.17' => true,
			'application.18' => true,
			'application.19' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
			'application.7' => true,
			'application.8' => true,
			'application.9' => true,
		],
	];

	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nextras\Dbal\IConnection' => [['dbal.connection']],
		'Nextras\Dbal\Connection' => [['dbal.connection']],
		'Nextras\Orm\Mapper\Mapper' => [
			[
				'orm.mappers.usuarios',
				'orm.mappers.averias',
				'orm.mappers.empresa',
				'orm.mappers.copias',
				'orm.mappers.maquinas',
				'orm.mappers.cambios',
				'orm.mappers.proveedor',
			],
		],
		'Nextras\Orm\Mapper\Dbal\DbalMapper' => [
			[
				'orm.mappers.usuarios',
				'orm.mappers.averias',
				'orm.mappers.empresa',
				'orm.mappers.copias',
				'orm.mappers.maquinas',
				'orm.mappers.cambios',
				'orm.mappers.proveedor',
			],
		],
		'Nextras\Orm\Mapper\BaseMapper' => [
			[
				'orm.mappers.usuarios',
				'orm.mappers.averias',
				'orm.mappers.empresa',
				'orm.mappers.copias',
				'orm.mappers.maquinas',
				'orm.mappers.cambios',
				'orm.mappers.proveedor',
			],
		],
		'Nextras\Orm\Mapper\IMapper' => [
			[
				'orm.mappers.usuarios',
				'orm.mappers.averias',
				'orm.mappers.empresa',
				'orm.mappers.copias',
				'orm.mappers.maquinas',
				'orm.mappers.cambios',
				'orm.mappers.proveedor',
			],
		],
		'App\Model\Orm\UsuariosMapper' => [['orm.mappers.usuarios']],
		'Nextras\Orm\Repository\Repository' => [
			[
				'orm.repositories.usuarios',
				'orm.repositories.averias',
				'orm.repositories.empresa',
				'orm.repositories.copias',
				'orm.repositories.maquinas',
				'orm.repositories.cambios',
				'orm.repositories.proveedor',
			],
		],
		'Nextras\Orm\Repository\IRepository' => [
			[
				'orm.repositories.usuarios',
				'orm.repositories.averias',
				'orm.repositories.empresa',
				'orm.repositories.copias',
				'orm.repositories.maquinas',
				'orm.repositories.cambios',
				'orm.repositories.proveedor',
			],
		],
		'App\Model\Orm\UsuariosRepository' => [['orm.repositories.usuarios']],
		'App\Model\Orm\AveriasMapper' => [['orm.mappers.averias']],
		'App\Model\Orm\AveriasRepository' => [['orm.repositories.averias']],
		'App\Model\Orm\EmpresaMapper' => [['orm.mappers.empresa']],
		'App\Model\Orm\EmpresaRepository' => [['orm.repositories.empresa']],
		'App\Model\Orm\CopiasMapper' => [['orm.mappers.copias']],
		'App\Model\Orm\CopiasRepository' => [['orm.repositories.copias']],
		'App\Model\Orm\MaquinasMapper' => [['orm.mappers.maquinas']],
		'App\Model\Orm\MaquinasRepository' => [['orm.repositories.maquinas']],
		'App\Model\Orm\CambiosMapper' => [['orm.mappers.cambios']],
		'App\Model\Orm\CambiosRepository' => [['orm.repositories.cambios']],
		'App\Model\Orm\ProveedorMapper' => [['orm.mappers.proveedor']],
		'App\Model\Orm\ProveedorRepository' => [['orm.repositories.proveedor']],
		'Nextras\Orm\Model\IRepositoryLoader' => [['orm.repositoryLoader']],
		'Nextras\Orm\Bridges\NetteDI\RepositoryLoader' => [['orm.repositoryLoader']],
		'Nette\Caching\Cache' => [2 => ['orm.cache']],
		'Nextras\Orm\Repository\IDependencyProvider' => [['orm.dependencyProvider']],
		'Nextras\Orm\Bridges\NetteDI\DependencyProvider' => [['orm.dependencyProvider']],
		'Nextras\Orm\Mapper\Dbal\DbalMapperCoordinator' => [['orm.mapperCoordinator']],
		'Nextras\Orm\Entity\Reflection\IMetadataParserFactory' => [['orm.metadataParserFactory']],
		'Nextras\Orm\Entity\Reflection\MetadataParserFactory' => [['orm.metadataParserFactory']],
		'Nextras\Orm\Model\MetadataStorage' => [['orm.metadataStorage']],
		'Nextras\Orm\Model\Model' => [['orm.model']],
		'Nextras\Orm\Model\IModel' => [['orm.model']],
		'App\Model\Orm\Orm' => [['orm.model']],
		'Nette\Security\IAuthenticator' => [['01']],
		'App\Model\Authentication' => [['01']],
		'App\Forms\FormFactory' => [['02']],
		'App\Forms\SignInFormFactory' => [['03']],
		'App\Forms\SignUpFormFactory' => [['04']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'ArrayAccess' => [
			2 => [
				'router',
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'App\Presenters\BasePresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
				'application.18',
				'application.19',
			],
		],
		'App\Presenters\UsuariosPresenter' => [2 => ['application.1']],
		'App\Presenters\SignPresenter' => [2 => ['application.2']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.3']],
		'App\Presenters\EmpresasPresenter' => [2 => ['application.4']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.5']],
		'App\Presenters\HomepagePresenter' => [2 => ['application.6']],
		'App\Presenters\AveriasPresenter' => [2 => ['application.7']],
		'App\AdminModule\Presenters\BaseAdminPresenter' => [
			2 => [
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
				'application.16',
				'application.17',
			],
		],
		'App\AdminModule\Presenters\UsuariosPresenter' => [2 => ['application.8']],
		'App\AdminModule\Presenters\SupportPresenter' => [2 => ['application.9']],
		'App\AdminModule\Presenters\MaquinasPresenter' => [2 => ['application.10']],
		'App\AdminModule\Presenters\CopiasPresenter' => [2 => ['application.11']],
		'App\AdminModule\Presenters\EmpresasPresenter' => [2 => ['application.12']],
		'App\AdminModule\Presenters\HomepagePresenter' => [2 => ['application.14']],
		'App\AdminModule\Presenters\AveriasPresenter' => [2 => ['application.15']],
		'App\AdminModule\Presenters\ProveedoresPresenter' => [2 => ['application.16']],
		'App\AdminModule\Presenters\PiezasPresenter' => [2 => ['application.17']],
		'NetteModule\ErrorPresenter' => [2 => ['application.18']],
		'NetteModule\MicroPresenter' => [2 => ['application.19']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'appDir' => '/var/www/nette/app',
			'wwwDir' => '/var/www/nette/www',
			'vendorDir' => '/var/www/nette/vendor',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => '/var/www/nette/app/../temp',
		];
	}


	public function createService01(): App\Model\Authentication
	{
		return new App\Model\Authentication($this->getService('orm.model'), $this->getService('security.passwords'));
	}


	public function createService02(): App\Forms\FormFactory
	{
		return new App\Forms\FormFactory;
	}


	public function createService03(): App\Forms\SignInFormFactory
	{
		return new App\Forms\SignInFormFactory(
			$this->getService('02'),
			$this->getService('security.user'),
			$this->getService('orm.model')
		);
	}


	public function createService04(): App\Forms\SignUpFormFactory
	{
		return new App\Forms\SignUpFormFactory($this->getService('02'), $this->getService('01'));
	}


	public function createServiceApplication__1(): App\Presenters\UsuariosPresenter
	{
		$service = new App\Presenters\UsuariosPresenter($this->getService('security.passwords'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): App\AdminModule\Presenters\MaquinasPresenter
	{
		$service = new App\AdminModule\Presenters\MaquinasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): App\AdminModule\Presenters\CopiasPresenter
	{
		$service = new App\AdminModule\Presenters\CopiasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__12(): App\AdminModule\Presenters\EmpresasPresenter
	{
		$service = new App\AdminModule\Presenters\EmpresasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__13(): App\AdminModule\Presenters\BaseAdminPresenter
	{
		$service = new App\AdminModule\Presenters\BaseAdminPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__14(): App\AdminModule\Presenters\HomepagePresenter
	{
		$service = new App\AdminModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__15(): App\AdminModule\Presenters\AveriasPresenter
	{
		$service = new App\AdminModule\Presenters\AveriasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__16(): App\AdminModule\Presenters\ProveedoresPresenter
	{
		$service = new App\AdminModule\Presenters\ProveedoresPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__17(): App\AdminModule\Presenters\PiezasPresenter
	{
		$service = new App\AdminModule\Presenters\PiezasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__18(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__19(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__2(): App\Presenters\SignPresenter
	{
		$service = new App\Presenters\SignPresenter($this->getService('03'), $this->getService('04'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__4(): App\Presenters\EmpresasPresenter
	{
		$service = new App\Presenters\EmpresasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\Presenters\AveriasPresenter
	{
		$service = new App\Presenters\AveriasPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): App\AdminModule\Presenters\UsuariosPresenter
	{
		$service = new App\AdminModule\Presenters\UsuariosPresenter($this->getService('security.passwords'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): App\AdminModule\Presenters\SupportPresenter
	{
		$service = new App\AdminModule\Presenters\SupportPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->orm = $this->getService('orm.model');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/var/www/nette/app/../temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/nette/app/../temp/cache');
	}


	public function createServiceContainer(): Container_d81d696aa5
	{
		return $this;
	}


	public function createServiceDbal__connection(): Nextras\Dbal\Connection
	{
		$service = new Nextras\Dbal\Connection([
			'driver' => 'mysqli',
			'host' => '127.0.0.1',
			'database' => 'mbdwepapp',
			'username' => 'averias',
			'password' => 'Pidaras987-',
		]);
		$this->getService('tracy.blueScreen')->addPanel('Nextras\Dbal\Bridges\NetteTracy\BluescreenQueryPanel::renderBluescreenPanel');
		Nextras\Dbal\Bridges\NetteTracy\ConnectionPanel::install($service);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(['127.0.0.1']);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_d81d696aa5 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/nette/app/../temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceOrm__cache(): Nette\Caching\Cache
	{
		return new Nette\Caching\Cache($this->getService('cache.storage'), 'orm');
	}


	public function createServiceOrm__dependencyProvider(): Nextras\Orm\Bridges\NetteDI\DependencyProvider
	{
		return new Nextras\Orm\Bridges\NetteDI\DependencyProvider($this);
	}


	public function createServiceOrm__mapperCoordinator(): Nextras\Orm\Mapper\Dbal\DbalMapperCoordinator
	{
		return new Nextras\Orm\Mapper\Dbal\DbalMapperCoordinator($this->getService('dbal.connection'));
	}


	public function createServiceOrm__mappers__averias(): App\Model\Orm\AveriasMapper
	{
		return new App\Model\Orm\AveriasMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__cambios(): App\Model\Orm\CambiosMapper
	{
		return new App\Model\Orm\CambiosMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__copias(): App\Model\Orm\CopiasMapper
	{
		return new App\Model\Orm\CopiasMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__empresa(): App\Model\Orm\EmpresaMapper
	{
		return new App\Model\Orm\EmpresaMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__maquinas(): App\Model\Orm\MaquinasMapper
	{
		return new App\Model\Orm\MaquinasMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__proveedor(): App\Model\Orm\ProveedorMapper
	{
		return new App\Model\Orm\ProveedorMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__mappers__usuarios(): App\Model\Orm\UsuariosMapper
	{
		return new App\Model\Orm\UsuariosMapper(
			$this->getService('dbal.connection'),
			$this->getService('orm.mapperCoordinator'),
			$this->getService('orm.cache')
		);
	}


	public function createServiceOrm__metadataParserFactory(): Nextras\Orm\Entity\Reflection\MetadataParserFactory
	{
		return new Nextras\Orm\Entity\Reflection\MetadataParserFactory;
	}


	public function createServiceOrm__metadataStorage(): Nextras\Orm\Model\MetadataStorage
	{
		return new Nextras\Orm\Model\MetadataStorage(
			[
				'App\Model\Orm\Usuario' => 'App\Model\Orm\UsuariosRepository',
				'App\Model\Orm\Averias' => 'App\Model\Orm\AveriasRepository',
				'App\Model\Orm\Empresa' => 'App\Model\Orm\EmpresaRepository',
				'App\Model\Orm\Copias' => 'App\Model\Orm\CopiasRepository',
				'App\Model\Orm\Maquinas' => 'App\Model\Orm\MaquinasRepository',
				'App\Model\Orm\Cambios' => 'App\Model\Orm\CambiosRepository',
				'App\Model\Orm\Proveedor' => 'App\Model\Orm\ProveedorRepository',
			],
			$this->getService('orm.cache'),
			$this->getService('orm.metadataParserFactory'),
			$this->getService('orm.repositoryLoader')
		);
	}


	public function createServiceOrm__model(): App\Model\Orm\Orm
	{
		return new App\Model\Orm\Orm(
			[
				[
					'App\Model\Orm\UsuariosRepository' => true,
					'App\Model\Orm\AveriasRepository' => true,
					'App\Model\Orm\EmpresaRepository' => true,
					'App\Model\Orm\CopiasRepository' => true,
					'App\Model\Orm\MaquinasRepository' => true,
					'App\Model\Orm\CambiosRepository' => true,
					'App\Model\Orm\ProveedorRepository' => true,
				],
				[
					'usuarios' => 'App\Model\Orm\UsuariosRepository',
					'averias' => 'App\Model\Orm\AveriasRepository',
					'empresa' => 'App\Model\Orm\EmpresaRepository',
					'copias' => 'App\Model\Orm\CopiasRepository',
					'maquinas' => 'App\Model\Orm\MaquinasRepository',
					'cambios' => 'App\Model\Orm\CambiosRepository',
					'proveedor' => 'App\Model\Orm\ProveedorRepository',
				],
				[
					'App\Model\Orm\Usuario' => 'App\Model\Orm\UsuariosRepository',
					'App\Model\Orm\Averias' => 'App\Model\Orm\AveriasRepository',
					'App\Model\Orm\Empresa' => 'App\Model\Orm\EmpresaRepository',
					'App\Model\Orm\Copias' => 'App\Model\Orm\CopiasRepository',
					'App\Model\Orm\Maquinas' => 'App\Model\Orm\MaquinasRepository',
					'App\Model\Orm\Cambios' => 'App\Model\Orm\CambiosRepository',
					'App\Model\Orm\Proveedor' => 'App\Model\Orm\ProveedorRepository',
				],
			],
			$this->getService('orm.repositoryLoader'),
			$this->getService('orm.metadataStorage')
		);
	}


	public function createServiceOrm__repositories__averias(): App\Model\Orm\AveriasRepository
	{
		$service = new App\Model\Orm\AveriasRepository(
			$this->getService('orm.mappers.averias'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__cambios(): App\Model\Orm\CambiosRepository
	{
		$service = new App\Model\Orm\CambiosRepository(
			$this->getService('orm.mappers.cambios'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__copias(): App\Model\Orm\CopiasRepository
	{
		$service = new App\Model\Orm\CopiasRepository($this->getService('orm.mappers.copias'), $this->getService('orm.dependencyProvider'));
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__empresa(): App\Model\Orm\EmpresaRepository
	{
		$service = new App\Model\Orm\EmpresaRepository(
			$this->getService('orm.mappers.empresa'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__maquinas(): App\Model\Orm\MaquinasRepository
	{
		$service = new App\Model\Orm\MaquinasRepository(
			$this->getService('orm.mappers.maquinas'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__proveedor(): App\Model\Orm\ProveedorRepository
	{
		$service = new App\Model\Orm\ProveedorRepository(
			$this->getService('orm.mappers.proveedor'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositories__usuarios(): App\Model\Orm\UsuariosRepository
	{
		$service = new App\Model\Orm\UsuariosRepository(
			$this->getService('orm.mappers.usuarios'),
			$this->getService('orm.dependencyProvider')
		);
		$service->setModel($this->getService('orm.model'));
		return $service;
	}


	public function createServiceOrm__repositoryLoader(): Nextras\Orm\Bridges\NetteDI\RepositoryLoader
	{
		return new Nextras\Orm\Bridges\NetteDI\RepositoryLoader(
			$this,
			[
				'App\Model\Orm\UsuariosRepository' => 'orm.repositories.usuarios',
				'App\Model\Orm\AveriasRepository' => 'orm.repositories.averias',
				'App\Model\Orm\EmpresaRepository' => 'orm.repositories.empresa',
				'App\Model\Orm\CopiasRepository' => 'orm.repositories.copias',
				'App\Model\Orm\MaquinasRepository' => 'orm.repositories.maquinas',
				'App\Model\Orm\CambiosRepository' => 'orm.repositories.cambios',
				'App\Model\Orm\ProveedorRepository' => 'orm.repositories.proveedor',
			]
		);
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('01'),
			null,
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['readAndClose' => null, 'cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
		RadekDostal\NetteComponents\DateTimePicker\TbDatePicker::register('j. n. Y');
	}
}
