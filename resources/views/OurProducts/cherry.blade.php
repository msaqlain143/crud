<!doctype html>
<html lang="en">

<head>
    <title>Cherry</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.app')
    @section('main')
    <div class="container center-container smaller-container">
        <div class="text-right">
            <a href="/" class="btn btn-primary m-2">Back</a>
        </div>
        <div class="card text-center mb-3">
            <div class="card-header text-dark">
                Welcome to cherry's Features
            </div>
            <div class="card-body">
              <h5 class="card-title">Product Name : cherry </h5>
              <p class="card-text text-dark">Details : <br> Cherries are actually classified as a type of fruit called a drupe. Drupes consist of thin skin, a fleshy
                body, a hard stone, and an inner seed. They're often referred to as “stone fruits” due to the hard stone
                in the middle. The part of the fruit that you eat is called the mesocarp</p>
                <img src="/images/cherry.jpg" width="300" height="200"alt=" Cherry">
            </div>

    </div>
    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
