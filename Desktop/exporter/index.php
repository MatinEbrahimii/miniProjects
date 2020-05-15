<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>فرم | کلاب - قالب چند منظوره ریسپانسیو</title>

    <!--web fonts-->


    <!--basic styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/custom-icon/style.css" rel="stylesheet">
    <link href="assets/vendor/vl-nav/css/core-menu.css" rel="stylesheet">
    <link href="assets/vendor/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendor/owl/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owl/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/vendor/prism/prism.css" rel="stylesheet">

    <!--custom styles-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!--[if (gt IE 9) |!(IE)]><!-->
    <!--<link rel="stylesheet" href="assets/vendor/custom-nav/css/effects/fade-menu.css"/>-->
    <link rel="stylesheet" href="assets/vendor/vl-nav/css/effects/slide-menu.css" />
    <!--<![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136585988-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136585988-1');
    </script>
</head>

<body>

    <div class="component-section bg-gray">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action='fileGenerator.php' method="POST">
                        <div class="form-group">
                            <label>FileName (Without Extension)</label>
                            <input name='filename' type="text" class="form-control" placeholder="FileName ">
                        </div>
                        <div class="form-group">
                            <select name='format' class="custom-select">
                                <option selected="">فرمت خروجی</option>
                                <option value="all">AllFormats</option>
                                <option value="pdf">PDF</option>
                                <option value="txt">TXT</option>
                                <option value="json">JSON</option>
                                <option value="csv">CSV</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>داده</label>
                            <textarea name='data' class="form-control" rows="5" placeholder="File Data"></textarea>
                        </div>
                        <button type="submit" class="btn btn-pill btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--basic scripts-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/vl-nav/js/vl-menu.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/owl/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.animateNumber.min.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/typist.js"></script>
    <script src="assets/vendor/jquery.isotope.js"></script>
    <script src="assets/vendor/imagesloaded.js"></script>
    <script src="assets/vendor/visible.js"></script>
    <script src="assets/vendor/wow.min.js"></script>
    <script src="assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="assets/vendor/clipboard/clipboard-init.js"></script>
    <script src="assets/vendor/prism/prism.js"></script>

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>