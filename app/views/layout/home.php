<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php require_once "app/views/template/head.php"; ?>

<body class="bg-white font-main text-black">

    <?php
    require_once "app/views/template/header.php";
    ?>

    <!-- overview -->
    <section id="overview" class="w-full h-screen bg-[url('../../public/assets/bg-overview.png')] bg-no-repeat bg-cover">
        <div class="container flex items-center h-full relative overflow-hidden">
            <div class="flex flex-col gap-4">
                <h1 class="header1 text-white">
                    Belajar Daring. Di mana saja.<br>Kapan pun Bisa.
                </h1>
                <p class="body-text text-white">
                    Jelajahi dunia pengetahuan dengan Mindalogi. Dapatkan<br>
                    akses ke kursus terbaik dari instruktur terpilih
                </p>
                <a href="<?= BASE_URL ?>/" class="py-3 px-6 rounded-lg bg-primer1 w-fit body-text text-white">Gabung Sekarang</a>
            </div>
            <div class="absolute right-1 w-[50%]">
                <img src="<?= ASSETS ?>/img-overview.png">
            </div>
        </div>
    </section>

    <!-- about --->
    <section id="about" class="w-full h-screen bg-[url('../../public/assets/bg-about.png')] bg-no-repeat bg-cover bg-center">
        <div class="container flex gap-4 items-center justify-center h-full">
            <img src="<?= ASSETS ?>/img-about.png">
            <div>
                <h2 class="text-main text-3xl text-primer1 font-light mb-2">Tentang <span class="font-bold">MindaLogi</span></h2>
                <p class="body-text">MindaLogi Adalah sebuah platform e-learning yang memfasilitasi
                    transfer
                    ilmu dan kemampuan untuk mentransformasikan proses
                    pembelajaran antara pengajar dan peserta didik.
                    <br>
                    <br>
                    Menjadi tujuan bagi para pemula dan profesional yang ingin
                    meningkatkan, mendalami keterampilan mereka dan
                    mengembangkan karier mereka.
                    <br>
                    <br>
                    Menawarkan berbagai kursus berkualitas tinggi yang diajarkan
                    oleh pakar praktisi, mudah diakses, fleksibel dan terjangkau.
                </p>
            </div>
        </div>
    </section>

    <!-- feature -->
    <section id="feature" class="w-full bg-[url('../../public/assets/bg-feature.png')] bg-no-repeat bg-cover bg-top">
        <div class="container">
            <h3 class="font-semibold text-2xl font-main text-primer2 text-center pt-24">KENALI FITUR-FITUR KAMI</h3>
            <h2 class="header2 text-primer1 text-center">Feature</h2>
            <?php
            $features = [
                [
                    "title" => "Belajar tak kenal usia",
                    "desc" => "Mindalogi menyediakan kursus dan pelatihan untuk orang dari segala usia dan latar belakang. Apapun tujuan Anda,ingin mempelajari keterampilan baru, merubah karir, atau memuaskan rasa ingin tahu, kami siap membantu Anda mencapai tujuan tersebut."
                ],
                [
                    "title" => "Wadah berkumpul para pembelajar",
                    "desc" => "Komunitas ini merupakan tempat yang tepat untuk terhubung dengan orang-orang yang memiliki minat yang sama, berbagi pengalaman, dan mendapatkan inspirasi."
                ],
                [
                    "title" => "Sertifikasi dan penilaian",
                    "desc" => "Setiap kursus yang kami tawarkan dilengkapi dengan sertifikat penyelesaian yang dapat menjadi bukti kemampuan dan prestasi Anda kepada calon pengusaha atau klien. Terdapat sertifikat penyelesaian dan sertifikat kompetensi resmi bagi Anda yang membutuhkan."
                ],
                [
                    "title" => "Disusun oleh pakar di bidangnya",
                    "desc" => "Kursus kami didesain dan diajarkan oleh para ahli industri yang memiliki pengalaman bertahun-tahun di bidangnya masing-masing. Anda akan belajar dari yang terbaik, dan memperoleh keterampilan dan pengetahuan praktis yang dapat Anda terapkan pada pekerjaan atau bisnis Anda segera."
                ],
                [
                    "title" => "Aksesbilitas tanpa batas",
                    "desc" => "Kami juga menawarkan opsi belajar yang fleksibel sesuai jadwal Anda. Kami mengerti bahwa waktu Anda berharga, sehingga Anda dapat mengakses kursus dan pelatihan kami dari mana saja, kapan saja, dan di perangkat apa saja."
                ],
                [
                    "title" => "Terjangkau",
                    "desc" => "Kami percaya bahwa pendidikan harus dapat dijangkau oleh semua orang, oleh karena itu kami menawarkan kursus dan pelatihan kami dengan harga terjangkau. Dengan demikian, Anda dapat berinvestasi untuk masa depan Anda dan mencapai tujuan Anda tanpa harus menanggung beban biaya yang berat."
                ]
            ];
            ?>
            <div class="flex flex-col gap-12 items-center mt-20">
                <?php for ($i = 0; $i < count($features); $i++) : ?>
                    <div class="flex items-center justify-center gap-9">
                        <img src="<?= ASSETS ?>/img-fitur<?= $i + 1 ?>.png">
                        <div class="flex flex-col gap-8">
                            <h2 class="header2 text-primer1"><?= $features[$i]["title"] ?></h2>
                            <p class="body-text"><?= $features[$i]["desc"] ?></p>
                            <?php if ($i == 2) : ?>
                                <a class="px-4 py-2 bg-primer1 text-white body-text w-fit rounded-md" href="<?= BASE_URL ?>/sertifikat">Lihat Opsi Sertifikasi Resmi</a>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endfor ?>
                <div class="flex items-center justify-center gap-12 my-20">
                    <div>
                        <p class="header2 mb-8">Jangan ragu untuk bergabung dengan kami sekarang, dan mulai perjalanan Anda menuju sukses melalui pendidikan yang terjangkau dan berkualitas.</p>
                        <a class="py-2 px-4 bg-primer1 rounded-md text-white body-text w-fit" href="<?= BASE_URL ?>/">Bergabung Sekarang</a>
                    </div>
                    <img src="<?= ASSETS ?>/img-fitur7.png">
                </div>
            </div>
        </div>
    </section>

    <!-- course  & contact-->
    <section id="course" class="w-full bg-[url('../../public/assets/bg-course-contact.png')] bg-no-repeat bg-cover bg-top">
        <div class="container">
            <h2 class="header2 text-primer1 text-center mb-4 pt-24">Our online course start tooday!</h2>
            <?php
            $courses = [
                "business" => [
                    [
                        "Brand Strategy Fundamental", "suatu sistem total dari kegiatan bisnis yang dirancang untuk merencanakan dan menentukan harga, mempromosikan dan mendistribusikan produk atau jasa."
                    ],
                    [
                        "Winning Clients Over", "Dapatkan Strategi Kekinian, Cepat, Tepat, dan paling Hemat, mempertahankan Pelanggan Lama & mendapatkan Pelanggan."
                    ],
                    [
                        "Social Media Marketing", "marketing jenis ini memanfaatkan peran media sosial dalam proses marketingnya."
                    ]
                ],
                "design" => [
                    [
                        "Ilustration For Designer", "seni atau proses membuat gambar untuk menambahkan elemen visual pada suatu karya, seperti buku, majalah, poster, kartu ucapan, atau produk desain lainnya."
                    ],
                    [
                        "Logo Design", "sebuah gambar atau sketsa yang dalam pembuatannya mempunyai tujuan agar dapat mengenalkan sebuah brand, perusahaan, daerah ataupun organisasi."
                    ],
                    [
                        "Carousel Design", "fitur di media sosial yang memungkinkan pengguna mengunggah beberapa foto atau video dalam satu postingan."
                    ]
                ],
                "development" => [
                    [
                        "Introduction To Progamming", "konsep dan teknik dasar yang digunakan dalam pemrograman, termasuk variabel, tipe data, struktur kontrol, algoritma, dan paradigma pemrograman."
                    ],
                    [
                        "Data Science atau Machine Learning", "bidang keilmuan yang memungkinkan sebuah komputer untuk mempelajari sesuatu tanpa diprogram secara spesifik."
                    ],
                    [
                        "Fundamental front end", "Mulai pelajari skill seorang Front-End Developer dengan membuat sebuah tampilan website yang responsif."
                    ]
                ]
            ]; ?>
            <div class="w-full flex items-center justify-center text-white body-text gap-4 mb-16">
                <?php foreach ($courses as $key => $value) : ?>
                    <a class="py-2 px-4 bg-black rounded-md" href="<?= BASE_URL . "/#" . $key ?>"><?= ucfirst($key) ?></a>
                <?php endforeach ?>
            </div>
            <div class="flex flex-col gap-8 items-start justify-center">
                <?php foreach ($courses as $key => $value) : ?>
                    <div class="grid grid-cols-3 gap-8 w-full scroll-mt-20 mt-16" id="<?= $key ?>">
                        <div class="w-full flex gap-2 items-center justify-center">
                            <h2 class="header2 text-black"><?= ucfirst($key) ?></h2>
                            <div class="bg-dark flex-1 h-[0.30rem]"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-1 gap-8 w-full auto-rows-max auto-cols-fr">
                        <?php for ($i = 0; $i < count($value); $i++) : ?>
                            <div class="w-full shadow-2xl rounded-md overflow-hidden bg-white flex flex-col items-center justify-center">
                                <div class="w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url(<?= ASSETS . "/img-" . $key . "-" . $i . ".png" ?>);"></div>
                                <div class="p-4 flex flex-col justify-between gap-8 flex-1">
                                    <div>
                                        <h2 class="header2 text-black mb-4"><?= $value[$i][0] ?></h2>
                                        <p class="body-text text-black"><?= $value[$i][1] ?></p>
                                    </div>
                                    <a class="py-2 px-4 bg-primer1 text-white body-text rounded-md ml-auto" href="<?= BASE_URL ?>/subs">Join Now</a>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                <?php endforeach ?>
            </div>
            <div id="contact" class="mt-40">
                <h2 class="text-center header2 text-primer1">Contact Us</h2>
                <div class="flex text-black justify-between w-full py-20 gap-32 pb-36">
                    <div class="flex flex-col gap-4">
                        <h3 class="header2">Tetap terhubung dengan kami</h3>
                        <a href="<?= BASE_URL ?>" class="flex items-center gap-4">
                            <img src="<?= ASSETS ?>/address.png">
                            <p class="body-text">Sentul</p>
                        </a>
                        <a href="<?= BASE_URL ?>" class="flex items-center gap-4">
                            <img src="<?= ASSETS ?>/phone.png">
                            <p class="body-text">1234567</p>
                        </a>
                        <a href="<?= BASE_URL ?>" class="flex items-center gap-4">
                            <img src="<?= ASSETS ?>/mail.png">
                            <p class="body-text">info@mindalogi.com</p>
                        </a>
                    </div>
                    <form class="flex-1" action="<?= BASE_URL ?>" method="post">
                        <h2 class="header2 mb-4">Kirim Pesan</h2>
                        <div class="flex gap-4 w-full mb-4">
                            <div class="flex-1">
                                <h3 class="body_text">Nama</h3>
                                <input class="py-2 px-4 border-2 border-primer1 rounded-md w-full" type="text" placeholder="Masukkan Nama" id="nama" name="nama">
                            </div>
                            <div class="flex-1">
                                <h3 class="body-text">Surel</h3>
                                <input class="py-2 px-4 border-2 border-primer1 rounded-md w-full" type="email" placeholder="contoh@gmail.com" id="email" name="email">
                            </div>
                        </div>
                        <h3 class="body-text">Pesan</h3>
                        <textarea class="py-2 px-4 border-2 border-primer1 rounded-md w-full" placeholder="Masukkan Pesan" name="pesan" id="pesan" rows="10"></textarea>
                        <input class="py-2 px-8 bg-primer1 rounded-md text-white mt-4" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="w-full h-fit flex flex-col items-center bg-primer3 text-white">
        <div class="container grid grid-cols-3 grid-rows-1 gap-8 auto-rows-max m-20">
            <div class="w-full h-fit">
                <h2 class="header2">MINDALOGI</h2>
                <div class="flex flex-col items-start gap-2">
                    <?php foreach ($links as $link) : ?>
                        <a class="body-text" href="<?= BASE_URL . $link["link"] ?>"><?= $link["text"] ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="w-full h-full">
                <h2 class="header2">COURSE</h2>
                <div class="flex flex-col items-start gap-2">
                    <?php foreach ($courses as $course => $value) : ?>
                        <a class="body-text" href="<?= BASE_URL . "#/" . $course ?>"><?= ucfirst($course) ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="w-full h-full">
                <h2 class="header2">CONTACT</h2>
                <div class="flex flex-col items-start gap-2">
                    <a class="body-text" href="<?= BASE_URL ?>/">info@mindalogi.com</a>
                </div>
            </div>
        </div>
        <div class="container flex justify-between items-center mb-8">
            <p class="body-text text-opacity-40">&copy; 2023 Mindalogi. Seluruh hak cipta dilindungi</p>
            <div class="flex items-center gap-4">
                <a href="">
                    <img src="<?= ASSETS ?>/twiter.png">
                </a>
                <a href="">
                    <img src="<?= ASSETS ?>/instagram.png">
                </a>
                <a href="">
                    <img src="<?= ASSETS ?>/facebook.png">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>