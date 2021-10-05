<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Bingo Jingo!</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-4 text-center">
            <div>
                <h1 id="ball">BINGO!</h1>
            </div>
            <div>
                <button class="btn btn-primary btn-lg"><i class="fas fa-play"></i></button>
                <button class="btn btn-danger btn-lg"><i class="fas fa-stop"></i></button>
            </div>
            <div id="results" class="mt-5 p-4">
                
            </div>
        </div>
        <div class="col-8">
            <table class="table table-bordered text-center mr-5">
                <thead class="thead-light">
                <tr>
                    <th>B</th>
                    <th>I</th>
                    <th>N</th>
                    <th>G</th>
                    <th>O</th>
                </tr>
                </thead>
                <?php $number = 1; ?>
                <?php for ($rows = 1; $rows <= 15; $rows++): ?>
                    <?php $counter = 0; ?>
                    <tr>
                        <?php for ($col = 0; $col < 5; $col++): ?>
                            <td id="card-num-<?php echo $rows + $counter; ?>"><?php echo $rows + $counter; ?></td>
                            <?php $counter += 15; ?>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>