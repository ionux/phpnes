<?php

/**
 * This file is part of PHPNES - a NES Emulator implemented in PHP
 * Based off of Ben Firshman's JSNES and Jamie Sanders' vNES.
 *
 * @copyright Andrew Vy 2015
 * @license GPL
 */

namespace PHPNES\MMAP;

class Mapper {
	public $NES;

	public function __construct($NES) {
		$this->NES = $NES;
	}
}
