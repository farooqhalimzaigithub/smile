@extends('back.layouts.master')
@section('content')


@if(Session::has('donation_success'))
<script>
swal("Congratulation!","{!! Session::get('donation_success') !!}","success",{
button:"OK"
});
</script>
@endif

<div class="row justify-content-center">
            <div  class="col-md-12">
             <div  class="card">
                <form  method="post" action="{{ route('create') }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                  <div class="card-body">
                    <h4 style="font-size: 30px;font-weight:bold" class="card-title"> Create New Donation </h4>
                    <div style="margin-top:40px" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Full Name</label>
                      <div class="col-sm-7">
                        <input

                          type="text"
                          class="form-control"
                          style="border: 1px solid black"
                          id="cname"
                          placeholder="Enter Here ...."
                          name="name"

                        />
                      </div>
                    </div>

                    <div style="" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Email</label>
                      <div class="col-sm-7">
                        <input

                          type="email"
                          class="form-control"
                          style="border: 1px solid black"
                          id="cname"
                          placeholder="Enter Here ...."
                          name="email"

                        />
                      </div>
                    </div>

                    <div style="" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Amount</label>
                      <div class="col-sm-7">
                        <input

                          type="number"
                          class="form-control"
                          style="border: 1px solid black"
                          id="cname"
                          placeholder="Enter Here ...."
                          name="amount"

                        />
                      </div>
                    </div>


                    <div style="" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Plan</label>
                      <div style="display: flex;margin-top:8px" class="col-sm-7">

                        {{-- <label class="abc9">Plans</label> --}}
						{{-- <br><br> --}}
						<div class="col-md-3">
							<div class="form-group">Hospital
								<input type="radio" name="plan"  value="Hospital" >
							</div>
						</div>
										
						<div class="col-md-3">
							<div class="form-group">Water
								<input type="radio" name="plan"  value="Water" >
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">Dasterkhwan
								<input type="radio"  name="plan" value="Dasterkhwan">
							</div>
						</div> 

                      </div>
                    </div>


                    <div style="" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Select Payment Method</label>
                      <div  class="col-sm-7">
                        {{-- <label class="abc9">Select Payment Method</label> --}}
                        <select style="border: 0.5px solid black" name="payment_type" required="" class="form-control" required="true">
                          <option value="Easypaisa">Easypaisa</option>
                          <option value="JazzCash">JazzCash</option>
                          <option value="Bank">Bank</option>
                        </select>
                      </div>
                    </div>


                    <div style="" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        image</label>
                      <div class="col-sm-7">
                        <input

                          type="file"
                          class="form-control"
                          style="border: 1px solid black"
                          id="cname"
                          placeholder="Enter Here ...."
                          name="image"

                        />
                      </div>
                    </div>


                  </div>
                  <div style="margin-top: 30px" class="border-top">
                    <div class="card-body">
                      <input style="margin-left: 80%;" type="submit" class="btn btn-primary btn-lg btn-block">


                    </div>
                  </div>
                </form>
              </div>
              </div>
              </div>
@endsection

