<?php

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

$client = new CoinGeckoClient();
if (isset($_SESSION['currency']) and !empty($_SESSION['currency'])) {
    $currency = $_SESSION['currency'];
} else {
    $currency = 'usd';
    $_SESSION['currency'] = $currency;
}

$data = $client->coins()->getMarkets($currency);
$response = $client->getLastResponse();
$headers = $response->getHeaders();

$btc_usd_current_price = $data['0']['current_price'];
$btc_usd_price_change_24h = $data['0']['price_change_24h'];
$btc_usd_total_volume = $data['0']['total_volume'];
$btc_usd_current_price = $data['0']['current_price'];

// print_r ($data['0']);
if (!isset($_SESSION['crypoid']) or empty($_SESSION['crypoid'])) {
    $_SESSION['crypoid'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--============= STYLES ============= -->
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="./css/buysell.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./css/cardslide.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/firststyle.css">
    <script src="https://kit.fontawesome.com/e20b2f8784.js" crossorigin="anonymous"></script>
    <!--============= END 0F MY STYLE ============== -->
    <!--====================== MY JAVA CDN ================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <!--========================= END OF MY CDN ==================== -->
    <script src="js/jq.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title> Trades </title>

    <style>
        .zzz {
            z-index: -1;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .tabcontent {
            animation: fadeEffect 1s;
            /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .al3 {
            text-align: center;
            justify-content: center;
        }

        .buying {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .buy {
            margin: 10px;
        }

        .sell {
            margin: 10px;
        }

        .mg2 {
            margin: 20px;
        }

        .hover:hover {
            background-color: blue;
            color: white;
            border: 2px solid transparent;
        }

        .maket {
            display: flex;
            justify-content: center;
        }

        .maket .view {
            min-width: 200px;
            width: auto;
            height: 60px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px black;
            background-color: whitesmoke;
            margin-left: 24px;
            text-align: center;
        }

        .maket .view :hover {
            box-shadow: 2px 2px 5px gray;
        }

        .sect {
            display: grid;
            grid-template-columns: 25% 70%;
            height: auto;
        }
    </style>
    <script>
        window.mmDataLayer = window.mmDataLayer || [];

        function mmData(o) {
            mmDataLayer.push(o);
        }
    </script>
    <!--dont toch-->
    <script src="https://www.momentcrm.com/embed"></script>
    <script>
        MomentCRM('init', {
            'teamId': 'erect1',
            'doChat': true,
            'doTracking': true,
        });
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!--dont toch-->
</head>

<body>

    <div class="alert alert-light al3" role="alert">

        <div class="maket" style="overflow-x: scroll; width:auto;">
            <?php
            // $_SESSION['crypoid']
            $cid = $_SESSION['crypoid'];
            // echo $id;
            for ($i = 0; $i < 6; $i++) {
                if ($i == 2) {
                    continue;
                }
                $_SESSION['image'] = $data[$cid]['image'];
                $_SESSION['symbol'] = strtoupper($data[$cid]['symbol']);
                $_SESSION['curr'] = strtoupper($currency);
                $_SESSION['lp'] = $data[$cid]['current_price'];
                $_SESSION['dc'] = $data[$cid]['price_change_24h'];
                $_SESSION['vl'] = $data[$cid]['current_price'];

            ?>
                <button class="view" id="<?php echo $i ?>">
                    <img src="<?php echo $data[$i]['image']; ?>" height="25px" width="25px">
                    <strong><?php echo strtoupper($data[$i]['symbol']); ?> /<?php echo strtoupper($currency); ?></strong><br>
                    <b>$
                        <?php echo $data[$i]['current_price']; ?>
                    </b>

                </button>
            <?php
            }
            ?>

        </div>

    </div>
    <!--  -->
    <div class="alert alert-light" role="alert">
        <form class="row g-3">
            <div class="col-auto">
                <label for="search" class="visually-show mt-2">Market</label>
            </div>
            <!-- <label for="staticSearch" class="sm-2 col-form-label">Market</label> -->
            <div class="col-auto">

                <input type="text" class="form-control" id="search" placeholder="search...">

            </div>
            <div class="col-auto">
                <h3> <label style="padding:10px;"><img src="<?php echo $_SESSION['image']; ?>" height="30px" width="30px"> </label> <?php echo $_SESSION['symbol'] ?>/<?php echo $_SESSION['curr'] ?></h3>
            </div>
            &nbsp;

            &nbsp;
            <div class="col-auto">
                <label for="">Last price: <?php echo $_SESSION['lp'] ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">Daily change: <?php echo $_SESSION['dc'] ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">Today's open:<?php echo $btc_usd_current_price; ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">24h volume: <?php echo $_SESSION['vl']; ?> </label>

            </div>
            <input type="hidden" id="message" name="message" value="
                                                    <?php

                                                    if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
                                                        echo $_SESSION['message'];
                                                        $_SESSION['message'] = "";
                                                    }
                                                    ?>
                                                    ">

        </form>
    </div>
    <!--  -->

    <div class="card mb-3" style="width: auto; border:none;">
        <div class="row g-0">
            <div class="col-md-3">

                <div style="display:flex;">
                    <button id="usd" class="btn btn-info ms-1" type="button">USD</button>
                    <button id="eur" class="btn btn-warning ms-1" type="button">EUR</button>
                    <button id="aud" type="button" class="btn btn-primary ms-1">AUD</button>
                    <button id="gbp" type="button" class="btn btn-secondary ms-1">GBP</button>
                </div>

            </div>

            <div class="col-md-9">
                <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                    <div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
                    <div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  -->

    <div class="card mb-3" style="width: auto; border:none;">
        <div class="row g-0">

            <div class="col-md-3 me-1" style="overflow-y: scroll; height:700px;">


                <?php
                require "coinchat/coinleft.php";
                ?>
            </div>


            <div class="col-md-9 ps-3">
                <?php
                require "coinchat/coinchat.php";
                ?>
            </div>


        </div>
    </div>
</body>

</html>