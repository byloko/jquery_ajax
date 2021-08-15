@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Orders</a></li>
            <li><a href="">Orders List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Orders List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                   @include('message')
                    <a href="{{ url('admin/orders/add') }}" class="btn btn-primary" title="Add New Orders"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Orders</span></a> 
                    {{-- End --}}

                    {{-- Search Box Start --}}
            <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Orders Search</h3>
                  </div>

                  <div class="panel-body" style="overflow: auto;">
                    <form action="" method="get">
                        <div class="col-md-2">
                           <label>ID</label>
                           <input type="text" value="{{ Request()->idsss }}" class="form-control" placeholder="ID" name="idsss">
                        </div>

                        <div class="col-md-3">
                           <label>User Name</label>
                           <input type="text" class="form-control" value="{{ Request()->name }}" placeholder="User Name" name="name">
                        </div>
                        
                        <div class="col-md-3">
                           <label>Orders Name</label>
                           <input type="text" class="form-control" value="{{ Request()->orders_name }}" placeholder="Orders Name" name="orders_name">
                        </div>
                       
                        <div class="col-md-3">
                           <label>Orders Total Price (₹)</label>
                           <input type="text" class="form-control" value="{{ Request()->orders_total_price }}" placeholder="Orders Total Price (₹)" name="orders_total_price">
                        </div>
                                              
                        <div style="clear: both;"></div>
                        <br>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" value="Search">
                           <a href="{{ url('admin/orders') }}" class="btn btn-success">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>  

                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Orders List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>User Name</th>
                              <th>Orders Name</th>
                              <th>Orders Total Price (₹)</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getrecord as $value)
                          <tr>
                              <td>{{ $value->id }}</td>
                              <td>{{ !empty($value->user->name) ? $value->user->name : '' }}</td>
                              <td>{{ $value->orders_name }}</td>
                              <td>₹{{ $value->orders_total_price }}</td>
                            
                              <td>
                             <a href="{{ url('admin/orders/edit/'.$value->id) }}" class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>  
                            <a href="{{ url('admin/orders/view/'.$value->id) }}" class="btn btn-primary btn-rounded btn-sm"><span class="fa fa-eye"></span></a>
                            

     						           <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_record('{{ url('admin/orders/delete/'.$value->id) }}');"><span class="fa fa-trash-o"></span></button> 
                   


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
