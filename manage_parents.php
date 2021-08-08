<!DOCTYPE html>
<html>
<head>
  <title>Manage Parent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body>

    <div class="bgimg32">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <div class="row" style="margin-left: 5px;width: 100%;">
        <a href="" class="navbar-brand text-warning font-weight-bold">STUDENTsCorneR</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>
  </div><br>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#" style="margin-top:48px">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper" style="margin-top:50px">
    <div class="sidebar-content">
      <?php include("header.php") ?>
      <!-- sidebar-header  -->
      
      <!-- sidebar-search  -->
      <?php include("sidebar.php") ?>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <?php include("footer.php") ?>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content ">
    
      <div class="navbar navbar-expand-md  mt-5">
        <div class="container">
          <div class="col-6">
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">MANAGE PARENT</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"  style="float: right" value="Parent Info">
          </div>
        </div>
      </div>

      <div class="topnav mt-4">
        <a class="active" href="#home">
          <i class="fa fa-paper-plane" aria-hidden="true"> Export</i>
        </a>
        <a href="#about">
          <i class="fa fa-reply" aria-hidden="true"> Import</i>
        </a>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>

        <div class="row mt-3">
                  
                    <div class="col-md-12">
                        <ul class="nav nav-tabs ml-10">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#invoice_table" data-toggle="tab">Parent List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="#add_invoice" data-toggle="tab">Add Parent</a>
                            </li>
                            
                        </ul>
                    </div>
                </div><br><br>

      <div class="tab-content container">
        <div class="tab-pane active show" id="invoice_table">
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr >
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="selectAll">
                                                    <label class="custom-control-label" for="customCheckThis"></label>
                                                </div>
                                            </th>
                                            <th>Parent Id</th>
                                            <th>Parent Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                     
                                        <tr>
                                            <td>   
                                              <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="" class="custom-control-input selectAll_row">
                                                      <label class="custom-control-label" for="customCheckThis"></label>
                                                </div>
                                            </td>
                                            <td>09</td>
                                            <td>Viven Sharma</td>
                                            <td>Viven</td>
                                            <td>viven123@gmail.com</td>
                                            <td>
                                              <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                                              <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>   
                                              <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="" class="custom-control-input selectAll_row">
                                                      <label class="custom-control-label" for="customCheckThis"></label>
                                                </div>
                                            </td>
                                            <td>09</td>
                                            <td>Viven Sharma</td>
                                            <td>Viven</td>
                                            <td>viven123@gmail.com</td>
                                            <td>
                                              <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                                              <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>   
                                              <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="" class="custom-control-input selectAll_row">
                                                      <label class="custom-control-label" for="customCheckThis"></label>
                                                </div>
                                            </td>
                                            <td>09</td>
                                            <td>Viven Sharma</td>
                                            <td>Viven</td>
                                            <td>viven123@gmail.com</td>
                                            <td>
                                              <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                                              <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                

              <div class="tab-pane" id="add_invoice">
                <form>
                  <div class="form-group">
                    <label for="user" class="col-form-label">Username:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="radio">
                    <label>Gender: <input type="radio" name="optradio" checked>Male <input type="radio" name="optradio">Female</label>
                  </div>
                  
                  <div class="form-group">
                    <label for="address" class="col-form-label">Address:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-form-label">Phone No:</label>
                    <input type="number" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="option" class="col-form-label">Profession:</label>
                    <select type="text" class="form-control" id="option">
                      <option>Service Man</option>
                      <option>Bussiness Man</option>
                      <option>Doctor</option>
                      <option>Web Developer</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-4">Student Details:
                    </div>
                    <div class="col-8">
                      <button type="button" class="btn btn-danger" dat-toggle="modal" data-target="#listModal">Link Student</button>
                    </div>
                  </div>
                <div class="modal-footer mt-4">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Add</button>
                </div>
            </form>
          </div>

            </div>   
        
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Edit Parent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="user" class="col-form-label">Username:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="radio">
                    <label>Gender: <input type="radio" name="optradio" checked>Male <input type="radio" name="optradio">Female</label>
                  </div>
                  
                  <div class="form-group">
                    <label for="address" class="col-form-label">Address:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-form-label">Phone No:</label>
                    <input type="number" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="option" class="col-form-label">Profession:</label>
                    <select type="text" class="form-control" id="option">
                      <option>Service Man</option>
                      <option>Bussiness Man</option>
                      <option>Doctor</option>
                      <option>Web Developer</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-4">Student Details:
                    </div>
                    <div class="col-8">
                      <button type="button" class="btn btn-danger" dat-toggle="modal" data-target="#listModal">Link Student</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Edit</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <p>Are you sure you want to delete this row?</p>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Delete</button>
              </div>
            </div>
          </div>
        </div>


        

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-warning">
          <h5 style="font-weight: bold;">Parent Detail</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
            </div>
            <div class="modal-body">
              <div class="row">
                    <div class="col-4">
                    <img src="./images/pic/not_1.png" alt="student_image" style="width:180px">
                    </div>

                          <div class="col-8">
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Student Name:</div>
                              <div class="col-6">Lakshmi Vishwanatan</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Batch:</div>
                              <div class="col-6">B.scIT</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">RollNo:</div>
                              <div class="col-6">10011001</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Father Name:</div>
                              <div class="col-6">Viven Vishwanatan</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Profession:</div>
                              <div class="col-6">ServiceMan</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Mother Name:</div>
                              <div class="col-6">Rina Vishwanatan</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Profession:</div>
                              <div class="col-6">HomeMaker</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">EmailId:</div>
                              <div class="col-6">abc123@gmail.com</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">PhoneNo:</div>
                              <div class="col-6">9876786543</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


  </main>
  <!-- page-content" -->
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script type="text/javascript">

    $('#addModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var recipient = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
    </script>

    <script type="text/javascript">
      
    $('#editModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
    </script>

    <script type="text/javascript">
      $('#deleteModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        modal.find('.modal-title').text('New message to' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
    </script>
   
</body>
</html>