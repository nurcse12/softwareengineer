<html>
<head>
    <title>Add Book</title>
</head>
<body>

    <h2>Add Book</h2>
    <form action="book_save.php" method="post">
        <label>Title:</label>
        <input type="text" name="title"><br><br>
        <label>Publisher:</label>
        <input type="text" name="publisher"><br><br>
        <label>Age of Publisher:</label>
        <input type="number" name="age"><br><br>
        <label>Page Number:</label>
        <input type="number" name="page_number"><br><br>
        <label>Publish Date:</label>
        <input type="date" name="publish_date"><br><br>
        <label>Book Type:</label><br>
        <input type="checkbox" name="book_type[]" value="sci-fi"> Sci-fi<br>
        <input type="checkbox" name="book_type[]" value="drama"> Drama<br>
        <input type="checkbox" name="book_type[]" value="novel"> Novel<br>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
