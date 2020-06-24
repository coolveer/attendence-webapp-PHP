<?php
	include './includs/hedder.php';
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./index.php">
    <button class="btn  btn-info ">Back</button>
    </a>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">You are a :</h1> <br><br>
        <a href="./tup.php">
            <button class="btn btn-lg btn-info btn-block"><h3>Teacher</h3></button><br><br><br>
        </a>
        <a href="./email.php?sep=2">
            <button class="btn btn-lg btn-info btn-block"><h3>Parent</h3></button><br><br><br>
        </a>
        
        <a href="./email.php?sep=0">
        <button class="btn btn-lg btn-info btn-block"><h3>Student</h3></button><br><br><br>
        </a>
        
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>