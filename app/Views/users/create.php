<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <h2>Add a New User</h2>
    <p><a href="<?= base_url('users') ?>">← Back to Directory</a></p>

    <?php if (isset($validation)): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 4px;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('users') ?>" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 10px;">
        <?= csrf_field() ?>

        <div>
            <label style="display: block; font-weight: bold;">Full Name:</label>
            <input type="text" name="name" style="width: 100%; padding: 8px;">
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Email Address:</label>
            <input type="email" name="email" style="width: 100%; padding: 8px;">
        </div>

        <button type="submit" style="padding: 10px; background: blue; color: white; border: none; cursor: pointer;">Save User</button>
    </form>

<?= $this->endSection() ?>