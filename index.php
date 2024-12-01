<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Lagbe Website</title>

    <!-- Linking CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Include navbar -->
    <?php include('header.php'); ?>

    <!-- Website intro section starts here -->
    <section class="player-lagbe">
        <div class="container text-center">
            <h1>Player Lagbe</h1>
            <p>A platform to connect players making it easier for anyone to look for an available game...</p>
            <button class="btn recruit-now">Recruit Now</button>
        </div>
    </section>
    <!-- Website intro section ends here -->

    <!--Recruitment Info section starts here-->
    <section class="recruitment-info">
        <div class="container">
            <h2 class="text-center">Recruitment Info</h2>
            <form action="#">
                <div class="form-group">
                    <label for="venue">Venue:</label>
                    <input type="text" id="venue" placeholder="Enter venue">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date">
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time">
                </div>
                <div class="form-group">
                    <label for="members">Required Members:</label>
                    <button type="button" class="btn-minus">-</button>
                    <input type="number" id="members" value="0" min="0">
                    <button type="button" class="btn-plus">+</button>
                </div>
                <button type="submit" class="btn recruit">Recruit</button>
            </form>
        </div>
    </section>
    <!--Recruitment Info section ends here-->

    <!-- Available games section starts here -->
    <section class="available-games">
        <div class="container">
            <h2 class="text-center">Available Games</h2>

            <!-- Solo Section -->
            <h2 class="text-left">Solo</h2>
            <table>
                <thead>
                    <tr>
                        <th>Venue</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Players</th>
                        <th>Join</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn join">+</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn join">+</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Available games section ends here -->

    <!-- Teams Section -->
    <section class="teams">
        <div class="container">
            <h2 class="text-left">Teams</h2>
            <table>
                <thead>
                    <tr>
                        <th>Venue</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Join</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn join">+</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn join">+</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Teams section ends here -->

    <!-- Include footer -->
    <?php include('footer.php'); ?>
</body>

</html>
