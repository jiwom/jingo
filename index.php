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
                        <h1 id="ball">BINGO JINGO!</h1>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-lg"><i class="fas fa-play"></i> Play</button>
                        <button class="btn btn-danger btn-lg"><i class="fas fa-stop"></i> Stop</button>
                        <button class="btn btn-secondary btn-lg"><i class="fas fa-sync"></i> Refresh</button>
                    </div>
                    <div id="results" class="mt-4 p-4"></div>
                </div>
                <div class="col-8">
                    <table class="table table-bordered text-center mr-5">
                        <thead class="thead-light">
                        <tr>
                            <th>J</th>
                            <th>I</th>
                            <th>N</th>
                            <th>G</th>
                            <th>O</th>
                        </tr>
                        </thead>
                        <?php
                        // Define BINGO number ranges for each column
                        $ranges = [
                            'J' => [1, 15],   // J: 1-15
                            'I' => [16, 30],  // I: 16-30
                            'N' => [31, 45],  // N: 31-45
                            'G' => [46, 60],  // G: 46-60
                            'O' => [61, 75]   // O: 61-75
                        ];

                        // Generate unique random numbers for each column
                        $columnNumbers = [];
                        $columnKeys = array_keys($ranges);

                        for ($col = 0; $col < 5; $col++) {
                            $min = $ranges[$columnKeys[$col]][0];
                            $max = $ranges[$columnKeys[$col]][1];
                            $columnNumbers[$col] = range($min, $max);
                            shuffle($columnNumbers[$col]);
                        }
                        ?>
                        <?php for ($rows = 0; $rows < 15; $rows++): ?>
                            <tr>
                                <?php for ($col = 0; $col < 5; $col++): ?>
                                    <?php $number = $columnNumbers[$col][$rows]; ?>
                                    <td id="card-num-<?php echo $number; ?>"><?php echo $number; ?></td>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
