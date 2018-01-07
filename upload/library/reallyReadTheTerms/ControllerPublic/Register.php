<?php

class reallyReadTheTerms_ControllerPublic_Register extends XFCP_reallyReadTheTerms_ControllerPublic_Register{
	public function actionRegister(){
		$returnValue = parent::actionRegister();
		$uid = XenForo_Visitor::getUserId();
		if($uid){
			//user is registered
			$terms_reading_time = $this->_input->filterSingle('termsreadingtime', XenForo_Input::INT, array('default'=>-3));
			$writer = XenForo_DataWriter::create('XenForo_DataWriter_User');
			$writer->setExistingData($uid);
			$writer->set('terms_reading_time',$terms_reading_time);
			$writer->save();
		}
		return $returnValue;
	}
}
