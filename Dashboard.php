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
    font-family: 'Dosis', sans-serif;
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



if(array_key_exists('export',$_POST)){
    $obj = new Mat;
    $q= mysqli_fetch_assoc($result);
    $w = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)){
        
        $obj -> wow($row);
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

<html>
    


    <body>

        <div class="position-sticky">
        <nav class="shadow navbar navbar-dark bg-dark">
        
        <div>
        <a class="navbar-brand" href="Dashboard.php">Dashboard</a>
        <a class="navbar-brand" href="aboutus.php">About Us</a>
        </div>
        
                
        <!-- <a style="color: white;"  href="index.html"><button class="btn btn-secondary text-white">Logout</button></a> -->
        <form method= 'post' >
        <a style="color: white;"><input type="submit" name='logout' class="btn btn-secondary text-white" value ="Logout"></a>
        </form>
            
        </nav>  
        </div>

        <div class="container-md content">
        <a style="color:white;" href="addemp.php"><button class="btn btn-primary shadow" style="margin-bottom: 10px;">Add Employee</button></a>
        <hr>
        <h4>Employee Database</h4>
        <table class="table table-bordered table-responsive shadow">
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
            <input type='submit' name='export' class='btn btn-secondary shadow' value='Export'/>
        </form>
        </div>

    </body>

</html>