<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "app/views/template/head.php"; ?>
</head>

<body class="bg-primer5 w-screen h-screen font-main text-black">
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
                        <p class="text-white body-text"><?= ucfirst($list) ?></p>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        <div id="content" class="flex-grow flex flex-col">
            <?php
            $path = ASSETS . "/user.png";
            $type = pathinfo($path, PATHINFO_EXTENSION);
            if (!empty($data["db"]["user"]["avatar"])) {
                $image = $data["db"]["user"]["avatar"];
            } else {
                $image = file_get_contents($path);
            }

            $avatar = 'data:image/' . $type . ';base64,' . base64_encode($image);
            ?>
            <div class="w-full py-4 px-16 bg-white flex justify-end">
                <div class="flex items-center gap-4">
                    <a class="body-text" href="<?= BASE_URL . "/dashboard/profile" ?>"><?= $data["db"]["user"]["username"] ?></a>
                    <img src="<?= $avatar; ?>" class="rounded-full w-9 h-9 object-cover object-center bg-white shadow-md">
                </div>
            </div>
            <div class="flex-grow w-full p-4 pr-16 overflow-y-auto">
                <?php require_once "app/views/dashboard/" . $route . ".php"; ?>
            </div>
        </div>
    </main>
    <?php require_once "app/views/template/modal.php"; ?>
</body>

</html>