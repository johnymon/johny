<html>
<head>
</head>
<body>
<?php
$e=strval(getcwd());
if(isset($_POST['submit']))
{
    $e=strval($_POST['file']);
    $f=dir($e);
    echo $f->path . "<br>";
    echo "<br>------------------------------<br>";
    $k=1;
    while (($file = $f->read()) !== false)
    {
        if($k>2)
        {
            echo $file."<br>";
        }
        $k++;
    }
    $f->close();
}
else
{
$d = dir(getcwd());
echo  $d->path . "<br>";
echo "<br>------------------------------<br>";
$d->close();
}
?>
    <form action="" method="post">
    <input type="text" name="file" value="<?php echo $e;?>" required><br>
    <input type="submit" name="submit" vslue="submit">
    </form>
    
</body>
</html>