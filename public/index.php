<?php require('../includes/header.php'); ?>


<?php

    if(isset($_POST['submit'])){

       if(isset($_POST['number']) && isset($_POST['message'])){
           $client = new Client($config['account_sid'], $config['auth_token']);
           $client -> account -> messages ->sendMessage($conf['phone_number'], $_POST['number'], $_POST['message'] );

       }
    }



?>


<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" role="form">
            	<legend class="text-center">Send Message</legend>
            
            	<div class="form-group">
            		<label for="number">Phone Number</label>
            		<input type="text" class="form-control" required name="number" id="" placeholder="Enter Number">
            	</div>
                
                <div class="form-group">
            		<label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
            	</div>

            	<button type="submit" name="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

</div><!-- /.container -->

<?php require('../includes/footer.php'); ?>
