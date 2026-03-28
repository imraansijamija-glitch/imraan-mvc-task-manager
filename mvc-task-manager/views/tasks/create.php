<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Dodaj novi task</h1>

    <form action="index.php?action=store" method="POST" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Opis</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Korisnik</label>
            <select name="user_id" class="form-select" required>
                <option value="">Izaberi korisnika</option>
                <?php while($user = $users->fetch_assoc()): ?>
                    <option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Sačuvaj</button>
        <a href="index.php" class="btn btn-secondary">Nazad</a>
    </form>
</div>


<script>
document.querySelector("form").addEventListener("submit", function(e) {
    let title = document.querySelector("[name='title']").value;

    if (title.length < 3) {
        alert("Naslov mora imati barem 3 karaktera!");
        e.preventDefault();
    }
});
</script>

</body>
</html>