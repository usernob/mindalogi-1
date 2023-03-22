<div class="w-full">
    <h1 class="header2 mb-8">Profile</h1>
    <form class="flex gap-4 w-full" method="POST" action="<?= BASE_URL ?>/dashboard/update_profile" enctype="multipart/form-data">
        <div class="bg-white p-4 rounded-md shadow-md h-fit flex-grow">
            <div class="grid grid-cols-2 grid-rows-4 auto-cols-fr gap-4 w-full">
                <?php
                $lists = [
                    ["nama", "username", "text"],
                    ["tempat lahir", "tempat_lahir", "text"],
                    ["tanggal lahir", "tanggal_lahir", "date"],
                    ["email", "email", "email"],
                    ["telepon", "no_hp", "tel"]
                ];
                foreach ($lists as $list) : ?>
                    <div style="<?= $list[0] == "nama" ? "grid-column: span 2 / span 2 " : "" ?>">
                        <h2 class="text-body"><?= ucfirst($list[0]) ?></h2>
                        <input class="px-4 py-2 border-2 border-slate-600 rounded-md w-full" name="<?= $list[1] ?>" type="<?= $list[2] ?>" value="<?= $data["db"]["user"][$list[1]] ?>">
                    </div>
                <?php endforeach ?>
            </div>
            <div class="flex items-center gap-4">
                <input class="bg-primer1 rounded-md px-8 py-2 shadow-md text-white body-text" type="submit" value="Simpan">
                <a class="bg-primer2 rounded-md px-8 py-2 shadow-md text-white body-text" href="<?= BASE_URL . "/dashboard/profile" ?>">Kembali</a>
            </div>
        </div>
        <div class="bg-white p-8 rounded-md shadow-md flex flex-col items-center gap-4">
            <img src="<?= $avatar ?>" class="w-80 h-80 rounded-full object-cover object-center bg-white">
            <input type="file" name="foto" id="foto" class="px-8 py-2 rounded-md border-2 border-slate-600">
        </div>
    </form>
    <?php if (isset($_SESSION["message"])) : ?>
        <script>
            window.addEventListener("load", e => {
                modal("<?= $_SESSION["message"] ?>");
            })
        </script>
    <?php unset($_SESSION["message"]);
    endif ?>
</div>