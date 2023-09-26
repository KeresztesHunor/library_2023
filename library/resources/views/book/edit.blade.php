<form action="/api/book/{{$book->book_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <label for="author">Author:</label>
    <input type="text" name="author" placeholder="Author" value="{{$book->author}}">
    <label for="title">Title:</label>
    <input type="text" name="title" placeholder="Title" value="{{$book->title}}">
    <label for="pieces">Pieces:</label>
    <input type="number" name="pieces" placeholder="Pieces" value="{{$book->pieces}}">
    <input type="submit" value="Ok">
</form>