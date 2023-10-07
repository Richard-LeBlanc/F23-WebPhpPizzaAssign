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
        <main class="main-index">
            <!-- section pseudo masthead with some dummy promotional info -->
            <section>
                <h2>Pizza Nut</h2>
                <p>Get your favourite pizza at low low prices.</p>
            </section>
            <!-- presumably the food order has been selected and delivery or take-out preference has been selected -->
            <!-- I believe it was an oversight, but now I'm thinking I should have created those as hidden inputs to pass to the database. -->
            <section>
                <form action="paymentConfirmation.php" method="post">
                    <h3>Fill out your information and confirm your order before selecting secure payment option.</h3>
                    <label for="first_name">First name: </label>
                    <input type="text" name="first_name" id="first_name" required>
                    <label for="last_name">Last name: </label>
                    <input type="text" name="last_name" id="last_name" required>
                    <label for="address">Home address</label>
                    <input type="text" name="address" id="address" required>
                    <label for="phone_number">Phone Number: </label>
                    <input type="tel" name="phone_number" id="phone_number" required placeholder="555-555-5555">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required>
                    <input type="submit" name="submit" id="submit">
                </form>
                <figure>
                    <img src="./img/sample1.png" alt="Don't miss out on Pizza Day Sept 29th">
                    <figcaption><a href="#">Purchase now to earn bonus coupons for Pizza Day!</a></figcaption>
                </figure>
            </section>
        </main>
        <footer><p>I am a footer</p></footer>
    </body>
</html>