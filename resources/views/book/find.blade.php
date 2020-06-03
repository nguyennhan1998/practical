@extends("layout")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">book listing</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
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
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$book->__get("id")}}</td>
                        <td>{{$book->__get("author_id")}}</td>
                        <td>{{$book->__get("title")}}</td>
                        <td>{{$book->__get("ISBN")}}</td>
                        <td>{{$book->__get("pub_year")}}</td>
                        <td>{{$book->__get("available")}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
