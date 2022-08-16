<?php

class Form {
	public $method;

	public $fields = array();

	public $view;

	public function __construct( $method = 'POST' ) {
		$this->view   = new View( 'Views' );
		$this->method = $method;
	}

	public function addField( $field ) {
		$this->fields[] = $field;
	}

	public function display() {
		$this->view->renderTemplate( 'form_view', array(
			'method' => $this->method,
			'fields' => $this->fields,
		) );

	}
}