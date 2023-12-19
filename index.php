<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat App 1.0 BETA</header>
            <form action="#">
                <div class="error-text"></div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Masukan Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Masuk">
                    </div>
            </form>
            <div class="link">Belum Punya Akun? <a href="signup.php ">Daftar Sekarang</a></div>
        </section>
        </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>