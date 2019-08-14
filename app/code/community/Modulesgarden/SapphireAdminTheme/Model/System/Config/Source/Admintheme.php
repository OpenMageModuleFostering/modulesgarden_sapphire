<?php

/* * ********************************************************************
 * Customization Services by ModulesGarden.com
 * Copyright (c) ModulesGarden, INBS Group Brand, All Rights Reserved 
 * (2014-07-08, 10:21:19)
 * 
 *
 *  CREATED BY MODULESGARDEN       ->        http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *
 *
 *
 *
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.
 *
 *
 * ******************************************************************** */

/**
 * @author Grzegorz Draganik <grzegorz@modulesgarden.com>
 */

class Modulesgarden_SapphireAdminTheme_Model_System_Config_Source_Admintheme {

	public function toOptionArray() {
		$path = Mage::getBaseDir('app') . DIRECTORY_SEPARATOR . 'design' . DIRECTORY_SEPARATOR . 'adminhtml' . DIRECTORY_SEPARATOR . 'default';
		$options = array();
		foreach (new DirectoryIterator($path) as $fileInfo) {
			if (!$fileInfo->isDot() && $fileInfo->isDir())
				$options[] = array('value' => $fileInfo->getFilename(), 'label' => 'default / ' . $fileInfo->getFilename());
		}
		return $options;
	}

}