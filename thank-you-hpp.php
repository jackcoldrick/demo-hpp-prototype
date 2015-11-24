<?php $result = $_POST['RESULT']; ?>
<?php if ($result == "00") { //Successful  ?>
    <div id='message'>
        <h2>Thank You</h2>
        <a href='index.php' class="btn btn-default" role="button">Back to Home</a>
    </div>
<?php } else { //Unsuccessful 
    ?>
    <div id='message'>
        <h2>Sorry</h2>
        <a href='index.php' class="btn btn-default" role="button">Back to Home</a>
    </div>
<?php } ?>