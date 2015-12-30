<!DOCTYPE html>
<html>
    <head>
        <title>Hiten Mitsurugi-ryū</title>

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

            .vertical-center > .vertical-center-container {
                max-width: 100%;
                border-bottom: 0.5px solid #333;
                display: inline-block;
                vertical-align: middle; }

                .vertical-center > .vertical-center-container > h1 { font-weight: 100; }

                .vertical-center > .vertical-center-container > .romanji { font-size: 64px;
                    letter-spacing: 4px; }

            @media (max-width: 768px) {
                .vertical-center:before { display: none; }
            }

        </style>
    </head>
    <body>
        <div class="vertical-center">
            <div class="vertical-center-container pd-bottom-16">
                <h1 class="romanji">飛天御剣流</h1>
                <h1>Hiten Mitsurugi-ryū</h1>
            </div>
        </div>
    </body>
</html>
