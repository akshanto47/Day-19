<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-19</title>
    <link rel="stylesheet" href="assest/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link">Word Count</a></li>

            </ul>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto  py-5">
                    <div class="card card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-4">Input </label>
                                <div class="col-md-8">
                                    <input type="text" name="input-value" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-4">Result </label>
                                <div class="col-md-8">
                                    <input type="text" name="input-value" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-4">Select </label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="type" value="word">Word Count</label>
                                    <label for=""><input type="radio" name="type" value="character">Character Count</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-4"> </label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Get Result" name="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="assest/js/jquery-3.6.0.min.js"></script>
<script src="assest/js/bootstrap.bundle.js"></script>
</body>
</html>