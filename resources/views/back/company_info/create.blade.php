@extends('back.layouts.master')
@section('content')

@if(Session::has('company_success'))
<script>
swal("","{!! Session::get('company_success') !!}","success",{
button:"OK"
});
</script>
@endif



<form  method="post" action="{{ route('company.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example1">Title</label>

          <input type="text" name="title" id="form6Example1" class="form-control" />
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example2">Email</label>

          <input type="email" name="email" id="form6Example2" class="form-control" />
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="row form-outline mb-4">
        <div class="col-md-6">
            <label class="form-label" for="form6Example3">Logo</label>

            <input type="file" name="image" id="form6Example3" class="form-control" />
        </div>

        <div class="col-md-6">
            <label class="form-label" for="form6Example3">Contact</label>

            <input type="text" name="contact" id="form6Example3" class="form-control" />
        </div>
        
    </div>


    <div class="row form-outline mb-4">
        <div class="col-md-6">
            <label class="form-label" for="form6Example3">Address</label>

            <textarea type="text"  name="address" id="form6Example3" class="form-control"></textarea>
        </div>

        <div class="col-md-6">

            <label class="form-label" for="form6Example3">About Company</label>

            <textarea type="text"   name="about_company" id="form6Example3" class="form-control"></textarea>

           
        </div>
        
    </div>
  

  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>

@endsection