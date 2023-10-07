<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required title and metadata-->
        <title>Pizza submission form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <meta name="robots" content="nofollow, noindex">
        <meta name="description" content="Project: Create a pizza submission form, post and get from server using php.">

        <!-- Link our CSS File -->
        <link rel="stylesheet" href="./css/style.css">

    </head>
    <body>
        <header>
        <div>
            <img src="./img/logo.jpg" alt="Bowl of Nuts logo">
            </div>         
            <nav>
                <menu>
                    <li>Home</li>
                    <li>Take-out</li>
                    <li>Order</li>
                </menu>
            </nav>
        </header>
        <?php
            //read from the database file, then create a new database object to use the functions from that class.
            include 'database.php';
            $database = new database;
            
            if (isset($_POST) & !empty($_POST)){
				$first_name = $database->sanitize($_POST['first_name']);
				$last_name = $database->sanitize($_POST['last_name']);
				$phone_number = $database->sanitize($_POST['phone_number']);
                $address = $database->sanitize($_POST['address']);
				$email = $database->sanitize($_POST['email']);
                //ensure data is clean before introducing it into our database.
				$res = $database->createRecord($first_name, $last_name, $address, $phone_number, $email);
				if($res){
					 "<h1>Thanks, from one nut to another!</h1>";   
				}else{
					echo "<p>Could not create record</p>";
				}
			}
        ?>
        <main class="main-pay">
            <section class="thanks-for-eating">
                <h2>Thank you for placing your order!</h2>
                <!-- output a pleasent message to the user upon completion. -->
                <p>At Pizza Nut, we appreciate your privacy <?php echo $first_name, " ", $last_name ?>. That's why we promise to never keep your address: <?php echo $address . ", Phone number: " . $phone_number . " or email: " . $email; ?> without your consent.</p>
                <p>The delivery driver should be there within 20 minutes, or you will receive a coupon for a small ice cream sundae (with any purchase over $70). Thank you and have a wonderful day!</p>
            </section>
        </main>
    </body>
</html>