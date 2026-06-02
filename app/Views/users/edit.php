<?= $this->extend('layouts/main') ?>
<?php /** @var array $user */ ?>
<?= $this->section('content') ?>

    <h2>Edit User Details</h2>
    <p><a href="<?= base_url('users') ?>">← Cancel and Go Back</a></p>

    <form action="<?= base_url('users/update/' . $user['id']) ?>" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 10px;">
        
        <?= csrf_field() ?>

        <div>
            <label style="display: block; font-weight: bold;">Full Name:</label>
            <input type="text" name="name" value="<?= $user['name'] ?>" required style="width: 100%; padding: 8px;">
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Email Address:</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" required style="value: 100%; padding: 8px;">
        </div>

        <button type="submit" style="padding: 10px; background: orange; color: white; border: none; cursor: pointer;">Update User</button>
    </form>

    
<?= $this->endSection() ?>