<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Application</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('company-info') ?>">About Us</a></li>
            <li><a href="<?= base_url('users') ?>">Manage Users</a></li>
        </ul>
    </nav>

    <hr>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <hr>

    <footer>
        <p>&copy; 2026 My Application</p>
    </footer>

</body>
</html>
