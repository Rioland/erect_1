<?php


// echo "card";
?>
<br>
<!-- title -->
<div class="alert alert-primary" role="alert">
  <label class="text-center"> ALL Users</label>
</div>
<!-- Modal -->

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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Country</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Refferer</th>
        <th scope="col">Phone</th>

        <th scope="col">Picture</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = DataBase::getConn();
      $q = "SELECT * FROM `users`";
      $stm = $conn->query($q);
      for ($i = 0; $i < $stm->rowCount(); $i++) {
        $data = $stm->fetch();

      ?>
        <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td><?php echo $data->name; ?></td>
          <td><?php echo $data->email; ?></td>
          <td><?php echo $data->country; ?></td>
          <td><?php echo $data->gender; ?></td>
          <td><?php echo $data->address; ?></td>
          <td><?php echo $data->referer; ?></td>
          <td><?php echo $data->phone; ?></td>
          <td><img src="<?php echo $data->picture ?? "https://png.pngtree.com/png-vector/20190411/ourmid/pngtree-vector-business-man-icon-png-image_924785.jpg"; ?>" width="50px" height="50px" /></td>
          <td>
            <button id="<?php echo $data->sn; ?>" type="button" class="btn btn-danger del">Del</button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mess" id="<?php echo $data->id; ?>">
              message
            </button>
          </td>
        </tr>
      <?php  } ?>
    </tbody>
  </table>
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
    $(".mess").click(function(e) {
      e.preventDefault();
      localStorage.setItem("mrecieverid", $(this).attr("id"));
      // localStorage.setItem("m_toPublic", false);
      Ajaxfunction("pages/broadcast.php","false");
    });
    $(".del").click(function(e) {
      // e.preventDefault();
      var id = $(this).attr("id");
      $.ajax({
        type: "post",
        url: "config/request.php",
        data: {
          deleteUser: true,
          id: id
        },
        dataType: "text",
        success: function(response) {
          alert(response);
          window.location.reload();
        }
      });

    });
  });
</script>