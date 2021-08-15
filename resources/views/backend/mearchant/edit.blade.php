@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Mearchant</a></li>
            <li><a href="">Edit Mearchant</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Edit Mearchant</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                  {{-- Section Start --}}
                      
                          <div class="panel panel-default">
                             <div class="panel-heading">
                                <h3 class="panel-title"> Edit Mearchant</h3>
                             </div>

                             <form class="form-horizontal" method="post" action="{{ url('admin/mearchant/edit/'.$getrecord->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}


                             <div class="panel-body">
                               
                               <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">First Name <span style="color:red"> *</span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input name="name" value="{{ $getrecord->name }}" placeholder="First Name" type="text" required class="form-control" />
                                         <span style="color:red">{{  $errors->first('name') }}</span>
                                      </div>
                                   </div>
                                </div>

                                 <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">Email ID <span style="color:red"> *</span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input name="email" readonly value="{{ $getrecord->email }}" placeholder="Email ID" type="email" class="form-control" />
                                         <span style="color:red">{{  $errors->first('email') }}</span>
                                      </div>
                                   </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">Mobile Number <span style="color:red"> *</span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input name="mobile" required value="{{ $getrecord->mobile }}" placeholder="Mobile Number" type="text" maxlength="10" minlength="10" class="form-control" />
                                         <span style="color:red">{{  $errors->first('mobile') }}</span>
                                      </div>
                                   </div>
                                </div>

                               <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">Upload Your Profile Picture  <span style="color:red"> </span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input type="file" name="user_profile" class="form-control">
                                           @if(!empty($getrecord->user_profile))
                                              <img src="{{ url('upload/profile/'.$getrecord->user_profile) }}" style="height:100px;">
                                            @endif
                                      </div>
                                   </div>
                                </div>
                              
                                
                                 <div class="form-group">
                                   <label class="col-md-3 col-xs-12 control-label">Password <span style="color:red"> *</span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input name="password" value="" placeholder="Password" type="text" class="form-control" />
                                           <span style="color:red">{{  $errors->first('password') }}</span>
                                             (Leave blank if you are not changing the password)
                                      </div>
                                   </div>
                                </div>


                                 
                                
                              </div>
                             <div class="panel-footer">
                                <button class="btn btn-primary pull-right">Submit</button>
                             </div>

                            </form>

                          </div>
                      
                    {{-- Section End --}}


                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
   
  </script>
@endsection
