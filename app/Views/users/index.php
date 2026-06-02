<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <h2>User Directory</h2>
    
    <p><a href="<?= base_url('users/new') ?>" style="padding: 5px 10px; background: green; color: white; text-decoration: none; id: add-btn">Add New User</a></p>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users) && is_array($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['created_at'] ?></td>
                        <td>
                            <a href="<?= base_url('users/edit/' . $user['id']) ?>" style="color: blue;">Edit</a> | 
                            <a href="<?= base_url('users/delete/' . $user['id']) ?>" style="color: red;" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">No users found in the database.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

<?= $this->endSection() ?>