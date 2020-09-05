<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>About</title>
</head>
<body>
    <?php require_once "navfile.php";?>
<section class="section">
    <div class="container">
        <h1 class="title">Your information</h1>
        <h2 class="subtitle">You can enter your information here which will be displayed on the next page once you press <strong>submit</strong></h2>
        <h4 class="subtitle">Your information will be compared to my own, which you can see on the <strong>Home</strong> page</h4>
    </div>
</section>
    <div class="container">
        <form class="field" method="post" action="result.php">
            <label class="label">Your first name:</label>
            <div class="container">
                <input type="text" name="name" required>
            </div>
            <label class="label">Your family name:</label>
            <div class="container">
                <input type="text" name="family_name" required>
            </div>
            <label class="label">Your age:</label>
            <div class="container">
                <input type="number" name="age" required min="1" max="99">
            </div>
            <label class="label">Your favourite house pet:</label>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="dog" required>Dog
                </label>
            </div>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="cat">Cat
                </label>
            </div>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="hamster">Hamster
                </label>
            </div>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="rabbit">Rabbit
                </label>
            </div>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="rat">Rat
                </label>
            </div>
            <div class="container">
                <label class="radio">
                    <input type="radio" name="pet" value="none">None
                </label>
            </div>
            <label class="label">Your favourite number between 1-10:</label>
            <div class="container">
                <input type="number" name="fav_num" required min="1" max="10">
            </div>
            <label class="label">Your least favourite number between 1-10:</label>
            <div class="container">
                <input type="number" name="least_fav_num" required min="1" max="10">
            </div>
            <br>
            <div class="container">
                <input class="button is-primary" type="submit" name="submit">
            </div>
        </form>
    </div>

<?php include_once "footer.php" ?>
</body>
</html>