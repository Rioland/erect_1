
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Erect1 Admin</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js'></script>
    <style>
        body {
            background: url("./bitcoin-3024279.jpeg") center no-repeat fixed ;
            background-size: cover;
        }

        .card {
            border: none;
            height: 320px
        }

        .forms-inputs {
            position: relative
        }

        .forms-inputs span {
            position: absolute;
            top: -18px;
            left: 10px;
            background-color: #fff;
            padding: 5px 10px;
            font-size: 15px
        }

        .forms-inputs input {
            height: 50px;
            border: 2px solid #eee
        }

        .forms-inputs input:focus {
            box-shadow: none;
            outline: none;
            border: 2px solid #000
        }

        .btn {
            height: 50px
        }

        .success-data {
            display: flex;
            flex-direction: column
        }

        .bxs-badge-check {
            font-size: 90px
        }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form id="loginAdmin">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4"> <span>Username</span> <input required autocomplete="off" type="text" class="w-100" v-model="username" name="username" v-bind:class="{'form-control':true}">
                            <!-- <div class="invalid-feedback">A valid email is required!</div> -->
                        </div>
                        <div class="forms-inputs mb-4"> <span>Password</span> <input required autocomplete="off" type="password" class="w-100" name="password" v-model="password" v-bind:class="{'form-control':true}">
                            <!-- <div class="invalid-feedback">Password must be 8 character!</div> -->
                        </div>
                        <div class="mb-3">
                       
                             <button type="submit"  class="btn btn-dark w-100">
                             <img style="display: none;" id="loading" src="https://icon-library.com/images/loading-icon-animated-gif/loading-icon-animated-gif-19.jpg" width="30px" height="30px" />
                             <label id="logbtn">Login</label>
                            </button> </div>
                    </div>
                    <div class="success-data" v-else>
                        
                        <!-- <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">You have been logged in <br> Successfully</span> </div> -->
                    </div>
                </div>
                </form>
                <script>
    $(document).ready(function () {
        $("#loginAdmin").submit(function (e) { 
            e.preventDefault();
            let fom=$(this).serialize();
            // alert(fom);
            $(".logbtn").html("");
                $("#loading").show();
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    form:fom
                },
                dataType: "text",
                success: function (response) {
                    if(response==true){
                        window.location.href="/admin";
                        // alert(response);
                    }else{
                        alert(response);
                    }
                    $(".logbtn").show();
                $("#loading").hide();
                }
            });
            
        });
    });
</script>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>

  
</body>

</html>