<?php

class Form {
	protected $_method;

	protected $fields = array();

	public function __construct( $_method = 'POST' ) {
		$this->method = $_method;

	}

	public function addField( $field ) {
		$this->fields[] = $field;

	}

	public function display() {
		$form_content = '';

		if ( $this->fields ) {
			foreach ( $this->fields as $key => $value ) {
				$form_content .= $value->render();
			}

			echo sprintf( '
				<form method="%s">%s</form>',
				$this->method, $form_content
			);

		} else {
			echo 'Nothing to display';

		}

	}
}

class InputField extends Form {
	public $_input_name;

	public function __construct( $_input_name ) {
		$this->input_name = $_input_name;

	}

	public function render() {
		return sprintf(
			'<input type="text" name="%s" placeholder="%s" />',
			$this->input_name, $this->input_name
		);

	}
}

class Textarea extends Form {
	public $_input_name;

	public function __construct( $_input_name ) {
		$this->input_name = $_input_name;

	}

	public function render() {
		return sprintf(
			'<textarea name="%s">%s</textarea>',
			$this->input_name, $this->input_name
		);

	}
}

class Checkbox extends Form {
	public $_input_name;

	public function __construct( $_input_name ) {
		$this->input_name = $_input_name;

	}

	public function render() {
		return sprintf( '
			<input type="checkbox" name="%s" />
			<label for="%s">%s</label>',
			$this->input_name, $this->input_name, $this->input_name
		);

	}
}

// Display form
$method = 'POST';
$form   = new Form( $method );

$form->addField( new InputField( 'first_name' ) );
$form->addField( new InputField( 'last_name' ) );
$form->addField( new Textarea( 'address' ) );
$form->addField( new Checkbox( 'tos' ) );

$form->display();