<form action="/api/book" method="post">
    {{csrf_field()}}
    <label for="author">Author:</label>
    <input type="text" name="author" placeholder="Author">
    <label for="title">Title:</label>
    <input type="text" name="title" placeholder="Title">
    <label for="pieces">Pieces:</label>
    <input type="number" name="pieces" placeholder="Pieces">
    <input type="submit" value="Ok">
</form>