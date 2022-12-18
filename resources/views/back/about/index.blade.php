@extends('back.layouts.master')
@section('content')
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
                        <th scope="col">S.No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Heading</th>
                        <th scope="col">About Text</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($abouts as $key=>$about)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->heading }}</td>
                        <td>{{ $about->about_text }}</td>

                        {{-- <td>{{ $company->image }}</td>
                         --}}
                        <td><img style="width: 50%;" src="public/images/{{$about->image}}"></td> 


                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a> --}}
                            <td><a href="{{route('about.destroy',$about->id)}}" class=""><i class="fas fa-trash"></i></a></td>
                            
                              
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
