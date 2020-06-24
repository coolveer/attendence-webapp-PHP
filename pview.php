<?php
	include './includs/hedder.php';
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./index.html">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Welcome to the parent section:</h1> <br><br>
        <a href="./sattendence.php">
            <button class="btn btn-lg btn-info btn-block"><h3>Attendence </h3></button><br><br><br>
        </a>
        <a href="./smarks.php">
            <button class="btn btn-lg btn-info btn-block"><h3>Marks</h3></button><br><br><br>
        </a>
        
        <a href="./sremarks.php">
        <button class="btn btn-lg btn-info btn-block"><h3>Remark</h3></button><br><br><br>
        </a>
        
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>