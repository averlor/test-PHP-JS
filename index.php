<?php
    setcookie('day', date('D-M-Y'));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
    <title>Lesson1</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <h1 class="header__title">Welcome in world of PHP</h1>
            <p class="header__p">Created at: <?php echo date('l jS \of F Y h:i:s A')?></p>
        </header>
        <section class="content">
            <form action="" method="get" class="form" id="form">
                <div>
                    <label for="username" class="form__label">Username:</label>
                    <input type="text" name="username" id="username" class="form__input">
                </div>
                <div>
                    <label for="password" class="form__label">Password:</label>
                    <input type="password" name="password" id="password" class="form__input">
                </div>
                <div>
                    <label for="email" class="form__label">Email:</label>
                    <input type="email" name="email" id="email" class="form__input">
                </div>
                <div>
                    <label for="animal" class="form__label">Animal:</label>
                    <select name="animal" class="form__select" id="animal">
                        <option disabled selected>Choose animal</option>
                        <option value="dog">dog</option>
                        <option value="cat">cat</option>
                        <option value="fish">fish</option>
                        <option value="rabbit">rabbit</option>
                    </select>
                </div>

                <div class="form__submit">
                    <input type="submit" value="Send" class=>
                    <input type="reset" value="Reset" class=>
                </div>
            </form>
        </section>
        <footer>
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>username</th>
                        <th>password</th>
                        <th>email</th>
                        <th>animal</th>
                        <th>created</th>
                        <th>comment</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot></tfoot>
            </table>
            
            <div class="infoDay"><?php echo $_COOKIE['day']; ?></div>
        </footer>
    </div>

    <script src="main.js"></script>
    <?php 
        // Обработка формы и отправка ответа
    ?>
</body>
</html>