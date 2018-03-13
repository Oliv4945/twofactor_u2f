<?php

declare(strict_types = 1);

/**
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @copyright Copyright (c) 2018 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * Two-factor U2F
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\TwoFactorU2F\Activity;

use OCP\Activity\ISetting;
use OCP\IL10N;

class Setting implements ISetting {

	/** @var IL10N */
	private $l10n;

	/**
	 * @param IL10N $l10n
	 */
	public function __construct(IL10N $l10n) {
		$this->l10n = $l10n;
	}

	/**
	 * @return boolean
	 */
	public function canChangeMail() {
		return false;
	}

	/**
	 * @return boolean
	 */
	public function canChangeStream() {
		return false;
	}

	/**
	 * @return string
	 */
	public function getIdentifier() {
		return 'twofactor_u2f';
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->l10n->t('U2F device');
	}

	/**
	 * @return int
	 */
	public function getPriority() {
		return 30;
	}

	/**
	 * @return boolean
	 */
	public function isDefaultEnabledMail() {
		return true;
	}

	/**
	 * @return boolean
	 */
	public function isDefaultEnabledStream() {
		return true;
	}

}
