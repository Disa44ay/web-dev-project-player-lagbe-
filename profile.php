<?php
// Include the header
include('header.php');
?>

<!-- Linking CSS file explicitly for this page -->
<link rel="stylesheet" href="css/style.css">

<!-- Profile section starts here -->
<section class="profile">
    <div class="container">
        <div class="profile">
            <div class="profile-header">
                <div class="profile-image">
                    <img src="profile-image.jpg" alt="profile image">
                </div>
                <div class="profile-info">
                    <h1>Imtiaz Kaish</h1>
                    <p>UID: XXXXX0012</p>
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <div class="buttons">
                        <button class="btn edit">Edit Profile</button>
                        <button class="btn change">Change Photo</button>
                    </div>
                </div>
            </div>
            <div class="profile-content">
                <div class="section">
                    <h2>Played In</h2>
                    <div class="teams">
                        <div class="team">
                            <div class="team-name">EFC S1</div>
                        </div>
                        <div class="team">
                            <div class="team-name">EFC S2</div>
                        </div>
                        <div class="team">
                            <div class="team-name">EPI</div>
                        </div>
                    </div>
                    <button class="btn add-more">Add More</button>
                </div>
                <div class="section">
                    <h2>Member of</h2>
                    <div class="teams">
                        <div class="team">
                            <div class="team-name">RedLocks</div>
                        </div>
                    </div>
                    <button class="btn add-more">Add More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile section ends here -->

<?php
// Include the footer
include('footer.php');
?>