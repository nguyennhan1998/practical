@extends("layout")
@section("title","login")
@section("content")
<p>login</p>
    <form action="#" method="post">
       <x-input.email name="email"  holder="Enter your email"/>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="name"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="password"/>
        </div>
        <button class="btn btn-danger" type="submit">submit</button>
    </form>
@endsection
