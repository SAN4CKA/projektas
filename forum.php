<?php  include("./block/header.php"); ?>
<?php

require "./info/database.php";

if (isset($_POST['theme'])) {
    $insert = 'INSERT INTO themes (theme, description) VALUES (?, ?)';
    $query = $pdo->prepare($insert);
    $query->execute([$_POST['theme'], $_POST['description']]);
}

$sql = 'SELECT * FROM themes';
$statement = $pdo->query($sql);
$themes = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
    body {
            font-family: roboto;
            background-color: white;
            margin: 0;
            padding: 0;
            text-decoration:none;
            font:black;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px;
        }

        h1 {
            color: black;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        form button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: black;
            color: #fff;
            font-size: 16px;
            
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        .tema{
            text-decoration:none;
            font-family:roboto;
            font-size:24px;
            color:black;
        }

        </style>
<div class="container">
    <h1 class="text-center display-4 my-5">Sveiki!</h1>
    <form action="" method="post">
        <label for="theme">Nauja tema</label>
        <input type="text" name="theme" required>
        <label for="description">Apibudinimas</label>
        <textarea name="description" required></textarea>
        <button type="submit">Pridėti temą</button>
    </form>
    <br>
    <table>
        <?php foreach ($themes as $theme): ?>
            <tr>
                <td>
                    <a class="tema" href="theme.php?id=<?php echo $theme['id']; ?>">
                        <?php echo htmlspecialchars($theme['id'] . " - " . $theme['theme'] . " - " . $theme['description']); ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
