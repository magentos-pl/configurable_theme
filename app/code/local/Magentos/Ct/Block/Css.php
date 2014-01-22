<?php

class Magentos_Ct_Block_Css extends Mage_Core_Block_Template
{
	public function getBodyColor(){
		return "red";
		
	}

	public function getH2Color(){
		return Mage::getStoreConfig('magentos_default/magentos_fonts/h2color');

	}
	
}

