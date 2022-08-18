
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>OAuth Demo - Sign Up</title>

        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-bold fs-5">OAuth Demo - Sign Up</h5>
                            <form method="POST" autocomplete="off">
                                <div class="form-floating mb-3">
                                    <input type="Text" name="name" class="form-control" id="su-name" placeholder="name@example.com" />
                                    <label for="su-name">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="su-email" placeholder="name@example.com" />
                                    <label for="su-email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" autocomplete="new-password" name="password" class="form-control" id="su-password" placeholder="Password" />
                                    <label for="su-password">Password</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-dark btn-login fw-bold" type="submit">Sign up</button>
                                </div>
                                <hr class="my-4" />
                                <div class="d-grid mb-2">
                                    <button class="btn btn-google btn-login fw-bold" type="submit"><i class="fab fa-google me-2"></i> Sign up with Google</button>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-facebook btn-login fw-bold" type="submit"><i class="fab fa-facebook-f me-2"></i> Sign up with Facebook</button>
                                </div>
                                <div class="d-grid text-center mt-2">
                                    <small>Already have account, <a href="/sign-in"> Sign in</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/assets/plugins/jquery/jquery.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/sign-up.js"></script>
    </body>
</html>