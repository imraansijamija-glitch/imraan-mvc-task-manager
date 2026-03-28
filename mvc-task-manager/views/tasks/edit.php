<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Uredi task</h1>

    <form action="index.php?action=update" method="POST" class="card p-4 shadow-sm">
        <input type="hidden" name="id" value="<?= $task['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" class="form-control" value="<?= $task['title']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Opis</label>
            <textarea name="description" class="form-control" rows="4" required><?= $task['description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Korisnik</label>
            <select name="user_id" class="form-select" required>
                <?php while($user = $users->fetch_assoc()): ?>
                    <option value="<?= $user['id']; ?>" <?= $user['id'] == $task['user_id'] ? 'selected' : ''; ?>>
                        <?= $user['name']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Nazad</a>
    </form>
</div>

</body>
</html>