<?php
//Kata 1
if (isset($_POST["hasuw"])) {
    $input = $_POST["kata"];
    $huruplama = array('A', 'a', 'U', 'u', 'O', 'o', 'E', 'e');
    $hurupawu = array('I', 'i', 'I', 'i', 'I', 'i', 'I', 'i');
    $baca = str_replace($huruplama, $hurupawu, $input);
} else {
    $baca = "Anda belom memasukkan text apapun";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Generator Kata</title>
</head>

<body>

    <div class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-md-3">
                    <div class="card">
                        <div class="card-header bg-costum text-white">
                            Generator Kata
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="kata">Masukkan Kata :</label>
                                    <textarea class="form-control" name="kata" id="kata" rows="3" required placeholder="Masukkan Kata"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark tombol" name="hasuw">Submit</button>
                            </form>
                            <hr>
                            <div class="form-group">
                                <label for="kata">Hasil :</label>
                                <textarea <?php if (isset($_POST["hasuw"])) {
                                                echo "class='form-control'";
                                            } else {
                                                echo "class='form-control text-muted'";
                                            } ?> name="kata" id="kata" rows="3"><?= $baca ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-2">
        <div class="row">
            <div class="col-sm-12 bg-dark">
                <div class="social">
                    <a class="surya" href="https://fb.com/suryanaxniublockshufle"><i class="fab fa-facebook fa-2x"></i></a>
                    <a class="surya" href="https://github.com/suryamsj"><i class="fab fa-github fa-2x"></i></a>
                    <a href="https://www.youtube.com/channel/UCNJ7mAoSjVcVjHJDAreaqcw" class="surya"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
                <p class="footer">Semoga <span class="footer">BERMANFAAT</span> ya</p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>
