<?php

class View {
	public $templates_folder;

	function __construct( $templates_folder = null ) {
		if ( $templates_folder ) $this->setFolder( $templates_folder );
	}

	function setFolder( $templates_folder ) {
		$this->templates_folder = rtrim( $templates_folder, '/' );
	}

	function renderTemplate( $file_name, $args ) {
		ob_start();

		if ( $args ) {
			foreach ( $args as $key => $value) {
				${$key} = $value;
			}
		}

		include $this->templates_folder . '/' . $file_name . '.php';

		echo ob_get_clean();
	}
}