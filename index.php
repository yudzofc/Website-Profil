<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profil</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li id="#nama">Bambang Triatmaja</li>
                <li><a href="#utama">Home</a></li>
                <li><a href="#pendidikan">Pendidikan</a></li>
                <li><a href="#skill">Skill</a></li>
                <li><a href="#organisasi">Organisasi</a></li>
                <li><a href="#hobi">Hobi</a></li>
                <li><a href="#tentang">Tentang</a></li>
            </ul>
        </nav>
        <div class="jumbotron" id="utama">
            <div id="teks-utama">
                <h1>Hi, Saya Bambang</h1>
                <p>Saya adalah seorang mahasiswa. Suka akan belajar dan mencoba hal baru. Ini adalah website profil saya.</p>
            </div>
            <img src="assets/image/jumbotron.png" id="gambarUtama" class="jumbotron-image" alt="Gambar Utama">
        </div>
    </header>

    <main>
        <div id="content">
            <article id="pendidikan" class="card">
                <div class="right">
                    <h2>Pendidikan Formal</h2>
                    <p>SMK Permata Bogor, Teknik Komputer dan Jaringan</p>
                    <p>STT Terpadu Nurul Fikri, Teknik Informatika</p>
                </div>
                <div class="left">
                    <img src="assets/image/pendidikan.png" class="pendidikan-image" alt="pendidikan">
                </div>
            </article>
            <article id="skill">
                <h2>Skill</h2>
                <div class="card">
                    <section id="skill-satu" class="skill">
                        <h4>HTML</h4>
                        <img src="assets/image/html_badge.jpg" class="skill-image" alt="html">
                    </section>
                    <section id="skill-dua" class="skill">
                        <h4>CSS</h4>
                        <img src="assets/image/css_badge.png" class="skill-image" alt="css">
                    </section>
                    <section id="skill-tiga" class="skill">
                        <h4>JavaScript</h4>
                        <img src="assets/image/Javascript_badge.png" class="skill-image" alt="JavaScript">
                    </section>
                    <section id="skill-empat" class="skill">
                        <h4>Ms. Office</h4>
                        <img src="assets/image/microsoft_badge.jpg" class="skill-image" alt="Microsoft Office">
                    </section>
                    <section id="skill-lima" class="skill">
                        <h4>Mikrotik</h4>
                        <img src="assets/image/mikrotik_badge.png" class="skill-image" alt="Mikrotik">
                    </section>
                </div>
            </article>
            <article id="organisasi" class="card">
                <div class="left">
                    <div id="teks-organisasi">
                        <h2>Organisasi</h2>
                        <ol>
                            <li>LDK Senada STT Terpadu Nurul Fikri as staff Humas</li>
                            <li>IT Club Linux NF, STT Terpadu Nurul Fikri as Sekretaris</li>
                            <li>Islamedic Indonesia as staff technology officer</li>
                        </ol>
                    </div>
                </div>
                <div class="right">
                    <img src="assets/image/organisasi.png" class="organisasi-image"alt="organisasi">
                </div>
            </article>
            <article id="hobi" class="card">
                <div class="left">
                    <div id="teks-hobi">
                        <h2>Hobi Saya</h2>
                        <ol>
                            <li>Membaca Buku</li>
                            <li>Menonton film</li>
                            <li>Berdiskusi</li>
                        </ol>
                    </div>
                </div>
                <div class="right">
                    <img src="assets/image/hobi.png" class="hobi-image"alt="hobi">
                </div>
            </article>
        </div>
        <aside>
            <article id="tentang" class="tentang-card">
                <h3>Tentang Saya</h3>
                <div class="card-tentang">
                    <img src="assets/image/square.jpg" alt="foto saya">
                    <p>Bambang Triatmaja, 20 tahun</p>
                    <p>Bogor, Jawa Barat</p>
                </div>
                <ul>
                    <li>Instagram : @bambangtriatmja</li>
                    <li>github : bambang-ti</li>
                    <li>Email : triatmajabambang375@gmail.com</li>
                </ul>
            </article>
        </aside>
    </main>
    <footer>
        <p>website profil bambang triatmaja, Dicoding Academy, 2021</p>
    </footer>
    <script src="assets/main.js"></script>
</body>
</html>
