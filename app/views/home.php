<?php include 'app/views/layouts/header.php'; ?>
<div class="container mt-12">
    <section id="content-header">
        <div class="row">
            <img src="assets/img/banner.jpg" style="height:60pc; border-radius:2%;">
        </div>
    </section>
    <hr>
</div>

<div class="container mt-5">
    <section id="about">
        <h2 class="mt-4">Berita Terbaru</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $count = 0;
                    foreach ($services as $service):
                        if ($count >= 5) break;
                    ?>
                        <div class="col-md-12 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body d-flex">
                                    <?php if (!empty($service['attachment'])): ?>
                                        <img src="serve_image.php?file=<?= urlencode($service['attachment']) ?>" alt="Attachment" style="max-width: 100px; max-height: 100px;">
                                    <?php else: ?>
                                        No image
                                    <?php endif; ?>
                                    &nbsp;
                                    <div>
                                        <h5 class="card-title mb-2"><?php echo htmlspecialchars($service['title']); ?></h5>
                                        <p class="card-text"><?php echo htmlspecialchars($service['content']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count++;
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <!-- Image -->
                        <img src="assets/img/kp-sekolah.jpg" width="100%" class="mr-3">
                        <center>
                            <br />
                            <h4>Drs. Abdul Kadir, M.S.,</h4>
                            <h5 style="color: gray;">- Kepala Sekolah -</h5>
                        </center>

                        <p class="card-text" id="text-content" style="text-align:justify">
                            Assalamu'alaikum warahmatullahi wabarakatuh
                            Segala puji dan syukur kita panjatkan ke hadirat Allah Subhanahu wa Ta'ala yang telah memberikan nikmat iman, ilmu, dan kesempatan sehingga SMK Al Husna terus dapat berperan dalam mencerdaskan generasi bangsa.
                            Selamat datang di website resmi SMK Al Husna, sebuah media informasi dan komunikasi yang kami hadirkan untuk mendekatkan sekolah kami dengan masyarakat luas. Melalui website ini, kami berharap dapat memberikan informasi yang akurat, cepat, dan transparan tentang seluruh aktivitas, program pendidikan, dan prestasi yang telah kami raih.
                            SMK Al Husna berkomitmen mencetak generasi yang tidak hanya cerdas secara akademik, tetapi juga memiliki karakter Islami, keterampilan kerja yang unggul, serta siap bersaing di era global. Dengan dukungan tenaga pendidik yang profesional dan fasilitas yang terus kami kembangkan, kami optimis bahwa lulusan SMK Al Husna akan menjadi pribadi yang berakhlak mulia dan sukses di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.\
                            Kami mengundang seluruh pihak—orang tua, siswa, alumni, dan masyarakat—untuk bersinergi bersama dalam mendukung kemajuan SMK Al Husna. Mari bersama-sama kita wujudkan visi dan misi sekolah ini untuk melahirkan generasi terbaik bagi bangsa dan agama.
                            Terima kasih atas kunjungan Anda di website ini. Semoga bermanfaat dan membawa kebaikan untuk kita semua.
                            Wassalamu'alaikum warahmatullahi wabarakatuh
                        </p>

                        <!-- "Selengkapnya" Link -->
                        <a href="javascript:void(0);" id="read-more" onclick="toggleText()" style="color: #007bff; text-decoration: none;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
</div>

<div class="container mt-5">
    <section id="services">
        <h2 class="mt-4">Galery</h2>
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($service['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($service['content'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <hr>
</div>

<div class="container mt-5">
    <section id="visi">
        <h2 class="mt-4">Visi dan Misi</h2>
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <p class="card-text"></p>
                <p style="text-align: center;"><strong><u>VISI</u></strong></p>
                <p style="text-align: center;"><strong>“ Membentuk lulusan yang cerdas dalam bersikap, berpikir dan bertindak berdasarkan pedoman Agama Islam ”</strong></p>
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;"><strong><u>MISI</u></strong></p>
                <ol style="margin:5px 12px 5px 5px;">
                    <li style="text-align: justify;" class="">Menerapkan pola pendidik bertauladan Islami dalam pelaksanaan proses pembelajaran.</li>
                    <li style="text-align: justify;">Mempersiapkan siswa multi kompetensi yang kompeten dalam keahliannya dan mampu beradaptasi dengan lingkungannya.</li>
                    <li style="text-align: justify;">Mempersiapkan siswa multi kompetensi yang kompeten dalam keahliannya dan mampu beradaptasi dengan lingkungannya.</li>
                    <li style="text-align: justify;">Mendorong kompetensi guru yang sesuai dengan bidang pengajarannya.</li>
                    <li style="text-align: justify;">Melakukan pengelolaan sekolah dengan amanah, akuntabel dan transparan.</li>
                    <li style="text-align: justify;">Meningkatkan kuantitas dan kualitas sarana pendidikan yang mendorong siswa cerdas dalam berpikir, terampil dalam kompetensinya, dan mendorong terbentuknya karakter islami.</li>
                </ol>
                <p></p>

            </div>
        </div>

    </section>
</div>

<div class="container mt-5">
    <section id="contact">
        <h2 class="mt-4">Contact Us</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone_number']); ?></li>
            <li class="list-group-item"><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($contact['address'])); ?></li>
        </ul>
    </section>
</div>
<script>
    function toggleText() {
        var fullText = document.getElementById("text-content");
        var link = document.getElementById("read-more");

        if (fullText.style.height === "auto") {
            fullText.style.height = "100px";
            link.innerHTML = "Selengkapnya";
        } else {
            fullText.style.height = "auto";
            link.innerHTML = "Tutup";
        }
    }

    window.onload = function() {
        var content = document.getElementById("text-content").innerText;
        var truncatedContent = content.slice(0, 400);
        document.getElementById("text-content").innerText = truncatedContent;
    }
</script>
<?php include 'app/views/layouts/footer.php'; ?>