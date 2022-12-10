@extends('back.layouts.master')
@section('content')

<div class="row justify-content-center">
            <div  class="col-md-10">
             <div  class="card">
                <form  method="post" action="#" class="form-horizontal">
                    @csrf
                  <div class="card-body">
                    <h4 style="font-size: 30px;font-weight:bold" class="card-title"> Create New Plan </h4>
                    <div style="margin-top:40px" class="form-group row">
                      <label
                        for="fname"  style="font-weight: bold"
                        class="col-sm-3 text-end control-label col-form-label">
                        Class Name</label>
                      <div class="col-sm-7">
                        <input

                          type="text"
                          class="form-control"
                          style="border: 1px solid black"
                          id="cname"
                          placeholder="Enter Here ...."
                          name="class_name"

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