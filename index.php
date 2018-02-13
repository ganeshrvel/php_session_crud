<?php
/*
 * Author: Ganesh Rathinavel
 * Description: Add, Delete or Read an item from PHP session which is stored as an array.
 * */

session_start();

/*
 * Description: adds an item to the session array
 * param: can be an array or non array value
 * */
function add_item_id_session( $idValues ) {
	get_item_id_session();
	if ( ! is_array( $idValues ) ) {
		$idValues = array ( $idValues );
	}
	$_SESSION['item_id'] = array_unique( array_merge( $_SESSION['item_id'], $idValues ) );
}

/*
 * Description: deletes an item id from the session array
 * param: can be an array or non array value
 * */
function delete_item_id_session( $idValues ) {
	get_item_id_session();
	if ( ! is_array( $idValues ) ) {
		$idValues = array ( $idValues );
	}
	$_SESSION['item_id'] = array_values( array_diff( $_SESSION['item_id'], $idValues ) );
}

/*
 * Description: reads item id from the session array
 * @return: will return array value of the matching item ids
 * */
function get_item_id_session() {
	if ( ! isset( $_SESSION['item_id'] ) ) {
		$_SESSION['item_id'] = array ();
	}

	return $_SESSION['item_id'];
}