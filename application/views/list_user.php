<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar User</title></head>
<body>
     <table>
     <thead>
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Email</th>
         </tr>
     </thead>
     <?php foreach ($user as $u): ?>
     <tbody>
         <tr>
             <td><?= $u['id']; ?></td>
             <td><?= $u['nama']; ?></td>
             <td><?= $u['email']; ?></td>
         </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
</body>
</html>