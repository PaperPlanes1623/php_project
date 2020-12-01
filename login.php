<?php
    require_once 'includes/header.php';
?>
<div>
<h1>Log In</h1>
<p>No account? <a href="register.php"> Register Here</a></p>

<form action="" method="post">
    <input type="text" name="name" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Log In</button>
</form>
</div>
<?php
    require_once 'includes/footer.php';
?>
