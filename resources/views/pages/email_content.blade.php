<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>
        body {
            font-family: sans-serif;
            color: #000;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        img {
            width: 10rem;
            height: auto;
        }

        .content {
            width: 90%;
            max-width: 36rem;
            margin: 0 auto;
        }

        .content p {
            margin-bottom: 1rem;
        }

        .content p span {
            font-weight: 600;
            text-transform: uppercase;
        }

        .footer {
            margin-top: 2rem;
            font-size: 0.75rem;
            text-align: center;
        }

        @media (max-width: 640px) {
            .content {
                padding: 1rem;
            }

            img {
                width: 8rem;
            }
        }
    </style>
</head>

<body>
    <div align="center">
        <img src="cid:logo_cid" alt="Masovia">
    </div>

    <section class="content">
        <p><span>Service</span>: {{ $data['service'] }}</p>
        <p><span>Durée</span>: {{ $data['duree'] }} {{ $data['unite_de_date'] }}</p>
        <p><span>Budget</span>: {{ $data['budget'] }} {{ $data['unite'] }}</p>
        <p><span>Client</span>: {{ $data['email'] }} </p>
        <p class="footer">copyright &copy; {{ date('Y') }} - Masovia Madagascar</p>
    </section>
</body>

</html>
