<?php

// echo "card";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br>

<br>
<br>
<br>


<!-- title -->
<div class="alert alert-primary" role="alert">
    <label class="text-center"> ALL Admin</label>
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
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = DataBase::getConn();
            $q = "SELECT * FROM `Admin`";
            $stm = $conn->query($q);
            for ($i = 0; $i < $stm->rowCount(); $i++) {
                $data = $stm->fetch();

            ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data->name; ?></td>
                    <td><?php echo $data->username; ?></td>
                    <td>
                        <button id="<?php echo $data->id; ?>" type="button" class="btn btn-danger del">Del</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $(".del").click(function(e) {
            // e.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    deleteAdmin: true,
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

<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">New Admin</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAdminForm" >
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" required placeholder="Fullnme" name="fname" aria-label="fullname" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" required aria-label="Username" name="username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="password" class="form-control" placeholder="Password" required aria-label="password" name="password" aria-describedby="basic-addon1">
                    </div>
                    <!-- <button type="button" class="btn btn-success" >Close</button> -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#addAdminForm").submit(function (e) { 
            e.preventDefault();
            let data=$(this).serialize();
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    AddAdmin:data
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>