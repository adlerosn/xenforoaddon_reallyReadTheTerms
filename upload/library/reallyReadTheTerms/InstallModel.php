<?php

class reallyReadTheTerms_InstallModel extends XenForo_Model {
	public function install(){
		$q = 'ALTER TABLE `xf_user`
			  ADD COLUMN `terms_reading_time`
				  INT
				  NOT NULL
				  DEFAULT -2
			  ;';
		$this->_getDb()->query($q);
	}
	public function uninstall(){
		$q = 'ALTER TABLE `xf_user` DROP COLUMN `terms_reading_time`;';
		$this->_getDb()->query($q);
	}
}
