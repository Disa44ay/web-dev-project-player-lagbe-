<?php
// Include the header
include('header.php');
?>

<!-- Linking CSS file explicitly for this page -->
<link rel="stylesheet" href="css/style.css">

<!-- Teams section starts here -->
<section class="teams">
    <div class="container">
        <h2 class="text-left">Registered Teams</h2>
        <p>Welcome to the Teams page! Explore our teams below.</p>

        <!-- Teams content -->
        <div class="teams-content">
            <table>
                <thead>
                    <tr>
                        <th>Team name</th>
                        <th>Manager</th>
                        <th>Dual</th>
                        <th>Whisper</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button class="btn join">+</button></td>
                        <td><button class="btn join">Whisper</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Teams section ends here -->

<!-- Team registration section starts here -->
<section class="team-registration">
    <div class="container">
        <h2 class="text-center">Team Registration</h2>
        <p class="text-left">*You would be registered as the manager of the team</p>
        
        <form action="#">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="Name" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="UID">UID:</label>
                <input type="number" id="UID" placeholder="Enter your UID here">
            </div>

            <div class="form-group">
                <label for="team-name">Team Name:</label>
                <input type="text" id="team-name" placeholder="Enter your team name">
            </div>

            <h2 class="text-left">Member Details:</h2>

            <div class="form-group">
                <label for="player-1">Player 1:</label>
                <input type="text" id="player-1" placeholder="Enter name...">
                <input type="number" id="UID" placeholder="Enter UID...">
            </div>

            <div class="form-group">
                <label for="player-2">Player 2:</label>
                <input type="text" id="player-2" placeholder="Enter name...">
                <input type="number" id="UID" placeholder="Enter UID...">
            </div>

            <button class="btn join">Add More</button>
        </form>
    </div>
</section>
<!-- Team registration section ends here -->

<?php
// Include the footer
include('footer.php');
?>
