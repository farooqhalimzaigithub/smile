@extends('back.layouts.master')
@section('content')


@if(Session::has('event_delete'))
<script>
swal("","{!! Session::get('event_delete') !!}","success",{
button:"OK"
});
</script>
@endif

      <!-- ============================================================== -->

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('events.create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">image</th>
                        <!-- <th scope="col">Amounts</th> -->
                        <th scope="col">Description</th>
                        <th scope="col">Raise Price</th>
                        <th scope="col">Goal Price</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($event as $key=>$events)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $events->title }}</td>
                        <td><img style="width: 50px; height: 50px;" src="/public/images/{{$events->image}}"></td> 

                        <td>{{ $events->description }}</td>
                        <td>{{ $events->raise_price }}</td>
                        <td>{{ $events->goal_price }}</td>
                        {{-- <td>
                         <!--  @if ($events->status=='0')
                              <a style="border-radius: 25px 25px;"  class="btn btn-danger" href="{{url('plan-approved',$plan->id)}}">UnApprove</a>
                          @else
                          <a  style="border-radius: 25px 25px;" class="btn btn-success"  href="">Approved</a>
                          @endif -->
      
                          {{-- {!! $datas->status== 'Done'? "<span class='bg-success' style='width:10px;'>Yes</span>" : "<span class='bg-danger'>No</span>" !!} --}}
                        {{-- </td> --}}

                          <td>
                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a>
                               --}}
                            
      
                            {{-- <a href="{{ route('plans.destroy',$plan->id ) }}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                           
      
                            <form method="post" action="{{route('events.destroy',$events->id)}}">
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
