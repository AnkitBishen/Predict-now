<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predicte now</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap");

        body{
            margin: 0%;
            padding: 0%;
            padding-top: 40px;
            font-family: "Poppins", sans-serif;
            background-color: rgb(63, 122, 190);
            color: #fff;
        }
        div{
            display: flex;
            justify-content: center;
        }
        ul li{
            text-decoration: none;
            list-style-type: none;
            padding:4px;
        }
        #submit{
            margin-top: 20px;
            padding: 10px 16px;
            border: 3px solid #fff;
            border-radius: 6px;
            color: #fff;
            background-color: rgb(50, 114, 187);
            font-size: 19px;
        }
        #submit:hover{
            background-color: #fff;
            color: rgb(50, 114, 187);
            /* border:3px solid rgb(50, 114, 187); */
            cursor: pointer;
            transition: all 0.4s ease-in-out;
        }
        #text-id{
            padding: 10px 16px;
            border: 3px solid #fff;
            border-radius: 6px;
            background-color: rgb(50, 114, 187);
            font-size: 19px;
            color: #fff;
            outline: none;
        }
        ::placeholder{
            color:#fff;
        }
    </style>
</head>
<body>
    <center>
        <br>
        <h1>Predicte Now</h1>
        <h3>choose atleast one Animal between these</h3>
        <div>
        <ul>
            <li>Lion</li>
            <li>Tiger</li>
            <li>panda</li>
            <li>Cow</li>
        </ul>
        <ul>
            <li>Dear</li>
            <li>Fox</li>
            <li>Horse</li>
            <li>Monkey</li>
        </ul>
        <ul>
            <li>Kangaroo</li>
            <li>Pig</li>
            <li>Camel</li>
            <li>Donkey</li>
        </ul>
        </div>
        <form action="" method="post">
            <input type="text" name="text_color" id="text-id" placeholder="Enter your Animal name">
            <input type="submit" id="submit" name="submit">
        </form>
        <br>
        <h2>
            <?php
                if(isset($_POST['submit'])){
                    $my_color = array("Lion", "Tiger", "panda","Cow", "Dear", "Fox", "Horse", "Monkey","Kangaroo", "Pig", "Camel","Donkey");
                    shuffle($my_color);

                    $text_color = $_POST['text_color'];
                    if($text_color == $my_color[0]){
                        echo "Amazing your predict is right &#128526;,&nbsp;". $text_color;
                        
                    }
                    else{
                        echo "Oh no! Your predict is wrong &#128549,&nbsp; ". $my_color[0];
                    }
                }
            ?> 
        </h2>
        <span><a href="../index.html">Back</a></span>
    </center>
</body>



</html>