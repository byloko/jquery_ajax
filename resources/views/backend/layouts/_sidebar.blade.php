  <div class="page-sidebar">

        <ul class="x-navigation">
            

            <li class="" style="background: #F85F6A; text-align: center;">
                <a style="font-size: 22px;" href="{{ url('admin/dashboard') }}"><b>jQuery Ajax</b></a>
                <a href="#" class="x-navigation-control"></a>
            </li>

            <li class="@if ( Request::segment(2) == 'dashboard') active @endif">
                <a href="{{ url('admin/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>

            <li class="@if ( Request::segment(2) == 'user') active @endif">
                <a href="{{ url('admin/user') }}"><span class="fa fa-user"></span> <span class="xn-text">User List</span></a>
            </li>

            <li class="@if ( Request::segment(2) == 'mearchant') active @endif">
                <a href="{{ url('admin/mearchant') }}"><span class="fa fa-user"></span> <span class="xn-text">Mearchant List</span></a>
            </li>

             <li class="@if ( Request::segment(2) == 'product') active @endif">
                <a href="{{ url('admin/product') }}"><span class="fa fa-adn"></span> <span class="xn-text">Product List</span></a>
            </li>   

            <li class="@if ( Request::segment(2) == 'orders') active @endif">
                <a href="{{ url('admin/orders') }}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Orders List</span></a>
            </li>

             <li class="@if ( Request::segment(2) == 'order_details') active @endif">
                <a href="{{ url('admin/order_details') }}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Order Details List</span></a>
            </li>

            <li class="@if (Request::segment(2) == 'version_setting') active @endif">
                <a href="{{ url('admin/version_setting') }}"><span class="fa fa-refresh"></span><span class="xn-text">Version Setting List</span></a>
            </li>

            <li class="@if ( Request::segment(2)== 'myaccount') active @endif">
                <a href="{{ url('admin/myaccount') }}"><span class="fa fa-cog"></span> <span class="xn-text">My Account</span></a>
            </li>


              
            
           
          


        </ul>
    </div>