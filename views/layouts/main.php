<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      * { 
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #oops {
            font-size: 20vh;
            margin-top: 25vh;
            animation-name: example;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }

        #error {
            margin: 1vh;
            font-size: 4vh;
            color: rgb(109, 105, 105);
        }

        @keyframes example {
            0% {
                color: rgb(243, 45, 45);
            }

            20% {
                color: rgb(175, 175, 11);
            }

            40% {
                color: rgb(91, 91, 235);
            }

            60% {
                color: rgb(10, 240, 10);
            }

            80% {
                color: rgb(11, 180, 202);
            }

            100% {
                color: rgb(207, 10, 191);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    <a class="nav-link" href="/contact">Contact</a>
                    <a class="nav-link" href="/auth">Login</a>
                    <a class="nav-link" href="/pricing">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        {{content}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>