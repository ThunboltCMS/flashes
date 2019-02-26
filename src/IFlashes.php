<?php declare(strict_types = 1);

namespace Thunbolt\Flashes;

use stdClass;

interface IFlashes {

	public function flashMessage(string $message, string $type = 'success'): stdClass;

}
