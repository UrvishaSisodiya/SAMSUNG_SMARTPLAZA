<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samsung SmartPlaza</title>
    <?php include('header.php'); ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
.team-container {
    display: flex;               /* Flexbox activate karein */
    justify-content: center;     /* Center me align karein */
    gap: 50px;                   /* Members ke beech me gap */
    flex-wrap: wrap;             /* Chhoti screen par wrap bhi ho sake */
    margin-top: 20px;
}

.team-member {
    width: 220px;
    text-align: center;
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.team-member img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;         /* Circular image */
    margin-bottom: 10px;
}
</style>
</head>
<?php
// team.php
$teamMembers = [
    [
        'name' => 'Hetal Hajani',
        'image' => 'project_image\hetal'
    ],
    [
        'name' => 'Urvisha Sisodiya',
        'image' => 'project_image/Urvisha.jpg'
    ],
    [
        'name' => 'Khushi    Der',
        'image' => 'project_image/Khushi.jpg'
    ]
];
?>
<body>

<div style="text-align: center;">
<section id="about">
    <h1>About Us</h1>
    <img src="project_image/i4.jpg" height="500" width="1200">
    <p>We are a team of passionate individuals committed to delivering excellence.</p>
    <p>Our mission is to innovate and lead in our industry.</p>
</section></div>
<section id="team">
    <div style="text-align: center;">
    <h1>Meet Our Team</h1>
    <div class="team-container">  <!-- Yeh container add karein -->
        <?php foreach ($teamMembers as $member): ?>
        <div class="team-member">
            <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" width="150" height="150">
            <h3><?= htmlspecialchars($member['name']) ?></h3>
            
            
        </div>
        <?php endforeach; ?>
    </div>
</section>
<br><br><br>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include ('footer.php');?>

</body>
</html>


