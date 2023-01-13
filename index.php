<!Doctype html>
<html>

<head>
    <title>animations</title>
    <style>
    #one {
        height: 100px;
        width: 100px;
        margin: left 30px;
        background-color: blue;
        border-radius: 50px;
        animation: example;
        position: relative;

        animation-delay: -1s;
        animation-duration: 20s;
    }

    @keyframes example {
        0% {
            left: 300px;
            top: 0px;
            background-color: red;
        }


        100% {
            left: 750px;
            top: 400px;
            background-color: blue;
        }

    }



    #two {
        height: 100px;
        width: 100px;
        margin: left 30px;
        background-color: red;
        border-radius: 50px;
        animation: example1;
        animation-duration: 10s;
        position: relative;
    }

    @keyframes example1 {
        0% {
            left: 0px;
            top: 0px;
            background-color: red;
        }



        100% {
            left: 250px;
            top: 600px;
            background-color: blue;
        }

    }


    #three {
        height: 100px;
        width: 100px;
        margin: left 30px;
        background-color: green;
        border-radius: 50px;
        animation: example2;
        position: relative;

        animation-delay: -1s;
        animation-duration: 20s;
    }

    @keyframes example2 {
        0% {
            left: 300px;
            top: 0px;
            background-color: red;
        }

        50% {
            left: 300px;
            top: 500px;
            background-color: green;
        }

        100% {
            left: 750px;
            top: 400px;
            background-color: blue;
        }

    }
    </style>
    <script>

    </script>
</head>

<body>
    <cetner>
        <p id="demo"></p>
    </cetner>
    <div id="one" onclick="buttonx">A
    </div>
    <div id="two" onclick="buttonx2">B
    </div>
    <div id="three" onclick="buttonx3">C
    </div>


    <script>
    var button = document.getElementById("one"),
        count = 0;
    button.onclick = function() {
        count += 1;
        demo.innerHTML = "<center>click as many as you can</center> " + "<center>" + count-- + "</center>";
    };
    var buttonx = document.getElementById("one").
    ondblclick = function() {
        one.style.visibility = "hidden";
    };



    var button1 = document.getElementById("two"),
        count = 0;
    button1.onclick = function() {
        count += 1;
        demo.innerHTML = "<center>click as many as you can</center> " + "<center>" + count + "</center>";
    };
    var buttonx2 = document.getElementById("two").
    ondblclick = function() {
        two.style.visibility = "hidden";
    };




    var button2 = document.getElementById("three"),
        count = 0;
    button2.onclick = function() {
        count += 1;
        demo.innerHTML = "<center>click as many as you can</center> " + "<center>" + count-- + "</center>";
    };
    var buttonx3 = document.getElementById("three").
    ondblclick = function() {
        three.style.visibility = "hidden";
    };
    </script>

</body>



</html>