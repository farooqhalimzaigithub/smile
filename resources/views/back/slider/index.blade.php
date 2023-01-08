@extends('back.layouts.master')
@section('content')
      <!-- ============================================================== -->

      @if(Session::has('slider_delete'))
      <script>
      swal("","{!! Session::get('slider_delete') !!}","success",{
      button:"OK"
      });
      </script>
      @endif

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('sliders.create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">Title</th>
                        <!-- <th scope="col">Amounts</th> -->
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>

                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($slider as $key=>$sliders)
                        
                    
                      <tr>
                        <td >{{ $key+1 }}</td>
                        <td>{{ $sliders->title }}</td>
<<<<<<< HEAD
                        <td><img style="width: 10%;" src="/public/images/{{$sliders->image}}"></td> 

=======
                        <td><img style="width: 50px; height: 50px;" src="/public/images/{{$sliders->image}}"></td>
>>>>>>> f9d6ec43cfbc2e96f4ceacf4c6f87fb66646d8eb
                        <td>{{ $sliders->description }}</td>
                        <td>
                      
      
      
                           
                           <td>
      
                            <form method="post" action="{{route('sliders.destroy',$sliders->id)}}">
                              @method('delete')
                              @csrf
                             <button style="border: none" type="submit" class=""><i class="fa fa-trash text-danger" aria-hidden="true"></i></button> 
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
