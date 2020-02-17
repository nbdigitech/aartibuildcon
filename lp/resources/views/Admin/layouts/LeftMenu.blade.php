<style>
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-top:6px;
}
.dropdown-container {
  display: none;
  padding-left: 8px;
  outline:none;
}
.fa-caret-down {
  float: right;
  color: #ffffff;
  margin-left:7px;
}
</style>
	<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{url('/')}}/public/assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="{{url('/')}}/Admin" class="simple-text logo-normal">
        <center> <img src="{{url('/')}}/public/website/img/Aarti_logo.png" style="width: 180px;">  </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('Admin/Lead')}}">
              <i class="fa fa-home"></i>
               Leads
              </a>
            </li>
            
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="{{route('Admin/FacebookLead')}}">-->
            <!--  <i class="fa fa-list"></i>-->
            <!--   Manage Other Leads-->
            <!--  </a>-->
            <!--</li>-->

          <li class="nav-item">
              <a class="nav-link" href="{{route('Admin/SendSMS')}}">
              <i class="fa fa-comments"></i>
               Send SMS
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{route('Admin/SendEmail')}}">
              <i class="fa fa-envelope"></i>
               Send Email
              </a>
          </li>

        <form action="{{route('logout')}}" method="post">
            @csrf
            <li class="nav-item">
              <a class="nav-link">
              <i class="fa fa-power-off"></i>
                <p>
                  <input type="submit" style="cursor: pointer;color:white;background-color:transparent;border:none;outline:none;margin-left:-7px;" value="Log out">
                </p>
              </a>
            </li>
          </form>
           <br><br><br><br>
<br><br>
<br><br>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('Admin/Ads')}}">
              <i class="fa fa-circle"></i>
              <p> Ads </p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('Admin/Users')}}">
              <i class="fa fa-user"></i>
              <p> Users </p>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
