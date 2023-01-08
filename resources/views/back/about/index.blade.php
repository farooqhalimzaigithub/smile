@extends('back.layouts.master')
@section('content')

@if(Session::has('about_delete'))
<script>
swal("","{!! Session::get('about_delete') !!}","success",{
button:"OK"
});
</script>
@endif

@if(Session::has('about_edit'))
<script>
swal("","{!! Session::get('about_edit') !!}","success",{
button:"OK"
});
</script>
@endif

      <!-- ============================================================== -->
      @if(Session::has('successer'))
      <p class="alert alert-danger">{{ Session::get('successer') }}</p>
      @endif

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('about.create')}}" class="btn btn-primary">Create</a>
          </div>
        </div>
      </div>

<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                
                  <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th >S.No</th>
                        <th >Title</th>
                        <th >Heading</th>
                        <th >About Text</th>
                        <th >Image</th>
                        <th >Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($abouts as $key=>$about)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->heading }}</td>
                        <td>{{ $about->about_text }}</td>

                        <td><img style="width: 50px; height: 50px;" src="/public/images/{{$about->image}}"></td>


                          
                            <td><a href="{{route('about.edit',$about->id)}}" class=""><i class="fas fa-edit text-success"></i></a>
                            <a href="{{route('about.destroy',$about->id)}}" class=""><i class="fas fa-trash text-danger"></i></a></td>
                            
                              


                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
 @stop
    
  </body>
</html>
