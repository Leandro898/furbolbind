<?php
/**
 * Template for the login form
 *
 * This template can be overridden by copying it to your-theme/ultimate-member/templates/login.php
 *
 * Page: "Login"
 *
 * @version 2.7.0
 *
 * @var string $mode
 * @var int    $form_id
 * @var array  $args
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="um <?php echo esc_attr( $this->get_class( $mode ) ); ?> um-<?php echo esc_attr( $form_id ); ?>">
	<div class="um-form">
		<form method="post" action="" autocomplete="off">
			<?php
			/** Agrega contenido antes del formulario */
			do_action( 'um_before_form', $args );

			/** Agrega campos antes de los campos principales */
			do_action( "um_before_{$mode}_fields", $args );

			/** Renderiza los campos principales */
			do_action( "um_main_{$mode}_fields", $args );

			// Si el formulario está en modo "login", añade el enlace antes del botón de acceder.
			if ( $mode === 'login' ) {
				echo '<div class="um-password-reset">';
				um_add_password_reset_link();
				echo '</div>';
			}

			/** Renderiza campos después de los principales */
			do_action( 'um_after_form_fields', $args );

			/** Renderiza contenido final del formulario */
			do_action( "um_after_{$mode}_fields", $args );

			/** Acción final después del formulario */
			do_action( 'um_after_form', $args );
			?>
		</form>
	</div>
</div>
