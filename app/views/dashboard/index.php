<div class="w-full">
    <h1 class="header2 mb-8">Dashboard</h1>
    <h2 class="body-text">Your Activity</h2>
    <div class="flex items-center gap-4 my-4">
        <?php foreach ($data["db"]["progress"] as $key => $progress) : ?>
            <div class="flex items-center justify-center rounded-md shadow-md p-4 gap-4" style="background-color: <?= $progress["col"] ?>; opacity: .80;">
                <img class="w-20 h-20" src="<?= ASSETS . $progress["icon"] ?>">
                <div class="flex flex-col items-center text-white">
                    <h2 class="header2"><?= $progress["count"] ?></h2>
                    <p class="body-text"><?= ucfirst($key) ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>