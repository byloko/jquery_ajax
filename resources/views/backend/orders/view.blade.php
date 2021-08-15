@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Orders</a></li>
            <li><a href="">View Orders</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> View Orders</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
 @include('message')
                    {{-- start --}}
                     <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h3 class="panel-title">View Orders</h3>
                           </div>
                           <div class="panel-body">
                              
                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Orders ID :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    
                                    {{ $getrecord->id }}

                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                User Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    
                                  {{ !empty($getrecord->user->name) ? $getrecord->user->name : '' }}
                                    
                                 </div>
                              </div>

                             

                               <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Orders Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->orders_name }}
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Orders Total Price (₹) :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   ₹{{ $getrecord->orders_total_price }}
                                 </div>
                              </div>

                           
                         
                             

                           </div>
                          
                        </div>
                   </form>
                    {{-- End --}}


                    {{-- Start --}}

       <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Order Details List</h3>
            </div>
           

        <div class="panel-body" style="overflow: auto;">
            <table  class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Orders Name</th>
                        <th>Item Name</th>
                        <th>Item Total Price (₹)</th>
                        <th>Item Price Per KG</th>
                        <th>Item Weight</th>
                        <th>Unite</th>
                        <th>Unite Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                    @endphp
                    @forelse($getrecord->get_order_details as $value)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ !empty($value->get_orders_name->orders_name) ? $value->get_orders_name->orders_name : '' }}</td>
                        <td>{{ $value->item_name }}</td>
                        <td>₹{{ $value->item_total_price }}</td>
                        <td>{{ $value->item_price_per_kg }}</td>
                        <td>{{ $value->item_weight }}</td>
                          <td>{{ $value->unite }}</td>
                                <td>{{ $value->unite_name }}</td>
                       <td>
                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('admin/orders/view_delete/'.$value->id) }}" class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-trash-o"></span></a>
                       </td>
                    </tr>

                    @php
                    $i++;
                    @endphp
                   @empty
                    <tr>
                        <td colspan="100%">Record not found.</td>

                    </tr>
                   @endforelse
                </tbody>

            </table>
            <div style="float: right">
              
            </div>
        </div>

 <div class="panel-footer">
   <a class="btn btn-primary pull-right" href="{{ url('admin/orders') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;<span class="bold">Back</span></a>
 </div>

</div>

                     {{-- End --}}
                    
                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
   
  </script>
@endsection



