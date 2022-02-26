<?php
function dbconnect(){
    $db_host_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "ragistration_hasan";
return mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);
}


function get_query($table_name){
    $get_query ="SELECT * FROM $table_name";
     return mysqli_query(dbconnect(),$get_query);
}
// function get_query_active($table_name,$status = 1){
//     if($order == "ASC" && $limit == 'all'){
//         $get_query ="SELECT * FROM $table_name WHERE active_status = $status";
//     }else {
//         $get_query ="SELECT * FROM $table_name WHERE active_status = $status ORDER BY id $order LIMIT=$limit";
//     }
   
//      return mysqli_query(dbconnect(),$get_query);
// }

 
?>