
<?php  include("./block/header.php"); ?>
<?php
require "./info/database.php";

if (isset($_GET['id'])) {
    $themeId = $_GET['id'];

    if (isset($_POST['message'])) {
        $insert = 'INSERT INTO messages (theme_id, message, user_id) VALUES (:theme_id, :message, :user_id)';
        $query = $pdo->prepare($insert);
        $query->execute([":theme_id"=>$themeId,":message"=>$_POST['message'],":user_id"=>$_COOKIE['user_id']]);
    }

    $sql = 'SELECT * FROM themes WHERE id = :id';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $themeId, PDO::PARAM_INT);
    $statement->execute();
    $theme = $statement->fetch(PDO::FETCH_ASSOC);

    $sql = 'SELECT * FROM messages WHERE theme_id = :id';
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $themeId, PDO::PARAM_INT);
    $statement->execute();
    $messages = $statement->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Invalid theme ID.";
    exit;
}
?>
<style>
    body {
            font-family: roboto;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            color: #333;
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
            color: white;
            font-size: 16px;
            cursor: pointer;
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

        a {
            color: #007bff;
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
<div class="container">
    <h1 class="text-center display-4 my-5">Tema: <?php echo htmlspecialchars($theme['theme']); ?></h1>
    <p><b>Apibudinimas:<b> <?php echo htmlspecialchars($theme['description']); ?></p>
    <table>
        <tr>
            <td>
                <strong>Žinutes:</strong>
                <?php foreach ($messages as $message): ?>
                    <p>Username:<?php echo $_COOKIE['username']; ?></p>
                    <p>Created at:<?php echo $message['date']; ?></p>
                    <p>Comment:<?php echo htmlspecialchars($message['message']); ?></p></p>
                <?php endforeach; ?>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $themeId; ?>">
                    <textarea name="message" required></textarea>
                    <button type="submit">Išsiųsti</button>
                </form>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
