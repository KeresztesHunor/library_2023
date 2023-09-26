@foreach ($books as $book)
    <form action="/api/book/{{$book->book_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <input type="submit" value="{{$book->author}}: {{$book->title}}">
    </form>
@endforeach