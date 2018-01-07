<?php

class reallyReadTheTerms_DataWriter_User extends XFCP_reallyReadTheTerms_DataWriter_User {
	protected function _getFields(){
		$parent = parent::_getFields();
		$parent['xf_user']['terms_reading_time'] = array(
			'type' => self::TYPE_INT,
			'default' => -3
		);
		return $parent;
	}
}
