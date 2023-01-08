@extends('back.layouts.master')
@section('content')

@if(Session::has('gallery_delete'))
<script>
swal("","{!! Session::get('gallery_delete') !!}","success",{
button:"OK"
});
</script>
@endif
      <!-- ============================================================== -->

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('gelleries.create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">S.No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($gellary as $key=>$gellaries)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>

                        <td><img style="width: 50px; height:50px " src="/public/images/{{$gellaries->image}}"></td> 

  

                          <td>
                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a>
                               --}}
                            
      
                            {{-- <a href="{{ route('gelleries.destroy',$gellaries->id ) }}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                           
      
                            <form method="post" action="{{route('gelleries.destroy',$gellaries->id)}}">
                              @method('delete')
                              @csrf
                              <button style="border: none" type="submit" class=" "><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                          </form>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
@endsection
    
  </body>
</html>
