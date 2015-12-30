<!DOCTYPE html>
<html>
    <head>
        <title>Hiten Misurugi</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <style>
            html, body { height: 100%; }

            .vertical-center {
                height: 100%;
                width: 100%;

                text-align: center; }

            .vertical-center:before {
                content: " ";
                display: inline-block;
                vertical-align: middle;
                height: 100%; }

            .vertical-center > .container {
                max-width: 100%;

                display: inline-block;
                vertical-align: middle; }

            @media (max-width: 768px) {
                .vertical-center:before {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="vertical-center">
            <div class="container">
                <h1>Hiten Misurugi</h1>
            </div>
        </div>
    </body>
</html>
