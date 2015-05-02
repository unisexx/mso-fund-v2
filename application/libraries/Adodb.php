<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Adodb plugin for ci
 * Author: iyottt@gmail.com
 */
class Adodb {

	function __construct(){
		$this->obj =& get_instance();
		$db = $this->obj->config->load('adodb', TRUE);
		$this->obj->adoConf = $db['adodb'];
       	
       	if ($this->obj->adoConf['cache_on'] && is_dir(APPPATH.$this->obj->adoConf['cachedir'])){
			GLOBAL $ADODB_CACHE_DIR;
			$ADODB_CACHE_DIR = APPPATH.$this->obj->adoConf['cachedir'];
		} 
		 
       	require_once(dirname(__FILE__).'/adodb/adodb.inc.php');
		$this->obj->ado =& NewADOConnection($this->obj->adoConf['dbdriver']);

		if (@$this->obj->adoConf['db_debug']) { @$this->conn->debug = true; }

		$this->obj->ado->Connect(
			$this->obj->adoConf['hostname'],
			$this->obj->adoConf['username'],
			$this->obj->adoConf['password'],
			$this->obj->adoConf['database']
		);
		if ($this->obj->adoConf['char_set'] && $this->obj->adoConf['dbcollat']){
  			$this->obj->ado->Execute('SET character_set_results='.$this->obj->adoConf['char_set']);
			$this->obj->ado->Execute('SET collation_connection='.$this->obj->adoConf['dbcollat']);
			$this->obj->ado->Execute('SET NAMES '.$this->obj->adoConf['char_set']);
		}
		$this->obj->ado->SetFetchMode(ADODB_FETCH_ASSOC);
		return true;
	}

}