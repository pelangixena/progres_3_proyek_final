<?php
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
if (!empty($_POST['submit_validate'])) {
    if ($username == "abc@abc.com" && $password == "password") {
        header('location:..//index.php?x=home');
    } else { ?>
        <script>
            alert('Username atau password yang Anda masukkan salah');
            window.location='../login.php'
        </script>
        <?php
    }
}
?>