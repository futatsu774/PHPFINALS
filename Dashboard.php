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
    
    <h1 align="center">Dashboard</h1>
    <br>

    <body>
        <table align="center" border="1px" style="width:1500px; line-height:40px;">
            <tr>
                <th colspan="12"><h2>Database Table</h2></th>
            </tr>
            <t>
                <th> ID </th>
                <th> Name </th>
                <th> Contact </th>
                <th> Email </th>
                <th> Department </th>
                <th> nid </th>
                <th> Gender </br>
                <th> Address </th>
                <th> Birthday </th>
                <th> Degree </th>
                <th> Action </th>
            </t>

            <?php
                while($x=mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                        <td align="center"><?php echo $x['id'] ?></td>
                        <td align="center"><?php echo $x['firstname'] . " " . $x['lastname'] ?></td>
                        <td align="center"><?php echo $x['contact'] ?></td>
                        <td align="center"><?php echo $x['email'] ?></td>
                        <td align="center"><?php echo $x['dept'] ?></td>
                        <td align="center"><?php echo $x['nid'] ?></td>
                        <td align="center"><?php echo $x['gender'] ?></td>
                        <td align="center"><?php echo $x['address'] ?></td>
                        <td align="center"><?php echo $x['birthday'] ?></td>
                        <td align="center"><?php echo $x['degree'] ?></td>
                        <td align="center"><?php echo "<a href=\"edit.php?id=$x[id]\">Edit</a> | <a href=\"delete.php?id=$x[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; ?>
                    </tr>
            <?php
                }
            ?>
        </table>
        <br><br>
        <center>
        <form method = 'post'>
        <input type='submit' name='export' class='button' value='EXPORT'/>
        </form>
            </center>
        <br><br>

        <center>
        <button><a style="text-decoration: none;color:black;" href="Login.html">RETURN</a></button>
        <br><br>
        <button><a style="text-decoration: none;color:black;" href="addemp.php">Add Emp</a></button>
        </center>
    </body>

</html>