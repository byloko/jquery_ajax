@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Order Details</a></li>
            <li><a href="">Order Details List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Order Details List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                   @include('message')
                  {{--  <a href="{{ url('admin/orders/add') }}" class="btn btn-primary" title="Add New Orders"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Orders</span></a> --}}
                    {{-- End --}}

                    {{-- Search Box Start --}}
            <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Order Details Search</h3>
                  </div>

                  <div class="panel-body" style="overflow: auto;">
                    <form action="" method="get">
                        <div class="col-md-2">
                           <label>ID</label>
                           <input type="text" value="{{ Request()->idsss }}" class="form-control" placeholder="ID" name="idsss">
                        </div>

                        <div class="col-md-2">
                           <label>Order Name</label>
                           <input type="text" class="form-control" value="{{ Request()->orders_name }}" placeholder="Order Name" name="orders_name">
                        </div>
                        
                        <div class="col-md-2">
                           <label>Item Name</label>
                           <input type="text" class="form-control" value="{{ Request()->item_name }}" placeholder="Item Name" name="item_name">
                        </div>
                       
                        <div class="col-md-2">
                           <label>Item Total Price (₹)</label>
                           <input type="text" class="form-control" value="{{ Request()->item_total_price }}" placeholder="Item Total Price (₹)" name="item_total_price">
                        </div>

                        <div class="col-md-2">
                           <label>Item Price Per KG</label>
                           <input type="text" class="form-control" value="{{ Request()->item_price_per_kg }}" placeholder="Item Price Per KG" name="item_price_per_kg">
                        </div>
                        
                        <div class="col-md-2">
                           <label>Item Weight</label>
                           <input type="text" class="form-control" value="{{ Request()->item_weight }}" placeholder="Item Weight" name="item_weight">
                        </div>
                                              
                        <div style="clear: both;"></div>
                        <br>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" value="Search">
                           <a href="{{ url('admin/order_details') }}" class="btn btn-success">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>  

                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Order Details List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Order Name</th>
                              <th>Item Name</th>
                              <th>Item Price (₹)</th>
                              <th>Item Price Per KG</th>
                              <th>Item Weight</th>
                              <th>Unite</th>
                              <th>Unite Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getrecord as $value)
                          <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ !empty($value->get_orders_name->orders_name) ? $value->get_orders_name->orders_name : '' }}</td>
                                <td>{{ $value->item_name }}</td>
                                <td>₹{{ $value->item_total_price }}</td>
                                <td>{{ $value->item_price_per_kg }}</td>
                                <td>{{ $value->item_weight }}</td>
                                <td>{{ $value->unite }}</td>
                                <td>{{ $value->unite_name }}</td>
                            
                              <td>
                        {{--     <a href="{{ url('admin/orders/edit/'.$value->id) }}" class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>  --}}
                        
                            

     						           <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_record('{{ url('admin/order_details/delete/'.$value->id) }}');"><span class="fa fa-trash-o"></span></button> 
                   


                               <!-- MESSAGE BOX-->
     
                    <!-- END MESSAGE BOX-->    


                              </td>
                          </tr>
                         @empty
                          <tr>
                              <td colspan="100%">Record not found.</td>

                          </tr>
                          @endforelse
                      </tbody>

                  </table>
                  <div style="float: right">
                        {{ $getrecord->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
                  </div>
              </div>

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
