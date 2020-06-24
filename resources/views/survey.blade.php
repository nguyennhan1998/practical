<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>survey</h1>
    <form action="{{url("/save-feedback")}}" method="post">
        @method("POST")
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input class="form-control @error("name") is-invalid @enderror" type="text" name="name" placeholder="Enter Name"/>
            @error("name")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" placeholder="Enter your email.." class="form-control @error("email") is-invalid @enderror"/>
            @error("email")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>phone</label>
            <input name="phone" type="text" placeholder="phone number" class="form-control @error("phone") is-invalid @enderror"/>
            @error("phone")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>feedback</label>
            <textarea name="feedback" type="text" placeholder="feedback.." class="form-control @error("feedback") is-invalid @enderror">
                    </textarea>
            @error("feedback")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
