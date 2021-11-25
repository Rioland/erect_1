<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <style>
    /* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
    .flip-box {
        background-color: transparent;
        width: 300px;
        height: 200px;
        border: 1px solid #f1f1f1;
        perspective: 1000px;
        /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    /* .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    } */

    /* Position the front and back side */
    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
    }

    /* Style the front side */
    .flip-box-front {
        background-color: #bbb;
        color: black;
    }

    /* Style the back side */
    .flip-box-back {
        background-color: dodgerblue;
        color: white;
        transform: rotateY(180deg);
    }
    </style>
</head>

<body>
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <h2>Front Side</h2>
            </div>
            <div class="flip-box-back">
                <h2>Back Side</h2>
            </div>
        </div>
    </div>
    <button type="button" id="ch">change</button>
    <!--<script src="js/jq.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script>
    $(document).ready(function() {
        let isfront = true;
        $("#ch").click(function() {
            // alert("hi")
            if (isfront === true) {
                $(".flip-box-inner").css("transform", "rotateY(180deg)");
                isfront=! isfront;
            }else if(isfront === false){
                isfront=! isfront;
                $(".flip-box-inner").css("transform","rotateY(360deg)");
            }
            console.log(isfront);

        });
    });
    </script>
</body>

</html>
