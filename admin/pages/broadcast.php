<?php
$toPublic = $_SESSION['toPublic'];
?>
<div class="alert alert-primary" role="alert">
    <?php
    if ($toPublic == "true") {
        echo ' <center> <label class="text-center topic"> Public BroadCast</label></center>';
    } else {
        echo'<center> <label class="text-center topic"> Private Message</label></center>';
    }
    ?>

</div>

<form id="messageForm">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" required name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <select required name="type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected value="success">Success</option>
        <option value="danger">Danger</option>
        <option value="warning">Warning</option>

    </select>
    <button type="submit" class="btn btn-primary">Send</button>
</form>


<script>
    $(document).ready(function() {

        let to = '<?php echo $toPublic ?>';
      
    $("#messageForm").submit(function(e) {
        e.preventDefault();
        let data = $(this).serialize();
        let id = localStorage.getItem("mrecieverid");

        if (to == "true") {
            // alert("pub")
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    PublicMessage: data,
                },
                dataType: "text",
                success: function(response) {
                    alert(response);
                    window.location.reload();
                }
            });
        } else {
        //  alert("pri")
            $.ajax({
                type: "post",
                url: "config/request.php",
                data: {
                    SingleMessage: data,
                    id: id
                },
                dataType: "text",
                success: function(response) {
                    alert(response);
                    window.location.reload();
                }
            });
        }

    });
    });
</script>