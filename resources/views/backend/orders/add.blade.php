@extends('backend.layouts.app')
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	@section('style')
	<style type="text/css">
		 input[type=file]{
        display: inline;
        }
        #image_preview{
        border: 1px solid black;
        padding: 10px;
        }
        #image_preview img{
        width: 200px;
        padding: 5px;
        }
	</style>
	@endsection
@section('content')

  <ul class="breadcrumb">
            <li><a href="">Orders</a></li>
            <li><a href="">Add Orders</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Add Orders</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    {{-- Section Start --}}
                       <form class="form-horizontal" method="post" action="{{ url('admin/orders/add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Add Orders</h3>
                                </div>
                                <div class="panel-body">
                                
                                 <div class="form-group">
                                  <label class="col-md-3 col-xs-12 control-label">Orders Name <span style="color:red"> *</span></label>
                                      <div class="col-md-7 col-xs-12">
                                         <div class="">
                                             <input name="orders_name" placeholder="Orders Name" type="text" class="form-control"/>
                                              
                                          </div>
                                      </div>

                                  </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    {{-- Section End --}}

            


                </div>
            </div>
        </div>

@endsection
  @section('script')
  <script type="text/javascript">

  </script>
@endsection

