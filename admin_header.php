<header clss = "header">

<a href = "dashboard.php" class="logo">Admin<span>Panel</span></a>

<div class="profile">
    <?php
    include 'connect.php';
$admin_id=102;
$select_profile = $conn->prepare("SELECT * FROM admin WHERE id = ?");
$select_profile -> execute ([$admin_id]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    ?>

<p><?= $fetch_profile['name'];?></p>
<a href="update_profile.php" class="btn">update_profile</a>

</div>
<nav class="navbar">
    <a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
    <a href="add_posts.php"><i class="fas fa-pen"></i><span>add post</span></a>
    <a href="view_posts.php"><i class="fas fa-eye"></i><span>viewpost</span></a>
    <a href="admin_accounts.php"><i class="fas fa-user"></i><span>accounts</span></a>
    <a href="../components/admin_logout.php" onclick="return confirm('logout from the website?');"><i class="fas fa-right-from-backet"></i>
    <span style="color:var(--red)">logout</span></a>
    </nav>
    
    <div class="flex-btn">
        <a href="admin_login.php class="option-btn">login</a>
        <a href="register_admin.php class="option-btn">register</a>

</header>
