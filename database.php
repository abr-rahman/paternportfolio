<?php
  
  function connect_to_db(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";
    return $db_connect = mysqli_connect($hostname,$username,$password,$database);  
  }
  function query_port($table_name){
    $select_query = "SELECT * FROM $table_name ";
   return $form_db = mysqli_query(connect_to_db(), $select_query); 
  }
  function single_data($table_name, $id){
    $single_select_query = "SELECT * FROM $table_name WHERE id=$id";
   return $form_db = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $single_select_query)); 
  }
  function letest_number($table_name,$how_many){
    $select_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT $how_many";
   return $form_db = mysqli_query(connect_to_db(), $select_query); 
  }
	//insert query
  function insert_que($table_name,$field_name,$values){
    $insert_query = "INSERT INTO $table_name($field_name) VALUES ($values)";
    return mysqli_query(connect_to_db(),$insert_query);
  }

  function delete_query($table_name,$field_name,$field_values){
    $query_delete = "DELETE FROM $table_name WHERE $field_name = $field_values";
    return mysqli_query(connect_to_db(),$query_delete);
  }

  // Update query
  function edite_query($table_name,$setup_name,$setup_value){
    $update_query = "UPDATE $table_name SET setup_value = '$setup_value' WHERE setup_name = '$setup_name'";
    return mysqli_query(connect_to_db(),$update_query);
  }

  //Photo delete query
  function delete_with_photo($table_name, $field_name, $field_value, $photo_field_name){
    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_value";
    $form_db = mysqli_query(connect_to_db(), $select_query); 
    $photo_name = mysqli_fetch_assoc($form_db)[$photo_field_name];
    $link = __DIR__. "/img/" . $table_name ."/". $photo_name;
    //define('ROOTPATH', __DIR__);
    unlink($link);
    $query_delete = "DELETE FROM $table_name WHERE $field_name = $field_value";
    return mysqli_query(connect_to_db(),$query_delete);
  }
  
  // setup query
  function setup($table_name, $setup_name){
    $query = "SELECT setup_value FROM $table_name WHERE setup_name = '$setup_name'";
    return mysqli_fetch_assoc( mysqli_query(connect_to_db(),$query))['setup_value'];
  }
?>