<php <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/plugins/bootstrap/css/bootstrap.min.css'); ?>"> -->
        <link rel="stylesheet" href="<?php echo base_url('./assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/plugins/Font-Awesome/4.3.0/css/font-awesome.min.css'); ?>">
        <title>Rapor - Online</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offsets-3">
                    <h1>HELLO</h1>
                    <form method="post" action="<?php echo base_url("login") ?>">
                        <label>Username</label>
                        <input name="username" type="text" required>
                        <input name="password" type="password" required>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('./assets/js/jquery-2.2.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('./assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    </body>

    </html>