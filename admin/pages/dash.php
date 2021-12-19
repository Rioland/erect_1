<br>
<!-- title -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
  <script type="text/javascript" src=""></script>
  <style>
    body {
      background-color: #eee;
    }

    .card {
      border: none;
      border-radius: 10px;
    }

    .c-details span {
      font-weight: 300;
      font-size: 13px;
    }

    .icon {
      width: 50px;
      height: 50px;
      background-color: #eee;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 39px;
    }

    .badge span {
      background-color: #fffbec;
      width: 60px;
      height: 25px;
      padding-bottom: 3px;
      border-radius: 5px;
      display: flex;
      color: #fed85d;
      justify-content: center;
      align-items: center;
    }

    .progress {
      height: 10px;
      border-radius: 10px;
    }

    .progress div {
      background-color: red;
    }

    .text1 {
      font-size: 14px;
      font-weight: 600;
    }

    .text2 {
      color: #a5aec0;
    }
  </style>
</head>



<!-- body -->

<div class="alert alert-light" role="alert">
  <div class="container mt-5 mb-3">
    <div class="alert alert-primary" role="alert">
      <label class="text-center">Dashboard</label>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"><i class="bx bxl-mailchimp"></i></div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Users</h6>
                <span style="font-size: large; font-width:bold;"><?php echo userCount();  ?></span>
              </div>
            </div>
            <div class="badge"><span>Client</span></div>
          </div>
          <div class="mt-5">
            <h3 class="heading">All Register <br />And progress</h3>
            <div class="mt-5">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"><i class="bx bxl-mailchimp"></i></div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Withdraws</h6>
                <span style="font-size: large; font-width:bold;"><?php echo withdrawCount();  ?></span>
              </div>
            </div>
            <div class="badge"><span>Client</span></div>
          </div>
          <div class="mt-5">
            <h3 class="heading">All Widthdraw <br />And progress</h3>
            <div class="mt-5">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"><i class="bx bxl-mailchimp"></i></div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Cards</h6>
                <span style="font-size: large; font-width:bold;"><?php echo cardsCount();  ?></span>
              </div>
            </div>
            <div class="badge"><span>Client</span></div>
          </div>
          <div class="mt-5">
            <h3 class="heading">All Card <br />And progress</h3>
            <div class="mt-5">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"><i class="bx bxl-mailchimp"></i></div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">Wallets</h6>
                <span style="font-size: large; font-width:bold;"><?php echo walletCount();  ?></span>
              </div>
            </div>
            <div class="badge"><span>Client</span></div>
          </div>
          <div class="mt-5">
            <h3 class="heading">All Wallet <br />And progress</h3>
            <div class="mt-5">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
            </div>
          </div>
        </div>
      </div>

      <div  id="cl" class="col-md-4 sbrod" style="background-color: purple; border-radius:30px;">

        <div class="mt-5" >
          <h3 class="heading text-center " style="color: white; ">Send<br />BroadCast</h3>
          <div class="mt-5">

            <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
          </div>
        </div>
      </div>

      <script>
        function Ajaxfunction(router,toPublic) {
          $.ajax({
            type: "post",
            url: "config/request.php",
            data: {
              router: router,
              toPublic:toPublic
            },
            dataType: "text",
            success: function(response) {
              window.location.reload();
              console.log(response);
            }
          });
        }


        $(document).ready(function() {
          $(".sbrod").click(function(e) {
            e.preventDefault();
            // localStorage.setItem("m_toPublic", true);
            Ajaxfunction("pages/broadcast.php","true");

          });
        });
      </script>
      <div class="col-md-4">
        <div class="card p-3 mb-2">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div class="icon"><i class="bx bxl-mailchimp"></i></div>
              <div class="ms-2 c-details">
                <h6 class="mb-0">USERS</h6>
                <span style="font-size: large; font-width:bold;"><?php echo userCount();  ?></span>
              </div>
            </div>
            <div class="badge"><span>Client</span></div>
          </div>
          <div class="mt-5">
            <h3 class="heading">All Register <br />And progress</h3>
            <div class="mt-5">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- <div class="mt-3">
                  <span class="text1"
                    >32 Applied <span class="text2">of 50 capacity</span></span
                  >
                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src=""></script>
<script type="text/Javascript"></script>
</body>

</html>