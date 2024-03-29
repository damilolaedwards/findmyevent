<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Event</title>
  </head>
  <body>
    <div class="container-fluid">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    FindMyEvent
  </a>
  <span class="pull-right"><b>Logged in as :</b> {{\Auth::user()->email}}</span>
</nav>
    </div>
    @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif
    <div class="container">
      <p class="lead">Edit Your Event</p>
      <hr>
      <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="POST" action="{{route('event.update', ['id' => $event->id])}}" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Title</label>
    <input type="text" class="form-control" name="title" aria-describedby="title" value="{{$event->title}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Event description</label>
    <textarea class="form-control" name="description" cols="5">
      {{$event->description}}
    </textarea> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Event</label>
    <input type="date" class="form-control" name="date" aria-describedby="title" value="{{$event->date}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Time of Event</label>
    <input type="time" class="form-control" name="time" aria-describedby="time" value="{{$event->time}}">
    
  </div>
  <div class="form-group">
    <label >Venue of Event</label>
    <input type="text" class="form-control" name="venue" aria-describedby="time" value="{{$event->venue}}">
    
  </div>
  <div class="form-group">
    <label>Type of Event</label>
    
  <div class="form-check">
  <input class="form-check-input" type="radio" name="type"  value="free" @if($event->type == 'free') checked @endif >
  <label class="form-check-label" for="exampleRadios1">
    Free
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type"  value="paid" @if($event->type == 'paid') checked @endif>
  <label class="form-check-label" for="exampleRadios2">
    Paid
  </label>
</div>
  </div>
  <input type="hidden" name="id" value="{{$event->id}}">
  <div class="form-group ">
    <input type="file" value="Update event image" name="image" class="form-group"  >
    <label class="form-check-label" for="exampleCheck1">Upload Event Image File</label>
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>