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
      <th scope="col">Card Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">CCV</th>
      <th scope="col">Expired Date</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $conn=DataBase::getConn();
     $q="SELECT * FROM `cards`";
     $stm=$conn->query($q);
     for ($i=0; $i <$stm->rowCount() ; $i++) { 
        $data=$stm->fetch();
    


      
      ?> 
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $data->name; ?></td>
      <td><?php echo $data->card_number; ?></td>
      <td><?php echo $data->ccv; ?></td>
      <td><?php echo $data->expedite; ?></td>
      <td><?php echo $data->country; ?></td>
      <td><?php echo $data->state; ?></td>
      <td><?php echo $data->city; ?></td>
      <td><?php echo $data->zip; ?></td>
      <td>
      <button id="<?php echo $data->sn; ?>" type="button" class="btn btn-danger del">Del</button>
      </td>
    </tr>
   <?php  }?>
  </tbody>
</table>
</div>
<script>
    $(document).ready(function () {
        $(".del").click(function (e) { 
            // e.preventDefault();
            var id=$(this).attr("id");
           $.ajax({
               type: "post",
               url: "config/request.php",
               data: {
                deleteCard:true,
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