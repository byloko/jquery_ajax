@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Mearchant</a></li>
            <li><a href="">Mearchant List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Mearchant List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                   @include('message')
                   <a href="{{ url('admin/mearchant/add') }}" class="btn btn-primary" title="Add New Mearchant"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Mearchant</span></a>
                    {{-- End --}}

                    {{-- Search Box Start --}}
            <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Mearchant Search</h3>
                  </div>

                  <div class="panel-body" style="overflow: auto;">
                    <form action="" method="get">
                        <div class="col-md-3">
                           <label>ID</label>
                           <input type="text" value="{{ Request()->idsss }}" class="form-control" placeholder="ID" name="idsss">
                        </div>
                        <div class="col-md-3">
                           <label>First Name</label>
                           <input type="text" class="form-control" value="{{ Request()->name }}" placeholder="First Name" name="name">
                        </div>
                       
                        <div class="col-md-3">
                           <label>Email ID</label>
                           <input type="email" class="form-control" value="{{ Request()->email }}" placeholder="Email ID" name="email">
                        </div>
                        <div class="col-md-3">
                           <label>Mobile Number</label>
                           <input type="text" class="form-control" value="{{ Request()->mobile }}" placeholder="Mobile Number" name="mobile">
                        </div>

                       
                     
                        
                        <div style="clear: both;"></div>
                        <br>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" value="Search">
                           <a href="{{ url('admin/mearchant') }}" class="btn btn-success">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>  

                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Mearchant List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>First Name</th>
                             
                              <th>Email ID</th>
                              <th>Mobile Number</th>
                  
                              <th>Mearchant Profile</th>
                                <th>Type</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getrecord as $value)
                          <tr>
                              <td>{{ $value->id }}</td>
                              <td>{{ $value->name }}</td>
                          
                              <td>{{ $value->email }}</td>
                              <td>{{ $value->mobile }}</td>
                          
                            <td> 
                                  @if(!empty($value->user_profile))
                            <img src="{{ url('upload/profile/'.$value->user_profile) }}" style="height:100px;"> 
                                      {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this record?')" href="{{ url('admin/mearchant/mearchant_delete/'.$value->id) }}"><span class="fa fa-trash-o"></span></a> --}}     

                                  @endif
                              </td>

                                <td>
                                 <?php if ($value->is_type == '1') { ?>
                                 <span class="label label-success" style="font-size: 12px;">Normal User</span>
                                    
                                 <?php  }elseif ($value->is_type == '2') { ?>
                                 <span class="label label-warning" style="font-size: 12px;">Mearchant</span>
                                    
                                <?php }   ?>

                                </td>



                              
                              <td>
                                 <a href="{{ url('admin/mearchant/view/'.$value->id) }}" class="btn btn-primary btn-rounded btn-sm"><span class="fa fa-eye"></span></a> 


                                 <a href="{{ url('admin/mearchant/edit/'.$value->id) }}" class="btn btn-success btn-rounded btn-sm"><span class="fa fa-pencil"></span></a> 
                        
                            

     						           <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_record('{{ url('admin/mearchant/delete/'.$value->id) }}');"><span class="fa fa-trash-o"></span></button> 
                   


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
