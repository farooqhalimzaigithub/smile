@extends('back.layouts.master')
@section('content')
      <!-- ============================================================== -->




      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('donations.create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($donations as $key=>$donation)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $donation->name }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>
                          @if ($donation->status=='0')
                              <a style="border-radius: 25px 25px;"  class="btn btn-danger" href="{{url('donation-approved',$donation->id)}}">UnApprove</a>
                          @else
                          <a  style="border-radius: 25px 25px;" class="btn btn-success"  href="">Approved</a>
                          @endif
      
                          {{-- {!! $datas->status== 'Done'? "<span class='bg-success' style='width:10px;'>Yes</span>" : "<span class='bg-danger'>No</span>" !!} --}}
                          </td>

                          <td>
                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a> --}}
                              
                            
      
                            <form method="post" action="{{route('donations.destroy',$donation->id)}}">
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
