<?php ?>
<header id="header" class="bg-primer3 w-full z-50 h-fit fixed top-0 font-main" style="--tw-bg-opacity: 0;">
    <?php
    $links = [
        [
            "text" => "Home",
            "link" => "/#overview"
        ],
        [
            "text" => "About",
            "link" => "/#about"
        ],
        [
            "text" => "Feature",
            "link" => "/#feature"
        ],
        [
            "text" => "Course",
            "link" => "/#course"
        ],
        [
            "text" => "Contact Us",
            "link" => "/#contact"
        ]
    ]; ?>
    <div class="w-full container flex items-center h-fit gap-10">
        <img class="h-8" src="<?= ASSETS ?>/logo.png">
        <div class="flex items-center h-full gap-8 text-white py-4 body-text flex-1 justify-end">
            <?php foreach ($links as $link) : ?>
                <a href="<?= BASE_URL . $link["link"] ?>"><?= $link["text"] ?></a>
            <?php endforeach ?>
        </div>
        <div class="flex items-center text-white body-text gap-4">
            <a href="<?= BASE_URL ?>/login">Log In</a>
            <a href="<?= BASE_URL ?>/register" class="px-4 py-1 rounded-md bg-primer2">Register</a>
        </div>
    </div>
</header>