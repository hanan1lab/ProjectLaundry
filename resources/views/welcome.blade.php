<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CleanFresh Laundry</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        .header {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .header p {
            font-size: 1.2rem;
            margin: 0.5rem 0 0;
        }

        .content {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .content h2 {
            font-size: 1.8rem;
            color: #4caf50;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .cta {
            text-align: center;
            margin-top: 2rem;
        }

        .cta a {
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .cta a:hover {
            background-color: #45a049;
        }
        
        footer {
        background-color: rgba(76, 175, 80, 0.9); /* Transparansi agar menyatu dengan background */
        color: white;
        padding: 2rem 1rem;
        text-align: center;
        margin-top: 2rem;
    }
    </style>
</head>
    <body>
    <div class="header">
        <h1>Welcome to CleanFresh Laundry</h1>
        <p>Your trusted partner for clean and fresh clothes!</p>
    </div>

    <div class="content">
        <h2>About Our Services</h2>
        <p>
            At CleanFresh Laundry, we provide high-quality laundry services tailored to your needs. 
            Whether you need regular washing, dry cleaning, or express services, we've got you covered. 
            Enjoy fresh, clean, and neatly folded clothes every time.
        </p>
        <p>
            Our dedicated team ensures that your laundry is handled with the utmost care using eco-friendly detergents and advanced cleaning techniques.
        </p>

        <div class="cta">
        @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif        
        </div>
    </div>
    </body>
    <footer style="background-color: #4caf50; color: white; padding: 2rem 1rem; text-align: center; margin-top: 2rem;">
    <div style="max-width: 800px; margin: 0 auto;">
        <p style="margin: 0; font-size: 1rem;">&copy; {{ date('Y') }} CleanFresh Laundry | All Rights Reserved.</p>
        <p style="margin: 0.5rem 0;">123 Fresh Street, Laundryville, LA 45678 | Phone: (+62) 0382-24580-9779 | Email: cucilaundry@cleanfresh.com</p>
    </div>
</footer>
</html>