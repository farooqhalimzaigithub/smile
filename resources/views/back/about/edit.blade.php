@extends('back.layouts.master')
@section('content')







<form  method="post" action="{{ route('about.update',$abouts->id) }}" enctype="multipart/form-data">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example1">Title</label>

          <input placeholder="Enter Here..." value="{{ $abouts->title }}"  type="text" name="title" id="form6Example1" class="form-control" />
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example2">Heading</label>

          <input placeholder="Enter Here..." type="text" value="{{ $abouts->heading }}"  name="heading" id="form6Example2" class="form-control" />
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="row form-outline mb-4">
        <div class="col-md-6">
            <label class="form-label" for="form6Example3">Image</label>

            <input placeholder="Enter Here..." type="file" name="image" id="form6Example3" class="form-control" />
        </div>

        <div class="col-md-6">
            <label class="form-label" for="form6Example3">About Text</label>

            <textarea placeholder="Enter Here..." type="text" name="about_text" id="form6Example3" class="form-control">{{ $abouts->about_text }}</textarea>
        </div>
        
    </div>


    
  
   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>

@endsection