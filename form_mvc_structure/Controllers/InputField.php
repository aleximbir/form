<?php

class InputField extends Form {
	public $input_name;

	public function __construct( $input_name ) {
		parent::__construct();
		$this->input_name = $input_name;
	}

	public function render() {
		$this->view->renderTemplate( 'input_view', array(
			'input_name' => $this->input_name,
		) );
	}
}