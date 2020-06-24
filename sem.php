<?php
    include './includs/hedder.php';
    session_start();
    
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
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Add your Semester here:</h1> <br><br>
    <form action="./includs/sem.php" method="POST" class="form-group">
            <select id="sep" name="sem" class="form-control" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
			</select> <br><br>
        <input type="submit" class="btn btn-info btn-lg btn-block" value="submit">
    </form>    
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>