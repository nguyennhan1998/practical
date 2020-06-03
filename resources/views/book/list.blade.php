@extends("layout")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">book listing</h3>
            <form  role="form" action="{{url("/find-book")}}" method="POST"  >
                @method("POST")
                @csrf
                <div class="form-group" style="width: 30%">
                    <label for="book">Email address</label>
                    <input type="text" name="bookname" class="form-control" id="book" placeholder="Search....">
                    <button class="btn btn-dark">Search</button>
                </div>
            </form>
        </div>
        <div class="card-header">
            <a href="{{url("new-book")}}" class="float-right btn btn-outline-primary">+</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>author id</th>
                    <th>title</th>
                    <th>ISBN</th>
                    <th>pub year</th>
                    <th>available</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->__get("id")}}</td>
                        <td>{{$book->__get("author_id")}}</td>
                        <td>{{$book->__get("title")}}</td>
                        <td>{{$book->__get("ISBN")}}</td>
                        <td>{{$book->__get("pub_year")}}</td>
                        <td>{{$book->__get("available")}}</td>
                        <td>
                            <a href="{{url("edit-book/{$book->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{url("delete-book/{$book->__get("id")}")}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
