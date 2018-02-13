<?php

/*Usage*/


//Add:
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


//Delete:
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


//Read:
//Fetch item ids as an array
get_item_id_session();