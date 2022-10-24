<!DOCTYPE html>
<html lang="en">
<head>
  <title>Public Health Institute Meeting Tracking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/fontawesome-free-5.15.4-web/css/all.js"></script>
<style>
.text-underline-hover {
  border-bottom: 1px solid #043927;
}
.text-underline-hover:hover {
  border-bottom: 1px solid white;
}
.text-align-justify {
 text-align: justify;
}
.maya-icon:hover {
 color: #1E90FF;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark" style="background:#043927">
  <div class="container-fluid px-1 px-xxl-5">
     <a class="navbar-brand" href="javascript:void(0)"><span class="display-6 fw-normal"><img src="logo.png" width="100px" height="100px"></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#maya-navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="maya-navbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item text-underline-hover">
        <div class="dropdown">
        <a class="nav-link text-white" href="javascript:void(0)">Dashboard</a> 
          <ul class="dropdown-menu bg-dark me-auto" aria-labelledby="dropdown-for-records">
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Training Plans</a></li>
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Meetings plans</a></li>
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Employees</a></li>
         </ul>
        </div>
        </li>
        <li class="nav-item text-underline-hover">
        <div class="dropdown">
         <a class="nav-link text-white dropdown-toggle" type="button" id="dropdown-for-records" data-bs-toggle="dropdown" aria-expanded="false">
          Records
         </a>
         <ul class="dropdown-menu bg-dark me-auto" aria-labelledby="dropdown-for-records">
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="registration.html">Training Plans</a></li>
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Meetings plans</a></li>
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Employees</a></li>
         </ul>
        </div>
        </li>
        <li class="nav-item text-underline-hover">
        <div class="dropdown">
         <a class="nav-link text-white dropdown-toggle" type="button" id="dropdown-for-schedules" data-bs-toggle="dropdown" aria-expanded="false">
          Schedules
         </a>
         <ul class="dropdown-menu bg-dark me-auto" aria-labelledby="dropdown-for-schedules">
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Training Schedules</a></li>
          <li class="nav-item text-underline-hover"><a class="nav-link text-white p-1" href="javascript:void(0)">Meetings Schedules</a></li>
         </ul>
        </div>
        </li>
        <li class="nav-item text-underline-hover">
          <a class="nav-link text-white" href="livemeeting.html" target="getframe">Live</a>
        </li>
        <li class="nav-item text-underline-hover">
          <a class="nav-link text-white" href="javascript:void(0)">Calendar</a>
        </li>
       </ul>
       <ul class="navbar-nav text-right">
        <li class="nav-item">
          <a class="nav-link text-white" href="javascript:void(0)"><!--Settings--><i class="fas fa-cog maya-icon" style="font-size:24px;"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="javascript:void(0)"><!--Notifications--><i class="fas fa-bell maya-icon" style="font-size:24px;"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="javascript:void(0)"><!--User--><i class="fas fa-user maya-icon" style="font-size:24px;"></i></a>
        </li>
       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid px-1 px-xxl-5">
  <h5>Welcome to Meeting and Training Tracking System helps us to keep and track meetings and trainings conducted by EPHI!</h5>
</div>
<iframe src="event.html" style="height: 400px;width: 1500px;" name = "getframe" title="Iframe Example"></iframe>
<div class="fixed-bottom text-center bg-dark text-white mt-4 py-2" id="footer">Copyright &copy; 2022</div>
</body>
</html>
