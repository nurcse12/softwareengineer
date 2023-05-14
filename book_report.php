<html>
<head>
    <title>Book Report</title>
</head>
<body>
    <h2>Book Report</h2>
    <?php
    // Connect to database
    include_once('dbconection.php');

    /*
    $conn = mysqli_connect("localhost", "username", "password", "book_db");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    */

    // Pagination
    $result_per_page = 10;
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    $number_of_results = mysqli_num_rows($result);
    $number_of_pages = ceil($number_of_results / $result_per_page);
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    $this_page_first_result = ($page - 1) * $result_per_page;

    // Select data from database
    $sql = "SELECT * FROM books LIMIT " . $this_page_first_result . "," . $result_per_page;
    $result = mysqli_query($conn, $sql);

