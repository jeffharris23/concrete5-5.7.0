<?php defined('C5_EXECUTE') or die("Access Denied.");

class Concrete5_Model_CollectionAttributeComposerControl extends ComposerControl {
	
	protected $akID;
	
	public function setAttributeKeyID($akID) {
		$this->akID = $akID;
		$this->setComposerControlIdentifier($btID);
	}

	public function getAttributeKeyID() {
		return $this->akID;
	}

}