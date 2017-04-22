<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo $logo; ?>">
        <title>Switchy Development Stage</title>
        <style media="screen">
            body {
                background: #ecf0f1;
                padding: 3em 0;
            }

            .switchy-container {
                max-width: 1200px;
                width: 100%;
                height: auto;
                margin: 0 auto;
                background: #fff;
                padding: 40px 20px;
                border-radius: 4px;
                box-shadow: 1px 1px 1px 1px #ccc;
            }

            .switchy-logo {
                width: 50%;
                height: auto;
                margin: 0 auto;
                background: #fff;
                box-sizing: border-box;
            }

            .switchy-logo img {
                width: 100%;
                height: auto;
            }

            .switchy-coming {
                text-align: center;
                color: #e67e22;
                font-family: Helvetica, Arial, sans-serif;
            }

            .switchy-coming span {
                color: #3498db;
            }
        </style>
    </head>
    <body>
        <div class="switchy-container">
            <div class="switchy-logo">
                <img src="<?php echo $logo; ?>" alt="Switchy Icon">
            </div>
            <h2 class="switchy-coming">Coming <span>soon...</span></h2>
        </div>
    </body>
</html>
