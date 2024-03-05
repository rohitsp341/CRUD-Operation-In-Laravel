

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style>

        #reg_btn{
            max-width: 40%;
        }
        #Logo_Image {     
            width: 140px;
            cursor: pointer;
        }
        
        .nav-item button {
            background-color: transparent;
            border: none;
            color: white;
        }

        .nav-item button:hover {
            color: #adb5bd; /* Set text color on hover */
        }

        .error-msg {
            color: #dc3545;
            font-weight: 600;
        }

        .success-msg {
            color: green;
            font-weight: 600;
        }

        #Register_Model {
            display: none;
        }

        #model {
            background: rgba(0, 0, 0, 0.9);
         
            position: fixed;
            left: 0%;
            top: 0%;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;
        }

        #model-form {
            background-color: #fff;
            width: 50%;
            position: relative;
            top: 1%;
            left:25%;
            right:25%;
       
            left: calc(50%-25%);
            padding: 15px;
            border-radius: 4px;
        }

        #Close-btn {
            background: red;
            color: white;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            position: absolute;
            top: -15px;
            right: -15px;
            cursor: pointer;
        }

        #edit_model{
            background: rgba(0, 0, 0, 0.9);
            position: fixed;
            left: 0%;
            top: 0%;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;

        }

        #edit_model-form{
            background-color: #fff;
            width: 50%;
            position: relative;
            top: 1%;
            left:25%;
            right:25%;
            left: calc(50%-25%);
            padding: 15px;
            border-radius: 4px;

        }
    </style>
</head>
<body>
   
    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">                                    
                            <a class="navbar-brand">
                                <!-- <img src="images/logo.png" id="Logo_Image" alt="Your Image"> -->
                                <h2 class="text-white">Student Management</h2>
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <button class="nav-link btn btn-transparent" id="Home_button">Home Student</button>
                                    </li>
                                    
                                    <!-- <li class="nav-item">
                                        <button class="nav-link btn btn-transparent" id="Update_button_nav">Edit</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link btn btn-transparent" id="Register_button">Register</button>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <button class="nav-link btn btn-transparent" id="Login_button">Login</button>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="model">
        <div id="model-form">
            <div class="container reg_btn" id="Register_click_btn">
                <div class="cal-md-14">
                    <div class="card mt-4">
                        <div class="crud-head mt-4">
                            <H4 class="text-center">Register Form</H4>
                        </div>


                        <form method="POST" id="ins_rec" >
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                    <span class="error-msg" id="msg_1"></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="YourEmail@email.com">
                                    <span class="error-msg" id="msg_2"></span>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="custom-select" name="country" id="country">
                                        <option value="" selected>Choose...</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Germany">Germany</option>
                                        <option value="UK">UK</option>
                                    </select>
                                    <span class="error-msg" id="msg_3"></span>
                                </div>
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <input type="date" name="bod" class="form-control">
                                    <span class="error-msg" id="msg_4"></span>
                                </div>

                                <div class="form-group">
                                    <label class="mr-3">Gender :- </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Male">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Female">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                    <span class="error-msg" id="msg_5"></span>
                                </div>
                                <div class="form-group">
                                    <span class="success-msg" id="sc_msg"></span>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success " id="Submit_btn">Save</button>
                                <button type="button" class="btn btn-danger" id="Cancel-btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit -->

    <div id="edit_model">
        <div id="edit_model-form">
            <div class="container reg_btn" id="Register_click_btn">
                <div class="cal-md-14">
                    <div class="card mt-4">
                        <div class="crud-head mt-4">
                            <H4 class="text-center">Edit Form</H4>
                        </div>

                        
                        <form method="POST" id="Update_form" >
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type='hidden' name='edit_id' class='form-control' id='edit_id'>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="edit_username"  id="edit_username" class="form-control" placeholder="Username">
                                    <span class="error-msg" id="msg_1"></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="edit_email" class="form-control" placeholder="YourEmail@email.com">
                                    <span class="error-msg" id="msg_2"></span>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="custom-select" name="country" id="edit_country">
                                        <option value="" selected>Choose...</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Germany">Germany</option>
                                        <option value="UK">UK</option>
                                    </select>
                                    <span class="error-msg" id="msg_3"></span>
                                </div>
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <input type="date" name="bod" id="edit_bod" class="form-control">
                                    <span class="error-msg" id="msg_4"></span>
                                </div>

                                <div class="form-group">
                                    <label class="mr-3">Gender :- </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="edit_genderM" type="radio" name='edit_gender' value="Male">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="edit_genderF" type="radio" name='edit_gender' value="Female">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                    <span class="error-msg" id="msg_5"></span>
                                </div>
                                <div class="form-group">
                                    <span class="success-msg" id="sc_msg"></span>
                                </div>
                            </div>
                            
                            <div class='modal-footer'>
                                <input type='button' class='btn btn-success' id='Update-Submit_btn' value='Update'></input>
                                <input type='button' class='btn btn-danger' id='Edit_Cancel-btn'  value='Cancel'></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- table -->
    <div class="mt-4">
        <h4 class="text-center">User Data Table</h4>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody id="userDataTable">
               
            </tbody>
        </table>
    </div>



    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        var data={};
        data['_token']='{{csrf_token()}}';


        $(document).ready(function(){

            function load() {
                $.ajax({
                    type: "GET",
                    url: "load",
                    data: data,
                    success: function (Retrive_data) {
                        
                        var dataArray = jQuery.parseJSON(Retrive_data);   // decoding

                        console.log(dataArray);
                        $.each(dataArray, function (index, data) {
                            var row = '<tr>' +
                                '<td>' + data.username + '</td>' +
                                '<td>' + data.email + '</td>' +
                                '<td>' + data.country + '</td>' +
                                '<td>' + data.bod + '</td>' +
                                '<td>' + data.gender + '</td>' +
                                '<td>' +
                                '<button class="btn btn-info btn-sm " id="update_btn" data-id="' + data.id + '">Update</button>' +
                                '<button class="btn btn-danger btn-sm " id="Delete_btn" data-id-delete="' + data.id + '">Delete</button>' +
                                '</td>' +
                                
                                '</tr>';
                            $("#userDataTable").append(row);
                        });
                    }
                });
            }
            load();
        

                

                    
            $('#Home_button').on("click", function() {
                $('#model').show();  
            });

           

            $('#ins_rec').on("submit", function(e) {
                e.preventDefault();


                var isValid = true;

                var username = $("input[name='username']").val();
                var usernameRegex = /^[a-zA-Z]+$/;

                if (username === "") {
                    $("#msg_1").text("Username is required");
                    isValid = false;
                } else if (!usernameRegex.test(username)) {
                    $("#msg_1").text("Username should not include numbers");
                    isValid = false;
                } else {
                    $("#msg_1").text("");
                }

                var email = $("input[name='email']").val();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email === "") {
                    $("#msg_2").text("Email is required");
                    isValid = false;
                } else if (!emailRegex.test(email)) {
                    $("#msg_2").text("Please enter a valid email address");
                    isValid = false;
                } else {
                    $("#msg_2").text("");
                }

                var country = $("#country").val();
                if (country === "") {
                    $("#msg_3").text("Country is required");
                    isValid = false;
                } else {
                    $("#msg_3").text("");
                }

                var birthDate = $("input[name='bod']").val();
                if (birthDate === "") {
                    $("#msg_4").text("Birth Date is required");
                    isValid = false;
                } else {
                    $("#msg_4").text("");
                }


                var gender = $("input[name='gender']:checked").val();
                if (!gender) {
                    $("#msg_5").text("Please select a gender");
                    isValid = false;
                } else {
                    $("#msg_5").text("");
                }

                if (isValid) {
                    $.ajax({
                        type: 'POST',
                        url: 'insprocess',
                        data: $(this).serialize(),
                        success: function(response) {
                            $("#sc_msg").text(response['message']);
                            $("#userDataTable").html(response);
                            $('#model').hide(); 
                            load();
                             
                        }
                    });


                }

            });

            $("#Cancel-btn").on("click", function() {
                $("#model").hide();
            })

           

            $('#Edit_Cancel-btn').on("click",function(){
                $('#edit_model').hide();
            
            });



            $(document).on('click', '#update_btn', function () {
             
               
                var userId = $(this).data('id');

                $.ajax({
                    type: 'GET',
                    url: 'editData', 
                    data: { edit_id: userId },
                    success: function (response) {
                       
                        $('#edit_id').val(response.id);
                        $('#edit_username').val(response.username);
                        $('#edit_email').val(response.email);
                        $('#edit_country').val(response.country);
                        $('#edit_bod').val(response.bod);
                        $('input[name="edit_gender"][value="' + response.gender + '"]').prop('checked', true);

                     
                        $('#edit_model').show();
                    },
                    error: function (error) {
                        console.log('Error fetching data:', error);
                    }
                });

            });

            $(document).on('click','#Update-Submit_btn',function(){
                var id = $("#edit_id").val();
                var username = $("#edit_username").val();
                var email = $("#edit_email").val();
                var country = $("#edit_country").val();
                var bod = $("#edit_bod").val();
                var gender = $("input[name='edit_gender']:checked").val();
                data['id']=id;
                data['username']=username;
                data['email']=email;
                data['country']=country;
                data['gender']=gender;
                data['bod']=bod;

                $.ajax({
                    url: "update",
                    type: "POST",
                    
                    data: data,
                    success: function(response) {
                        $("#userDataTable").html(response);
                        $("#edit_model").hide();
                        load();
                    }
                });

            });

            $('#userDataTable').on('click', '#Delete_btn',function(){

                var id = $(this).data('id-delete');
                data['id']=id;


                $.ajax({
                    type: "POST",
                    url: "delete",
                    data: data,
                    success: function(response) {
                        $("#userDataTable").html(response);
                        $("#sc_msg").text(response);
                        load();
                    }
                });


            });




            

        

        });
    </script>
</body>
</html>
