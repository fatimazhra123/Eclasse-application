<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>LEARNING APPLICATION</title>
</head>

<body class="SINGN-IN">
    <section class="h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="card fat">
                    <div class="card-body">
                        <h3 class="border-start border-info border-5 fw-bold chadow m-3">
                            E-classe
                        </h3>
                        <div class="text-center">
                            <h3 class="my-3 ms-5 ps-2">SINGN IN</h3>
                            <p class="text-muted ms-lg-5 fs-14">
                                <span>Enter your credentials to access your account</span>
                            </p>
                        </div>
                        <form class="my-login-validation">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control text-muted shadow-none"
                                    placeholder="Entrer your addresse " />
                                <div class="invalid-feedback">Email is invalid</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input class="form-control text-muted shadow-none"
                                    placeholder="Entrer your Password  " />
                            </div>

                            <div class="col-md-12 mt-4 d-grid gap-2">
                                <button class="btn btn-primary"><a href="dashboard.php">SIGN IN</a></button>
                            </div>
                            <div class="mb-3 mt-4 text-center">
                                <span class="text-muted">Forgot your password?
                                    <a class="text-info" href="#"> Reset Password</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>