@extends('back.layouts.master')
@section('content')

@if(Session::has('slider_success'))
<script>
swal("","{!! Session::get('slider_success') !!}","success",{
button:"OK"
});
</script>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create New Slider</h1>
        </div>
    </div>
    <div class="row">
        <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
            @csrf

        <div class="col-md-3">
            <div class="form-group">
                <label >Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label >Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label >Description</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Description">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
            
                <input type="submit" value="Submit" class="btn btn-success form-control" >
            </div>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection