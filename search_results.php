<form action="search_results.php" method="post">
    <label for="keyword">Keyword:</label>
    <input type="text" name="keyword" id="keyword">
    <br>
    <label for="age">Age:</label>
    <select name="age" id="age">
        <option value="all">All</option>
        <option value="children">Children</option>
        <option value="young_adult">Young Adult</option>
        <option value="adult">Adult</option>
    </select><br>
    
    <label for="book_type">Book Type:</label>
    <div id="book_type">
        <input type="checkbox" name="book_type[]" id="sci-fi" value="sci-fi">
        <label for="sci-fi">Sci-Fi</label>
        
        <input type="checkbox" name="book_type[]" id="drama" value="drama">
        <label for="drama">Drama</label>
        
        <input type="checkbox" name="book_type[]" id="novel" value="novel">
        <label for="novel">Novel</label>
    </div>
    
    <input type="submit" value="Search">
</form>
