<!DOCTYPE html>
<html lang="en">

<?php require_once "app/views/template/head.php"; ?>

<body style="background-image:url('<?= ASSETS ?>/Register.png')" class="bg-cover">
    <div class="card bg-white mx-[500px] rounded-3xl py-[70px] my-12">
        <div class="px-[50px]">
            <div class="logo flex justify-center w-full text-center">
                <img src="<?= ASSETS ?>/image 1.png" width="350px">
            </div>
            <div class="text-center text-2xl font-bold mb-[60px] header2">
                <h1>Registrasi</h1>
            </div>
            <div class="section">
                <form class="flex flex-col items-center gap-10" action="<?= BASE_URL ?>/register/request" method="POST">
                    <label class="w-full">
                        <input type="text" class="border-slate-400 w-full px-4 py-2 border-b-2" placeholder="Username" name="username" />
                    </label>
                    <label class="w-full">
                        <input type="password" class="border-slate-400 w-full px-4 py-2 border-b-2" placeholder="Password" name="password"/>
                    </label>
                    <label class="w-full">
                        <input type="tel" class="border-slate-400 w-full px-4 py-2 border-b-2" placeholder="Handphone"name="handphone"/>
                    </label>
                    <input class="py-2 px-8 bg-primer1 text-white rounded-md mt-4" type="submit" value="Register" />
                </form>
            </div>
        </div>
        <div class="back flex justify-center body-text mt-28">
            <a href="<?= BASE_URL ?>" class="text-blue-700 flex items-center"> <img src="<?= ASSETS ?>/Double Left.png" width="30px"> Back Home</a>
        </div>
    </div>
</html>
