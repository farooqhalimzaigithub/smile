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
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($gellary as $key=>$gellaries)
                        
                    
                      <tr>
                        <th scope="row">{{ $key+1 }}</th>

                        <td>{{ $gellaries->image }}</td>
  

                          <td>
                          
                            {{-- <a href="" class=""><i class="fas fa-edit"></i></a>
                               --}}
                            
      
                            {{-- <a href="{{ route('gelleries.destroy',$gellaries->id ) }}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                           
      
                            <form method="post" action="{{route('gelleries.destroy',$gellaries->id)}}">
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