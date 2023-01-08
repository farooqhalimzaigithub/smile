@extends('back.layouts.master')
@section('content')

@if(Session::has('event_success'))
<script>
swal("","{!! Session::get('event_success') !!}","success",{
button:"OK"
});
</script>
@endif

  <div class="row">
            <div  class="col-md-12">
             <div  class="card">
                <form  method="post" action="{{route('events.store')}}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <h4 style="font-size: 30px;font-weight:bold" class="card-title"> Create New Event </h4>
                    <div class=" row">
                      <div class="col-sm-6">
                          <label for="fname" >
                        Title</label>
                        <input type="text" class="form-control" style="border: 1px solid black" id="title" placeholder="Enter Here ...." name="title"/>
                      </div>
                      <div class="col-sm-6">
                        <label>image</label>
                        <input type="file" class="form-control" style="border: 1px solid black" id="image" name="image"/>
                      </div>
                    </div>
                    <div class=" row">
                      <div class="col-sm-6">
                          <label for="fname" >
                        Description</label>
                        <textarea type="text" class="form-control" style="border: 1px solid black" id="title" placeholder="Enter Here ...." name="description"></textarea>
                      </div>

                      <div class="col-sm-6">
                        <label for="fname" >
                      Raise Price</label>
                      <input type="number" class="form-control" style="border: 1px solid black" id="title" placeholder="Enter Here ...." name="raise_price">
                    </div>

                    </div>

                    <div class=" row">
                        <div class="col-sm-6">
                            <label for="fname" >
                          Goal Price</label>
                          <input type="number" class="form-control" style="border: 1px solid black" id="title" placeholder="Enter Here ...." name="goal_price">
                        </div>
  
                      </div>
                      <div style="margin-top: 30px" class="border-top">
                    <div class="card-body">
                      <input style="margin-left: 80%;" type="submit" class="btn btn-primary btn-lg btn-block">
                    </div>
                  </div>
                  </div>
                  
                </form>
              </div>
              </div>
              </div>
@endsection