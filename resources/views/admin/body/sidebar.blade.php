 @php
 $prefix = Request::route()->getPrefix();
 $route = Route::current()->getName();

 @endphp


 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Islamic</b> University</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="#" >
          <a href="#">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
    @if(Auth::user()->role == 'Admin')
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>View User</a></li>
            <li><a href="#"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
        @endif
		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="#"><i class="ti-more"></i>Your Profile</a></li>
        <li><a href="#"><i class="ti-more"></i>Change Password</a></li>
            
          </ul>
        </li>



<li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
          <a href="#">
            <i data-feather="credit-card"></i> <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="#"><i class="ti-more"></i>Student Class</a></li>
         <li><a href="#"><i class="ti-more"></i>Student Year</a></li>
         <li><a href="#"><i class="ti-more"></i>Student Group</a></li>
         <li><a href="#"><i class="ti-more"></i>Student Shift</a></li>
         <li><a href="#"><i class="ti-more"></i>Fee Category</a></li>
        <li><a href="#"><i class="ti-more"></i>Fee Category Amount</a></li>
         <li><a href="#"><i class="ti-more"></i>Exam Type</a></li>
         <li><a href="#"><i class="ti-more"></i>School Subject</a></li>
         <li><a href="#"><i class="ti-more"></i>Assign Subject</a></li>
         <li><a href="#"><i class="ti-more"></i>Designation </a></li>
         
            
          </ul>
        </li>


<li class="treeview {{ ($prefix == '/students')?'active':'' }}">
          <a href="#">
             <i data-feather="hard-drive"></i></i> <span>Student Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="#"><i class="ti-more"></i>Student Registration</a></li>

        <li><a href="#"><i class="ti-more"></i>Roll Generate</a></li>
        <li><a href="#"><i class="ti-more"></i>Registration Fee </a></li>
         <li><a href="#}"><i class="ti-more"></i>Monthly Fee </a></li>
         <li><a href="#"><i class="ti-more"></i>Exam Fee </a></li>
         
         
            
          </ul>
        </li>


<li class="treeview {{ ($prefix == '/employees')?'active':'' }}">
          <a href="#">
            <i data-feather="package"></i> <span>Employee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li  class="#"><a href="#"><i class="ti-more"></i>Employee Registration</a></li>

         <li  class="#"><a href="#"><i class="ti-more"></i>Employee Salary</a></li>

         <li><a href="#"><i class="ti-more"></i>Employee Leave</a></li>
         <li><a href="#"><i class="ti-more"></i>Employee Attendance</a></li>
          <li><a href="#"><i class="ti-more"></i>Employee Monthly Salary</a></li>
 
            
          </ul>
        </li>



<li class="treeview {{ ($prefix == '/marks')?'active':'' }}">
          <a href="#">
             <i data-feather="edit-2"></i> <span> Marks Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="#"><a href="#"><i class="ti-more"></i>Marks Entry</a></li> 
      <li class="#"><a href="#"><i class="ti-more"></i>Marks Edit</a></li>

       <li class="#"><a href="#"><i class="ti-more"></i>Marks Grade</a></li> 

            
          </ul>
        </li>





<li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
          <a href="#">
            <i data-feather="inbox"></i> <span> Accounts Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="#"><a href="#"><i class="ti-more"></i>Student Fee</a></li> 
        <li class="#"><a href="#"><i class="ti-more"></i>Employee Salary</a></li> 

        <li class="#"><a href="#"><i class="ti-more"></i>Other Cost</a></li>

            
          </ul>
        </li>

		
        
		 
        <li class="header nav-small-cap">Report Interface</li>
		  
       <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
          <a href="#">
            <i data-feather="server"></i></i> <span> Reports Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="#"><a href="#"><i class="ti-more"></i>Monthly-Yearly Profite</a></li> 

          <li class="#"><a href="#"><i class="ti-more"></i>MarkSheet Generate</a></li>

           <li class="#"><a href="#"><i class="ti-more"></i>Attendance Report</a></li>

           <li class="#"><a href="#"><i class="ti-more"></i>Student Result </a></li>

           <li class="#"><a href="#"><i class="ti-more"></i>Student ID Card </a></li>    

             
        

            
          </ul>
        </li>
		
		 
		  
		 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>