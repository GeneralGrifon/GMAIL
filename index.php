<?php include 'sendmailer.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mail.css">
    <title>Document</title>
</head>
<body>


    <?php echo $alert; ?>

    <section>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="/index.html">PRODUCTS</a></li>
                    <li><a href="/DEMO.html">SOUNDS</a></li>
                    <li><a href="/mail.css">CONTACTS</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="contact-title">
                <h1>Say Hello</h1>
                <h2>We are always ready to serve you</h2>
            </div>
            <div class="contact-form">
                <form id="contact-form" method="post" action="contact-form-handler.php">
                <input name="name" type="text" class="form-control" placeholder="Yor Name" required>
                <br>
                <input name="email" type="email" class="form-control" placeholder="Yor Email" required>
                <br>
                <textarea name="message" class="form-control" placeholder="Message" row="4"
                required></textarea><br>
                <input type="submit" class="form-controls submit" value="SEND MESSAGE">
                </form>
            </div>
        </div>
        
    </section>

 <script type="text/javascript">
 if(window.hystory.replaceState(null, null, window.location.href);
</script>
   
</body>
</html>