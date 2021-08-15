@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">User</a></li>
            <li><a href="">View User</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> View User</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                     <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h3 class="panel-title">View User</h3>
                           </div>
                           <div class="panel-body">
                              
                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 User ID :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    
                                    {{ $getrecord->id }}

                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 First Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    
                                  {{ !empty($getrecord->name) ? $getrecord->name : '' }}
                                    
                                 </div>
                              </div>

                             

                               <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Email ID :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->email }}
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Mobile Number :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->mobile }}
                                 </div>
                              </div>

                                <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 User Profile :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   @if(!empty($getrecord->user_profile))
                                      <img src="{{ url('upload/profile/'.$getrecord->user_profile) }}" style="height:100px;">
                                     @endif
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                 Type :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                    <?php if ($getrecord->is_type == '1') { ?>
                                 <span class="label label-success" style="font-size: 12px;">Normal User</span>
                                    
                                 <?php  }elseif ($getrecord->is_type == '2') { ?>
                                 <span class="label label-warning" style="font-size: 12px;">Mearchant</span>
                                    
                                <?php }   ?>
                                 </div>
                              </div>
                          
                             <div class="form-group">
                                 <label class="col-md-3 control-label">
                                Amount :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->amount }}
                                 </div>
                              </div>

                                <div class="form-group">
                                 <label class="col-md-3 control-label">
                                Bank Holder Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->bank_holder_name }}
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                Account Number :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->account_number }}
                                 </div>
                              </div>

                               <div class="form-group">
                                 <label class="col-md-3 control-label">
                                IFSC Code :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->ifsc_code }}
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 control-label">
                                Branch Code :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->branch_code }}
                                 </div>
                              </div>

                               <div class="form-group">
                                 <label class="col-md-3 control-label">
                                Bank Name :
                                 </label>
                                 <div class="col-sm-5" style="margin-top: 8px;">
                                   {{ $getrecord->bank_name }}
                                 </div>
                              </div>
                              
                             

                           </div>
                           {{-- <div class="panel-footer">
                             <a class="btn btn-primary pull-right" href="{{ url('admin/user') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;<span class="bold">Back</span></a>
                           
                           </div> --}}
                        </div>
                   </form>
                    {{-- End --}}

                    {{-- Start View Form --}}

                     <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title">User Wallet Details List</h3>
                          </div>

                    <div class="panel-body" style="overflow: auto;">
                      <table  class="table table-striped table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Amount Transfer (₹)</th>
                                  <th>Type</th>
                                  <th>Date </th>
                                  <th>Status</th>
                                  <th>Change Status</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          @php 
                          $i = 1;
                          @endphp

                            @forelse($getrecord->get_users_wallet_details as $value)
                           <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $value->amount_transfer }}</td>
                          <td>
                            <?php
                               if( $value->money_type == '0'){
                            ?>
                            <span class="label label-success" style="font-size: 12px;">Add Money</span>
                            <?php } elseif ($value->money_type == '1') { ?>
                            <span class="label label-warning" style="font-size: 12px;">Withdraw Money</span>
                            <?php } ?>
                          </td>


                              <!--<td>{{ date('d-m-Y h:i A',strtotime($value->money_date)) }}</td>-->
                            <td>{{ date('d-m-Y H:i:s',strtotime($value->money_date)) }}</td>

                          <td>
                              <?php if($value->money_status == '0') { ?>
                              <span class="label label-warning" style="font-size: 12px;">Pending</span>
                              <?php } elseif($value->money_status == '1') { ?>
                              <span class="label label-success" style="font-size: 12px;">Success</span>
                              <?php } elseif($value->money_status == '2') { ?>
                              <span class="label label-danger" style="font-size: 12px;"> Decline</span>
                              <?php
                                }
                              ?>
                           </td>

                          <td>
                            <select class="form-control changeStatus" style="width: 100px;" id="{{ $value->id }}">
                              <option {{ ($value->money_status == '0') ? 'selected' : '' }} value="0">Pending</option>
                              <option {{ ($value->money_status == '1') ? 'selected' : '' }} value="1">Success</option>
                              <option {{ ($value->money_status == '2') ? 'selected' : '' }} value="2">Decline</option>
                            </select>
                          </td>

                          <td>
                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('admin/user/view_delete/'.$value->id) }}" class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-trash-o"></span></a>
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
                          <a class="btn btn-primary pull-right" href="{{ url('admin/user') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;<span class="bold">Back</span></a>
                       
                       </div> 

                  </div>

                   {{--  End View Form --}}
                    
                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
     $('.changeStatus').change(function(){
      var status_id = $(this).val();
      //alert(status_id);
      var order_id = $(this).attr('id');
      //alert(order_id);
      $.ajax({
        type:'GET',
        url:"{{ url('admin/user/changeStatus') }}",
        data: {status_id: status_id, order_id: order_id},
        dataType: 'JSON',
        success:function(data){
          alert('Status successfully changed.');
          window.location.href = "";
        }
      });
     });
  </script>
@endsection



