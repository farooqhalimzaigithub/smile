@extends('back.layouts.master')
@section('content')
      <!-- ============================================================== -->
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
                          
                            <a href="" class=""><i class="fas fa-edit"></i></a>
                              
                            
      
                            <a href="" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                           
      
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
     
 @stop
    
  </body>
</html>
