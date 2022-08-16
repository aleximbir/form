<form method="<?php echo $method; ?>">

	<?php foreach ( $fields as $key => $value ) {

		echo $value->render();

	} ?>

</form>