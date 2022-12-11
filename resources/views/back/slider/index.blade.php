@extends('back.layouts.master')
@section('content')
      <!-- ============================================================== -->


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
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $sliders->title }}</td>
                        <td>{{ $sliders->image }}</td>
                        <td>{{ $sliders->description }}</td>
                        <td>
                         <!--  @if ($sliders->status=='0')
                              <a style="border-radius: 25px 25px;"  class="btn btn-danger" href="{{url('plan-approved',$plan->id)}}">UnApprove</a>
                          @else
                          <a  style="border-radius: 25px 25px;" class="btn btn-success"  href="">Approved</a>
                          @endif -->
      
                          {{-- {!! $datas->status== 'Done'? "<span class='bg-success' style='width:10px;'>Yes</span>" : "<span class='bg-danger'>No</span>" !!} --}}
                          </td>
{{-- 
                          <td>
                          
                            <a href="" class=""><i class="fas fa-edit"></i></a>
                              
                          </td> --}}
      
                            {{-- <a href="{{ route('plans.destroy',$plan->id ) }}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                           <td>
      
                            <form method="post" action="{{route('sliders.destroy',$sliders->id)}}">
                              @method('delete')
                              @csrf
                             <button style="border: none" type="submit" class=""><i class="fa fa-trash" aria-hidden="true"></i></button> 
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
