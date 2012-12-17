<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $members = array(
		'id'	=> array(
			'type'		=> 'integer',
			'null'		=> false,
			'default'	=> NULL,
			'key'		=> 'primary'
		)	
	);

	public $lands = array(
		'id'	=> array(
			'type'		=> 'integer',
			'null'		=> false,
			'default'	=> NULL,
			'key'		=> 'primary'
		)
	);

}
