<div class="w-full">
    <h1 class="header2 mb-8">Tutorials</h1>
    <p class="body-text">Recomended Tutorials</p>
    <div class="flex gap-4 items-center w-full overflow-x-auto my-4">
        <?php foreach ($data["db"]["tutorial"] as $tutorial) : ?>
            <div class="rounded-md shadow-md flex flex-col items-center bg-black overflow-hidden">
                <img src="data:image/png;base64,<?= base64_encode($tutorial["thumb"]) ?>" class="object-cover object-center w-72 h-40">
                <div class="w-full flex items-center justify-between p-4">
                    <h2 class="body-text text-white"><?= $tutorial["nama"] ?></h2>
                    <a class="body-text text-primer4" href="">view tutorial</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>