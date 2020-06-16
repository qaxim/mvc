<!DOCTYPE html>
<html lang="en" dir="#rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?=title;?></title>
        <link rel="stylesheet" href="<?=$root;?>assets/css/_style.css" />
        <!--<link rel="stylesheet" href="<?=$root;?>assets/css/_rtl.css" />-->
        <script> var baseurl = "<?=$root;?>"; </script>
        <link rel="shortcut icon" href="<?=$root;?>assets/img/logo.png">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?=$root;?>">
        <meta property="og:description" content="">
        <meta property="fb:app_id" content="">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:image" content="">
    </head>
    <body onload="oneway()" >
        <header class="sticky">
            <nav>
                <div class="contain flex flex-content-between row-rtl" >
                    <div class="c2 c-sm-2 p0 rtl-align-right mx-auto">
                        <div class="logo">
                            <a href="<?=$root;?>">
                            <img alt="logo" src="<?=$root;?>uploads/main/logo.png" />
                            <strong>BOOK</strong>NOW
                            </a>
                        </div>
                        <div class="bars show-m">
                            <input type="checkbox" id="menu-left" hidden />
                            <label for="menu-left">
                            <span></span>
                            </label>
                            <?php include 'menu.php'; ?>
                        </div>
                    </div>
                    <?php include 'menu.php'; ?>
                </div>
            </nav>
        </header>