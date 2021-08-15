@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Orders </a></li>
            <li><a href="">Edit Orders </a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Edit Orders </h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                  {{-- Section Start --}}
                      
                          <div class="panel panel-default">
                             <div class="panel-heading">
                                <h3 class="panel-title"> Edit Orders</h3>
                             </div>

                             <form class="form-horizontal" method="post" action="{{ url('admin/orders/edit/'.$getrecord->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}


                             <div class="panel-body">
                               
                               <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">Orders Name  <span style="color:red"> *</span></label>
                                   <div class="col-md-7 col-xs-12">
                                      <div class="">
                                         <input name="orders_name" value="{{ $getrecord->orders_name }}" placeholder="Orders Name" type="text" required class="form-control" />
                                         <span style="color:red">{{  $errors->first('orders_name') }}</span>
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
