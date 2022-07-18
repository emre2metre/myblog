<?php
    include 'ayar.php';
    include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Tasarımı</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">

<style>
    .form-control {
        height : 200px;
    }
</style>

</head>
<body>

    <header class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="" class="logo"><strong>Yazı Ekle</strong></a>
            </div>
            <div class="col-lg-6 text-right">
                <a href="index.php" class="menu">Siteyi Görüntüle</a>
                <a href="admin.php" class="menu">Yazılar</a>
                <a href="yaziekle.php" class="menu">Yazı Ekle</a>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-5">
                <?php

                    if ($_POST) {
                        $baslik     = htmlspecialchars($_POST["baslik"]);
                        $aciklama   = htmlspecialchars($_POST["aciklama"]);
                        $resim      = htmlspecialchars($_POST["resim"]);
                        $link       = permalink($baslik);
                        $css        = htmlspecialchars($_POST["css"]);
                        $php        = htmlspecialchars($_POST["php"]);

                        // Boşluk Kontrolü
                        if (empty($baslik) || empty($aciklama) || empty($resim)) {
                            // Eğer Boşsa
                            echo '<p class="alert alert-warning">Lütfen boş bırakmayınız!</p>';
                        } else {
                            // Eğer Boş Değilse!

                            // Veri ekleme
                            $veriekle = $db->prepare("INSERT INTO yazilar SET yazi_baslik=?, yazi_aciklama=?, yazi_link=?, yazi_resim=?, yazi_php=?, yazi_css=?");
                            $veriekle ->execute([
                                $baslik,
                                $aciklama,
                                $link,
                                $resim,
                                $php,
                                $css
                            ]);

                            if ($veriekle) {
                                // Başarıyla veri eklendiyse
                                echo '<p class="alert alert-success">Başarıyla eklendi! :)</p>';
                                header("REFRESH:2;URL=yaziekle.php");
                            } else {
                                // Veri ekleme başarısızsa
                                echo '<p class="alert alert-danger">Başarısız, eklenemedi! :(</p>';
                                header("REFRESH:2;URL=yaziekle.php");
                            }
                            
                        }
                        
                    }
                
                ?>
                <form action="" method="post">
                    <strong>Başlık:</strong>
                    <input type="text" name="baslik" class="form-control">
                    <strong>Açıklama/Yazı:</strong>
                    <textarea name="aciklama" cols="30" rows="10" class="form-control"></textarea>
                    <strong>php:</strong>
                    <textarea type="text" name="php" cols="30" rows="10" class="form-control"></textarea>
                    <strong>css:</strong>
                    <textarea type="text" name="css" cols="30" rows="10" class="form-control"></textarea>
                    <strong>Resim Linki:</strong>
                    <textarea type="text" name="resim" cols="30" rows="10" class="form-control"></textarea>
                    <br />
                    <input type="submit" value="Yayınla/Paylaş" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>