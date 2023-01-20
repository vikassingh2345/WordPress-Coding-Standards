<?php 
/**
 * Hello
 *   
 * @package category Testing
 */

if ( isset( $_POST['name'] ) ) {
	$google = $_POST['name'];
	$plugin = 'password-policy-manager';
	echo esc_html__( 'welcome to my website', $plugin );
}


?>

<form action="#" method="post">
	<input type="text" name="name"/>
	<input type="submit" value="submit">
</form>
