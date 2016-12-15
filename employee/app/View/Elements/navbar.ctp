<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo Router::url('/', true);  ?>Home/home">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Leave <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo Router::url('/', true);  ?>ManageLeave/manage_leave">Manage Leave</a></li>
            <li><a href="<?php echo Router::url('/', true);  ?>ManageLeave/leave_type">Leave Type</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Salary <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo Router::url('/', true);  ?>ManageSalary/manage_salary">Manage Salary</a></li>
            <li><a href="<?php echo Router::url('/', true);  ?>ManageSalary/salary_slip">Salary Slip</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo Router::url('/', true);  ?>users/logout">Logout  <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>