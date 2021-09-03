<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="public/css/style/style.css" />
        <title>Table</title>
    </head>
    <body>
        <div class="container">
            <table class="table top-146">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ITEMS</th>
                        <th scope="col">PRICE($)</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>
