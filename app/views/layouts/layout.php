<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet" >
    <script src="/js/bootstrap.js"></script>
    <title>Test</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light mb-xxl-5">
        <div class="navbar-collapse">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <div>
                    <li class="nav-item">
                        <h6>
                            <a class="nav-link" href="/">На главную</a>
                        </h6>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
</header>
<div class="content">
    <?php require_once dirname(__DIR__, 3) . "/app/views/" . $view ?>
</div>

</body>

</html>
