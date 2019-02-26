<?php declare(strict_types = 1);

namespace Thunbolt\Flashes;

use Nette\Application\Application;
use stdClass;

class Flashes implements IFlashes {

	/** @var Application */
	private $application;

	public function __construct(Application $application) {
		$this->application = $application;
	}

	public function flashMessage(string $message, string $type = 'success'): stdClass {
		return $this->application->getPresenter()->flashMessage($message, $type);
	}

}
