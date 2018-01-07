<?php
class reallyReadTheTerms_Install {
	public static $im = null;
	public static function getInstallModel(){
		if(is_null(self::$im)){
			self::$im = XenForo_Model::create('reallyReadTheTerms_InstallModel');
		}
		return self::$im;
	}
	public static function install($installedAddon){
		$version = is_array($installedAddon) ? $installedAddon['version_id'] : 0;
		if($version <= 0){
			self::getInstallModel()->install();
		}
	}
	public static function uninstall(){
		self::getInstallModel()->uninstall();
	}
}
