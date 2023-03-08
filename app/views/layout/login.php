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
                <form>
                    <div class="mb-[30px]">
                        <label class="block">
                            <input type="text" class="border-transparent w-full px-4 py-2" placeholder="Username" />
                        </label>
                        <hr>
                    </div>
                    <label class="mt-[50px]">
                        <input type="password" class="border-transparent w-full px-4 py-2" placeholder="Password" />
                    </label>
                    <hr>
                </form>
                </form>
            </div>
        </div>
        <div class="t-mulai bg-primer1 text-white text-center rounded-lg mx-[190px] py-[7px] mt-[50px] body-text">
            <a href="#login">Login</a>
        </div>
        <div class="text-center mt-[7px] body-text">
            <p>Forgot Password?<span><a href="Register"> Register</a></span></p>
        </div>
        <div class="justify-center flex gap-[20px] mt-[50px] mb-[100px]">
            <img src="<?= ASSETS ?>/fb.jpeg">
            <img src="<?= ASSETS ?>/ig.jpeg">
            <img src="<?= ASSETS ?>/google.jpeg">
        </div>
        <div class="back flex justify-center body-text">
            <a href="<?= BASE_URL ?>" class="text-primer1 flex items-center"> <img src="<?= ASSETS ?>/Double left.png" width="30px"> Back Home</a>
        </div>
    </div>
</body>

</html>