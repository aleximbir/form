<?php
include 'inc.php';

// Display form
$method = 'POST';
$form   = new Form( $method );

$form->addField( new InputField( 'first_name' ) );
$form->addField( new InputField( 'last_name' ) );
$form->addField( new Textarea( 'address' ) );
$form->addField( new Checkbox( 'tos' ) );

$form->display();