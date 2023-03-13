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
                    <label class="mt-[50px]">
                        <input type="tel" class="border-transparent w-full px-4 py-2 mt-9" placeholder="Handphone" />
                    </label>
                    <hr>
                </form>
                </form>
            </div>
        </div>
        <div class="t-mulai bg-blue-700 text-white text-center rounded-lg mx-[190px] py-[7px] mt-[50px] body-text">
            <a href="#">Register</a>
        </div>
        <div class="back flex justify-center body-text mt-28">
            <a href="<?= BASE_URL ?>" class="text-blue-700 flex items-center"> <img src="<?= ASSETS ?>/Double left.png" width="30px"> Back Home</a>
        </div>
    </div>

</html>