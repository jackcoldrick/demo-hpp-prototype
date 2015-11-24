<?php $result = $_POST['RESULT']; ?>
<div class="span8" style="min-height:400px; padding-top:40px;">
    <?php if ($result == "00") { //Successful ?>
        <div id='message'>
            <h2>Thank You</h2>
        </div>
    <?php } else { //Unsuccessful 
        ?>
        <div id='message'>
            <h2>Sorry</h2>
        </div>
    <?php } ?>
</div>
