<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12" >
            <h2>Edit Student</h2>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="post" action="{{url('update-student')}}">
                @csrf 
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="md-3">
                     <label class="form-label">Name</label>
                     <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$data->name}}">
                     @error('name')
                     <div class="alert alert-danger" role="alert">
                        {{$message}}
                     </div>
                     @enderror
                </div>
                <div class="md-3">
                     <label class="form-label">Email</label>
                     <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
                     @error('email')
                     <div class="alert alert-danger" role="alert">
                        {{$message}}
                     </div>
                     @enderror
                </div>
                <div class="md-3">
                     <label class="form-label">Phone</label>
                     <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{$data->phone}}">
                     @error('phone')
                     <div class="alert alert-danger" role="alert">
                        {{$message}}
                     </div>
                     @enderror
                </div>
                <div class="md-3">
                     <label class="form-label">Adress</label>
                     <textarea class="form-control" name="address" placeholder="Enter Address">{{$data->address}}
                     </textarea>
                     @error('address')
                     <div class="alert alert-danger" role="alert">
                        {{$message}}
                     </div>
                     @enderror 
                </div><br>
                <button type="submit" class="btn btn-primary" >Submit</button>
                <a href="{{url('student-list')}}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
