<!DOCTYPE html>
<html lang="en">

<?php require_once "app/views/template/head.php"; ?>

<body style="background-image:url('<?= ASSETS ?>/Log in.png')" class="bg-cover">
    <div class="card bg-white mx-[500px] rounded-3xl py-[70px] my-12">
        <div class="px-[50px]">
            <div class="logo flex justify-center w-full text-center">
                <img src="<?= ASSETS ?>/image 1.png" width="350px">
            </div>
            <div class="text-center text-2xl font-bold mb-[60px] header2">
                <h1>Login</h1>
            </div>
            <div class="section">
                <form class="flex flex-col items-center gap-8" action="<?= BASE_URL ?>/login/request" method="POST">
                    <label class="w-full">
                        <input type="text" class="border-slate-400 w-full px-4 py-2 border-b-2" placeholder="Username" name="username" />
                    </label>
                    <label class="w-full">
                        <input type="password" class="border-slate-400 w-full px-4 py-2 border-b-2" placeholder="Password" name="password" />
                    </label>
                    <input class="py-2 px-8 bg-primer1 text-white rounded-md mt-4" type="submit" value="Login" />
                </form>
            </div>
        </div>
        <div class="text-center mt-[7px] body-text">
            <a href="<?= BASE_URL ?>/register">Forgot Password? Register</a>
            <?php if (isset($_SESSION["login_failed"])) : unset($_SESSION["login_failed"]) ?>
                <p class="text-primer2">Login Failed Username or Password Incorrect</p>
            <?php endif ?>
        </div>
        <div class="justify-center flex gap-[20px] mt-[50px] mb-[100px]">
            <img src="<?= ASSETS ?>/fb.jpeg">
            <img src="<?= ASSETS ?>/ig.jpeg">
            <img src="<?= ASSETS ?>/google.jpeg">
        </div>
        <div class="back flex justify-center body-text">
            <a href="<?= BASE_URL ?>" class="text-blue-700 flex items-center"> <img src="<?= ASSETS ?>/Double Left.png" width="30px"> Back Home</a>
        </div>
    </div>
</body>

</html>