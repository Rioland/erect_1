<?php


// echo "card";
?>
<br>
<!-- title -->
<div class="alert alert-primary" role="alert">
    <label class="text-center"> ALL Widthdraw</label>
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

                <th>ID</th>
                <th>Amount(btc).</th>
                <th>Amount(usd)</th>
                <th>Date</th>
                <th>status</th>
                <!-- <th>Notes</th> -->

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = DataBase::getConn();
            $q = "SELECT * FROM `withdraw`";
            $stm = $conn->query($q);
            for ($i = 0; $i < $stm->rowCount(); $i++) {
                $data = $stm->fetch();

            ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->amount_btc; ?></td>
                    <td><?php echo $data->amount_usd; ?></td>
                    <td><?php echo $data->date; ?></td>
                    <td><?php echo $data->status; ?></td>

                    <td>

                        <?php
                        if ($data->status == "pending") {
                            ?>
                        <button id="<?php echo $data->sn; ?>" type="button" class="btn btn-success pay">Paid</button>
                    <?php    
                    }
                        ?>
                        <button id="<?php echo $data->sn; ?>" type="button" class="btn btn-danger del">Del</button>
                    </td>

                </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $(".pay").click(function(e) {
            e.preventDefault();
            var comf = confirm("Do you wan to complete this transaction! No Reverse")
            if (comf == true) {
                var id = $(this).attr("id");
                // alert(id);
                $.ajax({
                    type: "post",
                    url: "config/request.php",
                    data: {
                        wpaidid: id
                    },
                    dataType: "text",
                    success: function(response) {
                        alert(response);
                        window.location.reload();
                    }
                });
            }



        });

        $(".del").click(function(e) {
            // e.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    deleteWith: true,
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