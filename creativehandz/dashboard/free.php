/// <reference path="../typings/globals/jquery/index.d.ts" />

<?php include_once 'auth.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <title>
    Creative Hands | Freelancer
  </title>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Projects</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Explore</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons location_world"></i>
              <p>Blog</p>
            </a>
          </li>
          <li>
            <a data-toggle="modal" data-target="#profileModal">
              <i class="now-ui-icons users_single-02"></i>
              <p >User Profile</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>Payment Method</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>Logout</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <h2><?php echo strtoupper($user['username']); ?></h2>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile Setting</a>
                  <a class="dropdown-item" href="#">Payment Details</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Skills</h5>
                
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div class="px-2">
                    <div class="progress my-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Web Design</div>
                    </div>

                    <div class="progress my-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Web Design</div>
                    </div>

                    <div class="progress my-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Web Design</div>
                    </div>

                    <div class="progress my-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Web Design</div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Recent Projects</h5>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div class="p-2">
                    <p># Crusher UI design <i>Ted Tech</i></p>
                    <p># Crusher UI design <i>Ted Tech</i></p>
                    <p># Crusher UI design <i>Ted Tech</i></p>
                    <p># Crusher UI design <i>Ted Tech</i></p>
                    <p># Crusher UI design <i>Ted Tech</i></p>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Trending Projects</h5>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-left">E-commerce website using Magento Framework</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="View Task">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons business_money-coins"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-left">E-commerce website using Magento Framework</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="View Task">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons business_money-coins"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-left">E-commerce website using Magento Framework</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="View Task">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons business_money-coins"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-left">E-commerce website using Magento Framework</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="View Task">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-success btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons business_money-coins"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

       <!-- Start Of Modals -->

        <!-- Profile Modal -->
        
            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable col-md-12" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="profile">
                        <div class="row">
                          <div class=" col-md-6">
                            <img src="../assets/img/download.jpg" alt="..." class="img-circle profile_img">
                          </div>
                          <div class="col-md-6 ">
                            
                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" disabled value="<?php echo $user['username'] ?>">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control"  disabled value="<?php echo $user['email'] ?>">
                              </div>
                              <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" name="gender" disabled value="<?php echo $user['gender'] ?>">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" required placeholder="First Name" name="fname" value="<?php echo $user['fname']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label>Other Names</label>
                                <input type="text" class="form-control" required placeholder="Last Name" name="oname" value="<?php echo $user['oname'] ?>">
                              </div>
                            </div>
                        </div>
                       <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" required placeholder="Home Address" name="address" value="<?php echo $user['address'] ?>">
                            </div>
                          </div>
                        </div>
                        

                       <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label>Skills</label>
                          <textarea rows="4" cols="80" class="form-control" required name="skills" placeholder="Please specify"><?php echo $user['skills'] ?></textarea>
                      </div>
                    </div>
                  </div>

                      <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <textarea rows="4" cols="80" class="form-control" required name="descp" placeholder="Here can be your description"><?php echo $user['descp'] ?></textarea>
                      </div>
                    </div>
                  </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
             </form>
                  </div>
                </div>
              </div>
            </div>
        
        <!-- End of Profile modal -->


        <!-- End of modal content -->


    

      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Creative Hands</a>. Coded by
            <a href="https://whitehat.com.ng" target="_blank">Whitehat Technologies</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Profile  -->
    <script>
      $(function() {
        $('#profile').submit(function(event){
           event.preventDefault();

          var formData = $(this).serialize();

          $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'free_functions.php?type=profile', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })
          .done(function(data){
            alert(data);

          });

        });
    
});
  </script>
  <!-- Profile -->
  








  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
