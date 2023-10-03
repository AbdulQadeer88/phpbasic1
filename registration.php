<form method="get" class="frm" >
    <table border="2" class="tbl">
        <h1>Registration Form </h1>
    <tr><td><h2> Name </h2></td><td><input type="text" name="val" required></td></tr>
    <tr><td><h2> Fname </h2></td><td><input type="text" name="val1" required></td></tr>
    <tr><td><h2> Email </h2></td><td><input type="text" name="val2" required></td></tr>
    <tr><td><h2> CNIC </h2></td><td><input type="text" name="val3" required></td></tr> 
    <tr><td> </td><td><input type="submit" value="Register" name="sub" ></td></tr>

    </table>

</form>
<style>
    .frm{
        background-color: aquamarine;
        height: 400px;
        width: 400px;
        border: black;
        margin-left: 100px;
        margin-top: 80px;
        padding-left: 10px;
        padding-top: 30px;
    }
    .tbl{
        background-color: beige;
        width: 300px;
        border: 2px solid black;
        text-align: center;
        margin-left: 50px;
    }

    .tb{
        background-color: blanchedalmond;
        width: 300px;
        border: 2px solid  red;
        text-align: center;
        margin-left: 100px;
    }
</style>
<table border="2" class="tb">
<?php 
if(isset($_GET["sub"]))
{
    $a=$_GET["val"];
    $b=$_GET["val1"];
    $c=$_GET["val2"];
    $d=$_GET["val3"];

    echo "<tr><td> Name </td> <td>$a</td </tr> <br>";
    echo "<tr><td> Fname </td> <td>$b</td </tr> <br>";
    echo "<tr><td> Email </td> <td>$c</td </tr> <br>";
    echo "<tr><td> CNIC </td> <td>$d</td </tr> <br>";
    
}
?>
</table>