@extends('back.layouts.master')
@section('content')
      <!-- ============================================================== -->
      @if(Session::has('company_delete'))
      <script>
      swal("","{!! Session::get('company_delete') !!}","success",{
      button:"OK"
      });
      </script>
      @endif

      
@if(Session::has('company_edit'))
<script>
swal("","{!! Session::get('company_edit') !!}","success",{
button:"OK"
});
</script>
@endif

      <div class="container mb-2">
        <div class="row">
          <div class="col-md-12">
           <a style="border-radius: 25px 25px;" href="{{route('company.create')}}" class="btn btn-primary">Create</a>
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
                        <th scope="col">Email</th>
                        <th scope="col">About Company</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($companies as $key=>$company)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $company->title }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->about_company }}</td>
                        <td>{{ $company->contact }}</td>
                        <td>{{ $company->address }}</td>
                        {{-- <td>{{ $company->image }}</td>
                         --}}
                        <td><img style="width: 50%;" src="/public/images/{{$company->image}}"></td> 


                          
                           
                            <td><a href="{{route('company.edit',$company->id)}}" class=""><i class="fas fa-edit"></i></a>
                            <a href="{{route('company.destroy',$company->id)}}" class=""><i class="fas fa-trash"></i></a></td>
                            
                              
                            {{-- <td>
      
                            <form method="post" action="{{route('company.destroy',$company->id)}}">
                              @method('delete')
                              @csrf
                             <button style="border: none" type="submit" class=""><i class="fa fa-trash" aria-hidden="true"></i></button> 
                          </form>
                           
      
                        </td> --}}

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
