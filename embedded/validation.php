<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Validations - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon_152.png">

    
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Bootstrap Core CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/uptown.css">
    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      #page-wrapper{
        background: #f5f5f5;
      }

      .breadcrumb{
        background: #fff;
      }

      .w3-card-1{
          background: #fff;
          box-shadow: 0px 0px 2px 1px lightgray;
      }

      .margin-0{
        margin-left: 0px !important;
        margin-right: 0px !important;
      }

      .row-height {
        display: table;
        table-layout: fixed;
        height: 100%;
        width: 100%;
      }
      .col-height {
        display: table-cell;
        float: none;
        height: 100%;
      }
      .w3-orange{
          background: #f46d19 !important;
      }
      .current-active{
          position: relative !important;
          color: white !important;
      }
      .current-active:after{
          content:"";
          display:block;
          width:0;
          border:10px solid #f5f5f5;
          border-color:transparent #f5f5f5 transparent transparent;
          position:absolute;
          top:25%;
          right:0%;
          margin-left:-10px;
      }
      .active:after{
          /*top:11%;*/
      }
      .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(../images/Preloader_3.gif) center no-repeat #fff;
      }
      a, a:active, a:focus{
        outline: none !important;
        text-decoration: none !important;
      }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/Footer_logo.png" class="img-responsive nav-btn" style="position:relative; bottom:5px; display:inline;"  alt="p" width="100" height="10" style="object-fit: contain; display:inline;"> Admin</a>
            </div>
            <!-- Top Menu Items -->
            <!-- <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Hi, Stella &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul> -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse text-left">
                <ul class="nav navbar-nav side-nav">
                    <!-- <li class="active">
                        <a class="current-active" href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li> -->
                    
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#company"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-tags"></i> Orders <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="company" class="collapse in">
                            <li class="w3-indigo">
                                <a class="current-active" href="javascript:;"> Not in My List</a>
                            </li>
                            <li>
                                <a href="javascript:;"> Parent Missing</a>
                            </li>
                            <li>
                                <a href="javascript:;"> Unassigned</a>
                            </li>
                            <li>
                                <a href="javascript:;"> Unfulfilled</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#challenge"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-users"></i> Customers <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="challenge" class="collapse in">
                            <li>
                                <a href=""> Without Region</a>
                            </li>
                            <li>
                                <a href=""> Location Duplicate</a>
                            </li>
                             <li>
                                <a href=""> Vendor Company Name Missing</a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#student"><i class="fa fa-fw fa-arrows-v"></i> <i class="fa fa-users"></i> Students <span><i class="fa fa-fw fa-caret-up pull-right"></i></span></a>
                        <ul id="student" class="collapse in">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user-plus"></i> Add Student</a>
                            </li>
                            <li>
                                <a href="admin_manage_students.php"><i class="fa fa-fw fa-gear"></i> Manage Students</a>
                            </li>
                        </ul>
                    </li> -->
                    
                </ul>
            </div>
            <div class="w3-clear"></div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h1 class="page-header">
                            Validation
                            <small>Orders</small>
                        </h1>
                        <ol class="breadcrumb w3-card-1">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_dashboard.php">Orders</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Not in My List
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row heading-->

                <!-- Page Body -->
                <div class="row">
                    <div class="col-lg-12">

                     <div class="row breadcrumb w3-card-1 margin-0">
                      <div class="card-section">
                        <!-- <div class="overflow-container1">
                          <br>
                          <div class="input-group">
                          <select>
                            <option>All</option>
                            <option>ID</option>
                            <option>Shopify Order Id</option>
                            <option>Customer</option>
                            <option>Order Date</option>
                            <option>Status</option>
                          </select>
                          <input type="search" />
                          <button class="secondary tip icon-close" data-hover="Clear"></button>
                          <button class="secondary tip icon-search" data-hover="Search"></button>
                        </div>
                        <br> -->
                          <table>
                          <thead>
                            <tr>
                              <th><b>ID</b></th>
                              <th><b>Shopify Order Id</b></th>
                              <th><b>Customer</b></th>
                              <th><b>Qty.</b></th>
                              <th><b>Order Date</b></th>
                              <th><b>Status</b></th>
                              <th><b>Action</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $count = 0; while($count++ < 10){?>
                            <tr>
                              <td>1538</td>
                              <td>5259617873</td>
                              <td>Sureshsha Sureshsha</td>
                              <td>2</td>
                              <td>2017-05-11 20:19:24 UTC</td>
                              <td><span class="tag green">Completed</span></td>
                              <td>
                                <a href="admin/orders/5259617873"><button class="secondary">View</button></a>
                                <!-- <span class="button-group">
                                  <button class="secondary tip icon-edit" data-hover="Edit"></button>
                                  <button class="secondary tip icon-redo" data-hover="Sync"></button>
                                </span> -->
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        </div>
                        <br>
                        <article>
                        <span class="input-group" style="justify-content: center;">
                          <button class="secondary tip icon-prev" disabled="disabled" data-hover="First"><i class="icon-prev"></i></button>
                          <button class="secondary tip icon-prev" disabled="disabled" data-hover="Prev"></button>
                          <span class="append" style="font-size:8px; color: #c3cfd8;">&#9899;&#9899;&#9899;</span>
                          <button class="secondary1">1</button>
                          <button class="secondary" data-href="page.php">2</button>
                          <button class="secondary">3</button>
                          <span class="append" style="font-size:8px; color: #c3cfd8;">&#9899;&#9899;&#9899;</span>
                          <button class="secondary tip icon-next" data-hover="Next"></button>
                          <button class="secondary tip icon-next" data-hover="Last"><i class="icon-next"></i></button>
                        </span>
                        <br>
                        <!-- <div class="column four hide1"> -->
                          <div class="input-group" style="justify-content: center;">
                            <input type="text" min="1" max="7" placeholder="Go to Page" style="max-width:100px;"/>
                            <button class="secondary1">Go</button>
                          </div>
                        <!-- </div> -->
                      </article>
                      </div>
                    </div>

                    <!-- <div class="col-lg-12">
                      <div class="row breadcrumb1 w3-card-11 margin-0">
                         <ul class="pagination center-block">
                          <li class="disabled1 active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                      </div>
                    </div> -->

                  </div>
                    <!-- ------------end----- -->



                    </div>
                </div>
                <!-- /.row body-->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(".collapse").on("shown.bs.collapse", arrowdown);
      $(".collapse").on("hidden.bs.collapse", arrowup);

      function arrowdown(){
      anchor = $(this).prev('a');
      span = anchor.find('span');
      span.html('<i class="fa fa-fw fa-caret-up pull-right"></i>');
      }

      function arrowup(){
      anchor = $(this).prev('a');
      span = anchor.find('span');
      span.html('<i class="fa fa-fw fa-caret-down pull-right"></i>');
      }
    </script>
</body>

</html>
