<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "app/views/template/head.php"; ?>
</head>

<body class="bg-primer5 w-screen h-screen">
    <main class="w-full h-full flex">
        <?php $lists = [
            "dashboard",
            "profile",
            "tutorials",
            "certificates",
            "logout"
        ]; ?>
        <div id="menu" class="flex flex-col items-start justify-center gap-8 bg-primer3 p-8">
            <img src="<?= ASSETS ?>/logo.png" class="w-40">
            <div class="grid grid-cols-1 auto-cols-max auto-rows-max gap-6 flex-grow">
                <?php foreach ($lists as $list) : ?>
                    <a href="<?= BASE_URL . "/dashboard/" . ($list == $lists[0] ? "" : $list) ?>" class="flex justify-start items-center gap-4">
                        <img src="<?= ASSETS . "/" . $list . ".png" ?>" class="w-8">
                        <p class="text-white"><?= ucfirst($list) ?></p>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        <div id="content" class="flex-grow">
            <!-- <?php require_once "app/views/dashboard/" . $route . ".php"; ?> -->
        </div>
    </main>
</body>

</html>