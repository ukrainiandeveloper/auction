<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$pageData['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="/views/css/font-awesome.min.css">
    <link rel="stylesheet" href="/views/css/style.css">

    <script type="text/javascript" src="/views/js/jquery.min.js"></script>
    <script type="text/javascript" src="/views/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/views/js/angular.min.js"></script>
    <script type="text/javascript" src="/views/js/script.js"></script>
</head>
<body>
<div class="error">
    <div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
    <h3 class="font-bold">We couldn't find the page..</h3>

    <div class="error-desc">
        Sorry, but the page you are looking for was either not found or does not exist. <br/>
        Try refreshing the page or click the button below to go back to the Homepage.
        <div>
            <a class=" login-detail-panel-button btn" href="http://bt.ll">
                <i class="fa fa-arrow-left"></i>
                Go back to Homepage
            </a>
        </div>
    </div>
</div>
</body>
</html>