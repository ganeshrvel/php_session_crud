<?php
/*
 * Author: Ganesh Rathinavel
 * Description: Add, Delete or Read an item from PHP session which is stored as an array.
 * */

session_start();

/*
 * Description: adds item to the session array
 * param: can be array or non array value
 * */
function add_item_id_session( $idValues ) {
	get_item_id_session();
	if ( ! is_array( $idValues ) ) {
		$idValues = array ( $idValues );
	}
	$_SESSION['item_id'] = array_unique( array_merge( $_SESSION['item_id'], $idValues ) );
}

/*
 * Description: deletes item id from the session array
 * param: can be array or non array value
 * */
function delete_item_id_session( $idValues ) {
	get_item_id_session();
	if ( ! is_array( $idValues ) ) {
		$idValues = array ( $idValues );
	}
	$_SESSION['item_id'] = array_values( array_diff( $_SESSION['item_id'], $idValues ) );
}

/*
 * Description: get item ids from the session array
 * @return: will return array value consisting of item ids
 * */
function get_item_id_session() {
	if ( ! isset( $_SESSION['item_id'] ) ) {
		$_SESSION['item_id'] = array ();
	}

	return $_SESSION['item_id'];
}

###############################################################
/*Usage Example*/

$addIdArray = array (
	1,
	2,
	3,
	89,
	56,
	5,
	6,
	7,
	9,
	11,
	4,
);

//add item ids, passing param as an array
add_item_id_session( $addIdArray );

//add item ids, passing param as a non array value
add_item_id_session( 100 );


$deleteIdArray = array (
	4,
	11,
	6,
	3,
);

//delete item ids, passing param as an array
delete_item_id_session( $deleteIdArray );

//delete item ids, passing param as a non array value
delete_item_id_session( 11 );


//get item ids as an array
get_item_id_session();