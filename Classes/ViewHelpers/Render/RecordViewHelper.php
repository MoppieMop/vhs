<?php
namespace FluidTYPO3\Vhs\ViewHelpers\Render;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use FluidTYPO3\Vhs\ViewHelpers\Content\AbstractContentViewHelper;

/**
 * ViewHelper used to render raw content records typically fetched
 * with <v:content.get(column: '0', render: FALSE) />
 *
 * @author Björn Fromme, <fromme@dreipunktnull.com>, dreipunktnull
 * @package Vhs
 * @subpackage ViewHelpers\Render
 */
class RecordViewHelper extends AbstractContentViewHelper {

	/**
	 * Render method
	 *
	 * @param array $record
	 * @return string
	 */
	public function render(array $record = array()) {
		if (FALSE === isset($record['uid'])) {
			return NULL;
		}
		return $this->renderRecord($record);
	}

}
