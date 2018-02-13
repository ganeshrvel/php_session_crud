Add, Delete or Read an item from PHP session which is stored as an array.
--------
Author: Ganesh Rathinavel

Requirements: PHP

URL: [https://github.com/ganeshrvel/php_session_crud](https://github.com/ganeshrvel/php_session_crud)


----------


Installation:

    Import or copy the methods from 'index.php'

----------


Usage:


    Add an item or an array of items:
    
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


----------


    Delete an item or an array of items:
    
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


----------


    Read an item:
    
    //Fetch item ids as an array
    get_item_id_session();
