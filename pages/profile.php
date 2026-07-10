<?php
session_start();
require_once __DIR__ . '/../config/db.php';

// Check if user is logged in
if (!isset($_SESSION["UserID"])) {
    header("Location: ../login.php");
    exit();
}

$userID = $_SESSION["UserID"];

// Get user data
$stmt = $conn->prepare("SELECT * FROM Users WHERE UserID = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile — <?php echo htmlspecialchars($user['FullName']); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Contrail+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/profile.css">
</head>

<body>
<?php include '../includes/navbar.php'; ?>

    <div class="profile-page">
        <div class="profile-header">
            <div class="avatar-container">
                <img src="../assets/images/<?php echo htmlspecialchars($user['ProfileImage'] ?? 'default.png'); ?>" 
                     alt="Profile Avatar" 
                     class="avatar-img"
                     onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($user['FullName']); ?>&background=0a4f66&color=fff&size=128'">
                <div class="edit-icon">
                    <i class="fas fa-pen"></i>
                </div>
            </div>

            <h2 class="user-name" id="displayName"><?php echo htmlspecialchars($user['FullName']); ?></h2>
            <p class="user-id">#AE-<?php echo str_pad($user['UserID'], 7, '0', STR_PAD_LEFT); ?></p>
        </div>

        <div class="profile-card">

            <div class="form-group">
                <label>FULL NAME</label>
                <div class="input-container">
                    <input type="text" id="fullNameInput" value="<?php echo htmlspecialchars($user['FullName']); ?>">
                    <i class="far fa-id-badge icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label>EMAIL ADDRESS</label>
                <div class="input-container">
                    <input type="email" id="emailInput" value="<?php echo htmlspecialchars($user['Email']); ?>">
                    <i class="far fa-envelope icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label>PHONE NUMBER</label>
                <div class="input-container">
                    <input type="text" id="phoneInput" value="<?php echo htmlspecialchars($user['Phone'] ?? ''); ?>">
                    <i class="fas fa-phone icon" style="transform: scaleX(-1);"></i>
                </div>
            </div>

            <div class="form-group">
                <label>MEMBER SINCE</label>
                <div class="input-container">
                    <input type="text" value="<?php echo date('F j, Y', strtotime($user['CreatedAt'])); ?>" readonly>
                    <i class="far fa-calendar icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label>SECURITY</label>
                <div class="input-container security-container">
                    <input type="password" value="••••••••" readonly>
                    <a href="#" class="change-password-link">Change Password</a>
                </div>
            </div>

            <div class="buttons-container">
                <button class="btn btn-primary" id="saveBtn">
                    <i class="far fa-save"></i> Save Changes
                </button>
                <a href="../auth/logout.php" class="btn btn-secondary">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>

            <div class="delete-container">
                <a href="#" class="delete-link">Delete Account</a>
            </div>

        </div>
    </div>

<?php include '../includes/footer.php'; ?>
</body>

</html>