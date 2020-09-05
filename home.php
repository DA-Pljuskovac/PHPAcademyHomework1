<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Home</title>
</head>
<body>
    <?php require_once "navfile.php";?>
<section class="section">
    <div class="container">
        <h1 class="title">The home page</h1>
        <h2 class="subtitle">This is my home page, it contains basic information about me.</h2>
        <h2 class="subtitle">My first name is Domagoj and my family name is Pljuskovac. I am 21 years old.</h2>
        <h2 class="subtitle">My favourite house pet is a dog.</h2>
        <h3 class="subtitle">On the <strong>About</strong> page you can enter your information.
            Afterwards, you can press the <button class="button is-primary">Submit</button> button which will send you to the <strong>Result</strong> page.
        </h3>
        <h4 class="subtitle">Our information will be compared on the result page.</h4>
        <h5 class="subtitle">You can press the <strong>About</strong> button in the navigation bar to go to the next page.</h5>
    </div>
</section>
<?php require_once "footer.php"; ?>
</body>
</html>