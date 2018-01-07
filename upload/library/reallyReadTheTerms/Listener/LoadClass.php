<?php

class reallyReadTheTerms_Listener_LoadClass {
	public static function callback($class, array &$extend){
		self::callback1($class,$extend);
		self::callback2($class,$extend);
	}
	public static function callback1($class, array &$extend){
		$baseClass = 'XenForo_DataWriter_User';
		$toExtend = 'reallyReadTheTerms_DataWriter_User';
		if($class==$baseClass && !in_array($toExtend, $extend)){
			$extend[]=$toExtend;
		}
	}
	public static function callback2($class, array &$extend){
		$baseClass = 'XenForo_ControllerPublic_Register';
		$toExtend = 'reallyReadTheTerms_ControllerPublic_Register';
		if($class==$baseClass && !in_array($toExtend, $extend)){
			$extend[]=$toExtend;
		}
	}
}
