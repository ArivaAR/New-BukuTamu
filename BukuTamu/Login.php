<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include "css.php" ?>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="box row border rounder-8 p-3 rounded-4 shadow box-area">
                <div class="row align-items-center">
                    <div class="col align-items-center">
                        <img src="Assets/Logo/TVRI_Biru.png" class="rounded float-start" alt="">
                    </div>
                    <div class="col">
                        <form class="row g-3 needs-validation">
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Username</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Password</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

    </div>


    <?php include "javascript.php" ?>
</body>

</html>