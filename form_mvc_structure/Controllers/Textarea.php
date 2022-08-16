<?php

class Textarea extends Form {
	public $textarea_name;

	public function __construct( $textarea_name ) {
		parent::__construct();
		$this->textarea_name = $textarea_name;
	}

	public function render() {
		$this->view->renderTemplate( 'textarea_view', array(
			'textarea_name' => $this->textarea_name,
		) );
	}
}