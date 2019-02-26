<?php declare(strict_types = 1);

namespace Thunbolt\Flashes\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\Flashes\Flashes;
use Thunbolt\Flashes\IFlashes;

class FlashesExtension extends CompilerExtension {

	public function loadConfiguration(): void {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('flashes'))
			->setClass(IFlashes::class)
			->setFactory(Flashes::class);
	}

}
