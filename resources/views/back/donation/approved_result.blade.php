@extends('back.layouts.master')
@section('content')

@if(Session::has('donation_delete'))
<script>
swal("","{!! Session::get('donation_delete') !!}","success",{
button:"OK"
});
</script>
@endif
      <!-- ============================================================== -->
      
      <div  class="container mb-2">
        <form  style="display: flex" action="{{ route('approved') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                  <label for="">Name/Amount</label>
                  <input type="text" placeholder="Enter Here...." class="form-control" name="name" id="name"/>
                </div>
              </div>

            <div class="row">
          <div class="col-md-12">
            <label for="">From</label>
            <input type="date" class="form-control" name="from_date" id="from_date"/>
          </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <label for="">To</label>
              <input type="date" class="form-control" name="to_date" id="to_date"/>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Submit</label>
              <input type="submit" name="search" class="btn btn-primary form-control"/>
            </div>
          </div>

        

        </form>
           
      </div>

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{url('create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Amounts</th>
                        <th scope="col">Image</th>

                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($search as $key=>$searches)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $searches->name }}</td>
                        <td>{{ $searches->email }}</td>
                        <td>{{ $searches->amount }}</td>
                        <td><img style="width: 50%;" src="/public/images/{{$searches->image}}"></td> 

                        <td>
                          @if ($searches->status=='0')
                              {{-- <a style="border-radius: 25px 25px;"  class="btn btn-danger" href="{{url('donation-approved',$donation->id)}}">UnApprove</a> --}}
                              <a style="border-radius: 25px 25px;"  class="btn btn-danger" href="">UnApprove</a>

                          @else
                          <a  style="border-radius: 25px 25px;" class="btn btn-primary"  href="{{ url('approved',$searches->id) }}">Approved</a>
                          @endif
      
                          {{-- {!! $datas->status== 'Done'? "<span class='bg-success' style='width:10px;'>Yes</span>" : "<span class='bg-danger'>No</span>" !!} --}}
                          </td>

                          <td>
                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a> --}}
                              
                            {{-- <a href="{{route('approved_delete',$searches->id)}}" class=""><i class="fas fa-trash"></i></a> --}}
      
                            <form method="post" action="{{route('donations.destroy',$searches->id)}}">
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
