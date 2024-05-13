<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
        <a href="/" class="btn btn-dark mt-3" > SHow data</a>
       
        
        <form method="POST" action="{{url('/update-data/'.$editData->id)}}">
            @csrf
            <div class="form-group">
                <label for="">
                    Name:
                </label>
                <input type="text" class="form-control" name="name" value="{{$editData->name}}" placeholder="Please enter your name">
            </div>

            <div class="form-group">
                <label for="">
                    Email:
                </label>
                <input type="text" class="form-control" value="{{$editData->email}}" name="email" placeholder="Please enter your Email">
            </div>
            <input type="submit" class="btn btn-dark mt-4" value="Update">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>