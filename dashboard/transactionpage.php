<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
</head>

<body>



    <div class="wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Sales</h3>
                                    <a href="javascript:void(0);">View Report</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>Sales Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">Since last month</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This year
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last year
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br />

                        <div class="card card-secondary card-outline">
                            <div class="card-header border-0">
                                <h3 class="card-title">Deposit</h3>
                                <!-- <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div> -->
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Address.</th>
                                            <th>Date</th>
                                            <th>Amount($)</th>
                                            <th>Status</th>
                                            <!-- <th>Notes</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $user = $_SESSION['USER'];

                                        $conn = DataBase::getConn();
                                        $q = "SELECT * FROM `invoices` WHERE `uid`=?";
                                        $pstm = $conn->prepare($q);
                                        $pstm->bindValue(1, $user->id);
                                        $pstm->execute();
                                        for ($i = 0; $i < $pstm->rowCount(); $i++) {
                                            $data = $pstm->fetch();

                                        ?>
                                            <tr>
                                                <td><?php echo $data->id ?></td>
                                                <td><?php echo $data->address ?></td>
                                                <td><?php echo $data->date ?></td>
                                                <td><?php echo $data->value ?></td>
                                                <td><span class="tag tag-success"><?php
                                                                                    if ($data->status == 0) {
                                                                                        echo "Unconfirmed";
                                                                                    } else if ($data->status == 1) {
                                                                                        echo "Partially Confirmed";
                                                                                    } else if ($data->status == 2) {
                                                                                        echo "Confirmed";
                                                                                    } else if ($data->status == -1) {
                                                                                        echo "Unpaid";
                                                                                    }

                                                                                    ?></span></td>
                                                <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                            </tr>
                                        <?php
                                        }

                                        ?>

                                    </tbody>

                                    <!-- <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div> -->
                                </table>
                                <div class="card card-secondary card-outline">
                                    <div class="card-header border-0">
                                        <h3 class="card-title">Withdraw</h3>

                                    </div>
                                    <table class="table table-striped table-valign-middle" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Crypto.</th>

                                                <th>Amount($)</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Notes</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $data = DataBase::getAllwithdraw();
                                            for ($i = 0; $i < count($data); $i++) {


                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $data[$i]->amount_btc ?></td>
                                                    <td><?php echo $data[$i]->amount_usd ?></td>
                                                    <td><?php echo $data[$i]->date ?></td>
                                                    <td><span class="tag tag-success"><?php echo $data[$i]->status ?></span></td>
                                                    <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                </tr>
                                            <?php } ?>
                                        </tbody>



                                    </table>
                                </div>
                            </div>
                            <!-- <div class="card-footer">
                                <nav aria-label="Contacts Page Navigation">
                                    <ul class="pagination justify-content-center m-0">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </nav>
                            </div> -->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>