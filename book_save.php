<?php
// Connect to database
include_once('dbconection.php');



$title = $_POST['title'];
$publisher = $_POST['publisher'];
$age = $_POST['age'];
$page_number = $_POST['page_number'];
$publish_date = $_POST['publish_date'];
$book_type = implode(", ", $_POST["book_type"]);


$sql= "INSERT INTO books (title, publisher, age, page_number, publish_date, book_type) VALUES ('$title', '$publisher', '$age', '$page_number', '$publish_date', '$book_type')";

if($conn->query($sql)==TRUE){
    echo json_encode("Save successfully");
}else{
    echo json_encode("Failed");
}







