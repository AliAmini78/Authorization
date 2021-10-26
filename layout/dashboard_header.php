<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/lib/bootstrap-rtl/bootstrap-rtl.min.css">
    <title>DashBoard</title>
</head>

<body cz-shortcut-listen="true" style="height:100vh ;" class="roe">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap py-3 " style="height: 8%;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">سلام علی خوش اومدی به پنل ادمین </a>
        <ul class="navbar-nav pt-2">
            <li class="nav-item text-nowrap">
                <h5 class="btn-group">

                    <a href="/" class="btn btn-success mx-4 text-white">صفحه اصلی </a>
                    <form method="post" action="/logout.php">
                        <button type="submit" class=" btn btn-danger py-2 px-4 text-white" href="/">
                            خروج
                        </button>
                    </form>
                </h5>
            </li>
        </ul>
    </nav>

    <div style="height: 92%;">
        <div style=" height: 100%; display: flex;">
            <nav class=" bg-light sidebar " style="width: 15%;">
                <div class="sidebar-sticky">
                    <ul class="list-group">
                        <li class="list-group-item ">
                            <a href="#" class="text-dark h5">
                                داشبورد
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-dark h5">
                                دسته بندی ها
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-dark h5">
                                نویسنده
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="text-dark h5">
                                کتاب
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class=" pt-3 px-4">