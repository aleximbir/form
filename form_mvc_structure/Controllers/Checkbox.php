<?php

class Checkbox extends Form {
	public $checkbox_name;

	public function __construct( $checkbox_name ) {
		parent::__construct();
		$this->checkbox_name = $checkbox_name;
	}

	public function render() {
		$this->view->renderTemplate( 'checkbox_view', array(
			'checkbox_name' => $this->checkbox_name,
		) );
	}
}