<?php
namespace BeechIt\NewsTtnewsimport\Jobs;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Import job
 *
 * @package TYPO3
 * @subpackage news_ttnewsimport
 */
class TTNewsNewsImportJob extends \Tx_News_Jobs_AbstractImportJob {
	/**
	 * @var int
	 */
	protected $numberOfRecordsPerRun = 30;

	protected $importServiceSettings = array(
		'findCategoriesByImportSource' => 'TT_NEWS_CATEGORY_IMPORT'
	);

	/**
	 * Inject import dataprovider service
	 *
	 * @param \BeechIt\NewsTtnewsimport\Service\Import\TTNewsNewsDataProviderService $importDataProviderService
	 * @return void
	 */
	public function injectImportDataProviderService(\BeechIt\NewsTtnewsimport\Service\Import\TTNewsNewsDataProviderService
		$importDataProviderService) {

		$this->importDataProviderService = $importDataProviderService;
	}

	/**
	 * Inject import service
	 *
	 * @param \Tx_News_Domain_Service_NewsImportService $importService
	 * @return void
	 */
	public function injectImportService(\Tx_News_Domain_Service_NewsImportService $importService) {
		$this->importService = $importService;
	}
}