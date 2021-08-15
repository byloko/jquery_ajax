@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Dashboard List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Dashboard List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                    <div class="col-md-3">
                       <div class="widget widget-danger widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>                            
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">                                
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>   
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-os"></span></a>
                                </div>
                                <div class="col">
                                    <a href="{{ url('admin/dashboard') }}"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendars"></span></a>
                                </div>
                            </div>                          
                                                       
                        </div>   
                    </div> 

                    {{-- Part 2 Start--}}

                           <div class="col-md-3">
                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"> {{ $TotalUser }} </div>
                                    <div class="widget-title">Total Registred Users</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="{{ url('admin/user') }}" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                        </div> 
                    {{-- Part 2 End --}}

                    {{-- Part 3 Start--}}
                        <div class="col-md-3">
                            <div class="widget widget-success widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"> {{ $TotalUserNormalUser }} </div>
                                    <div class="widget-title">Total Normal User</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="{{ url('admin/user') }}" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                        </div> 
                    {{-- Part 3 End --}}

                       {{-- Part 4 Start--}}
                        <div class="col-md-3">
                            <div class="widget widget-warning widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"> {{ $TotalUserMearchant }} </div>
                                    <div class="widget-title">Total Mearchant</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="{{ url('admin/user') }}" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                        </div> 
                    {{-- Part 4 End --}}


                     {{-- Part 5 Start--}}
                        <div class="col-md-3">
                            <div class="widget widget-info widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-shopping-cart"></span>
                                </div>
                                <div class="widget-data">

                                    <div class="widget-int num-count"> {{ $TotalOrders }} </div>
                                    <div class="widget-title">Total Orders</div>
                               
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="{{ url('admin/orders') }}" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                        </div> 
                    {{-- Part 5 End --}}


                     {{-- Part 6 Start--}}
                        <div class="col-md-3">
                            <div class="widget widget-warning widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-shopping-cart"></span>
                                </div>
                                <div class="widget-data">

                                    <div class="widget-int num-count"> {{ $TotalOrderDetails }} </div>
                                    <div class="widget-title">Total Order Details</div>
                               
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="{{ url('admin/order_details') }}" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                        </div> 
                    {{-- Part 6 End --}}


                    {{-- End --}}
                    
                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
   
  </script>
@endsection





