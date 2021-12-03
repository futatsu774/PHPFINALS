<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
    body{
        font: 400 24px/32px Roboto, "Helvetica Neue", sans-serif;
    font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
    font-variant-east-asian: normal;
    font-weight: 400;
    font-stretch: normal;
    line-height: 32px;
    font-family: Roboto, "Helvetica Neue", sans-serif;
    letter-spacing: normal;
    margin: 0 0 16px;
    background: #f8f9fa!important;
    }

    .table{
        text-align: center;
        max-width: 100%;
        min-width: 80%;

    }

    .content{
        
        margin: 15px;
    }

    .navbar button a{
        text-decoration: none!important;
    }
    .actions a{
        margin: 10px!important;
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
    function wow(){

        $this->var;

        // $data = serialize($z);
        // file_put_contents("TableData.txt", $data);
    }
}


if(array_key_exists('export',$_POST)){
    $fh = fopen('data.txt', 'w');
    $obj = new Mat;
    $obj->var= mysqli_fetch_assoc($result);
    $a= print_r($obj,true);
    echo $a;
    $data = serialize($obj);
    file_put_contents("TableData.txt", $data);
    // $obj2 = clone $obj;
    // $obj2 = clone mysqli_fetch_assoc($result);
    while($z = mysqli_fetch_assoc($result)){
        //  $foo = print_r($z,true);
        //  echo $foo;
        $last = end($z);
    foreach ($z as $item){
        fwrite($fh, $item);
        if ($item != $last)
            fwrite($fh, "\t");
        }
        fwrite($fh, "\n");
    }fclose($fh);
    header("Location: Dashboard.php");
}

    // echo "wow()";


?>

<html>
    


    <body>

        <div>
        <nav class="navbar navbar-dark bg-dark">
            
        <a class="navbar-brand" href="#">Dashboard</a>
                
        <a style="color: white;"  href="index.html"><button class="btn btn-secondary text-white">Logout</button></a>
            
        </nav>  
        </div>

        <div class="container-md content">
        <a style="color:white;" href="addemp.php"><button class="btn btn-primary" style="margin-bottom: 10px;">Add Employee</button></a>
        <hr>
        <h4>Employee Database</h4>
        <table class="table table-bordered table-responsive">
            <thead class="thead-light">
                <th scope="col"> ID </th>
                <th scope="col"> Name </th>
                <th scope="col"> Contact </th>
                <th scope="col"> Email </th>
                <th scope="col"> Department </th>
                <th scope="col"> nid </th>
                <th scope="col"> Gender </br>
                <th scope="col"> Address </th>
                <th scope="col"> Birthday </th>
                <th scope="col"> Degree </th>
                <th scope="col"> Action </th>
            </thead>

            <?php
                while($x=mysqli_fetch_assoc($result)){
            ?>
                    <tr scope="row">
                        <td ><?php echo $x['id'] ?></td>
                        <td ><?php echo $x['firstname'] . " " . $x['lastname'] ?></td>
                        <td ><?php echo $x['contact'] ?></td>
                        <td ><?php echo $x['email'] ?></td>
                        <td ><?php echo $x['dept'] ?></td>
                        <td ><?php echo $x['nid'] ?></td>
                        <td ><?php echo $x['gender'] ?></td>
                        <td ><?php echo $x['address'] ?></td>
                        <td ><?php echo $x['birthday'] ?></td>
                        <td ><?php echo $x['degree'] ?></td>
                        <td class="actions"><?php echo "<a class=\"btn btn-success\" href=\"edit.php?id=$x[id]\">Edit</a>  <a class=\"btn btn-danger\" href=\"delete.php?id=$x[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; ?>
                    </tr>
            <?php
                }
            ?>
        </table>

        <form method = 'post'>
            <input type='submit' name='export' class='btn btn-secondary' value='Export'/>
        </form>
        </div>

    </body>

</html>