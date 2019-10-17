<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>{{$event->title}}</title>
  </head>
  <body>
    <div class="container-fluid">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    FindMyEvent
  </a>
  @if(\Auth::user())
  <span class="pull-right"><b>Logged in as :</b> {{\Auth::user()->email}}</span>
  @endif
</nav>
    </div>
   

        
    <div class="container">
      <p class="lead">{{$event->title}}</p>
      <hr>
      <div class="row">
      <div class="col-md-6">
    <div class="card" style="width: 24rem;">
  <img src="{{url('images/events/'.$event->image)}}" class="card-img-top" alt="{{$event->id}}">
  <div class="card-body">
    @if($event->type == 'free')
    <span class="badge badge-primary">Free</span>
    @endif
    @if($event->type == 'paid')
    <span class="badge badge-success">Paid</span>
    @endif
    <h5 class="card-title">{{$event->title}}</h5>
    <p class="card-text">{{$event->description}}</p>
    <p><b>Date : </b>{{$event->date}}</p>
    <p><b>Time : </b> {{$event->time}}</p>
    <p><b>Venue : </b>{{$event->venue}}</p>
    @if($event->type == 'paid')
    <p><b>Event Price : </b> {{$event->price}}</p>
    @endif
  </div>
  <div class="card-footer">
  <form>
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Enter your full name">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" aria-describedby="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" aria-describedby="phone" placeholder="Enter your phone">
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Ticket amount</label>
    <select class="form-control" name="ticket_number">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select> 
  </div>
   <button type="submit" class="btn btn-primary">Pay</button>
</form>
  </div>
  
</div>
 </div> 
</div>

@if(\Auth::user())
@if(\Auth::id() == $event->user_id)
<div class="col-md-6">
  <p><a class="btn btn-primary" href="{{route('editevent',['id' => $event->id])}}" role="button">Edit</a></p>
  <p><a class="btn btn-danger" href="{{route('event.delete', ['id' => $event->id])}}" role="button">Delete</a></p>
</div>
@endif
@endif

      </div>
      
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>