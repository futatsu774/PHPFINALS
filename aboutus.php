<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        body {
            font: 400 24px/32px Roboto, "Helvetica Neue", sans-serif;
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-east-asian: normal;
            font-weight: 400;
            font-stretch: normal;
            line-height: 32px;
            font-family: "Helvetica Neue", sans-serif;
            letter-spacing: normal;
            margin: 0 0 16px;
            background: #f8f9fa!important;
        }
        
        .content {
            margin: 15px;
        }
        
        .navbar button a {
            text-decoration: none!important;
        }
        
        .actions a {
            margin: 10px!important;
        }

        .lead{
            width: 60%;
            margin-top:40px!important;
            text-align: justify;
            text-justify: inter-word;
            margin: 0 auto;
        }
        
        .lead::first-letter{
            font-size:400%;
            initial-letter: 2;
        }
        p::first-letter {
            -webkit-initial-letter: 3 2;
            initial-letter: 3 2;
        }
    </style>
</head>


<?php
include_once('connect.php');
$query="select * from testdummy";
$result=mysqli_query($conn,$query);
$z = mysqli_fetch_assoc($result);
class Mat {
    public $var;
    public $num;

    public function wow($var){
        $date = date("Y/m/d");

        $test = print_r($var,true);
        $data = serialize($test);
        file_put_contents("TableData.txt", $data, FILE_APPEND);
        header("Location: Dashboard.php");
    }

}
class Foo extends Mat {
    
    public function wow($var){       

    header("Location: index.html");   


}
}

if (array_key_exists('logout',$_POST)){
    $obj = new Foo;
    $q= mysqli_fetch_assoc($result);
    $w = mysqli_num_rows($result);

    $fh = fopen('data.txt', 'w');
    while($row = mysqli_fetch_assoc($result)){
    
        $obj -> wow($row);
    
    
}
}

?>

    <body>

        <div class="shadow-sm">
            <nav class="navbar navbar-dark bg-dark">

                <div>
                    <a class="navbar-brand" href="Dashboard.php">Dashboard</a>
                    <a class="navbar-brand" href="aboutus.php">About Us</a>
                </div>

                <form method='post'>
                    <a style="color: white;"><input type="submit" name='logout' class="btn btn-secondary text-white" value="Logout"></a>
                </form>

            </nav>
        </div>

        <div class="container-md content">

            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center; margin-bottom: 25px;">
                <span style="font-size: 40px; background-color: #f8f9fa; padding: 0 10px;">
                    About Us
                </span>
            </div>

            <center>
            <p class="lead">This web app is developed to store employee records in a table. The app improves efficiency due to its easy and effective
                way of storing employee records. Security is also another thing that was taken into consideration, the website will have a unique url that will not be
                announced within the company and the credentials for the admin will be made only when a request is sent, thus, explaining the lack of creating account feature.
                The employee records can also be deleted or modified by an assigned HR admin of the company.</p>

            </center>

        </div>

    </body>