<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form signup">
        <header>Chat App 1.0 BETA</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nama Depan</label>
                        <input type="text" name="fname" placeholder="Nama Depan" required>
                    </div>
                    <div class="field input">
                        <label>Nama Belakang</label>
                        <input type="text" name="lname" placeholder="Nama Belakang">
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukan Email" required>
                </div>
                <div class="field input">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" placeholder="Masukan Kata Sandi" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Pilih Foto</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Daftar">
                </div>
            </form>
                <div class="link">Sudah Punya Akun? <a href="index.php">Masuk Sekarang!</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>