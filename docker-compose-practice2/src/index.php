<?php
$dsn = 'mysql:host=mysql;dbname=first_db;charset=utf8mb4';
$user = 'first_user';
$pass = 'first_pass';

try {
    $pdo = new PDO($dsn, $user, $pass);

    // --- 1. 登録 または 更新の処理 ---
    if (!empty($_POST['user_name'])) {
        $name = $_POST['user_name'];

        if (!empty($_POST['edit_id'])) {
            // 【更新】edit_idがある場合は上書き（UPDATE）
            $stmt = $pdo->prepare("UPDATE users SET name = ? WHERE id = ?");
            $stmt->execute([$name, $_POST['edit_id']]);
        } else {
            // 【新規】edit_idがない場合は新規保存（INSERT）
            $stmt = $pdo->prepare("INSERT INTO users (name) VALUES(?)");
            $stmt->execute([$name]);
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // --- 2. 削除処理 ---
    if (!empty($_POST['delete_id'])) {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$_POST['delete_id']]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // --- 3. 編集ボタンが押された時の下準備 ---
    $edit_id = "";
    $edit_name = "";
    if (!empty($_POST['push_edit_id'])) {
        $edit_id = $_POST['push_edit_id'];
        $edit_name = $_POST['push_edit_name'];
    }

} catch (PDOException $e) {
    echo "エラー：" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名簿管理アプリ</title>
    <style>
        li { margin-bottom: 10px; }
        .del-btn { color: red; margin-left: 10px; }
        .edit-btn { color: blue; margin-left: 10px; }
        .edit-area { background: #f0f8ff; padding: 10px; border: 1px solid #add8e6; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>名簿管理</h1>

    <div class="<?php echo $edit_id ? 'edit-area' : ''; ?>">
        <h2><?php echo $edit_id ? "「{$edit_name}」さんを編集法中" : "新規登録"; ?></h2>
        <form method="POST" action="">
            <input type="text" name="user_name" value="<?php echo htmlspecialchars($edit_name); ?>" placeholder="名前を入力" required>
            <!-- 編集時のみIDを送信するための隠し項目 -->
            <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">
            <button type="submit"><?php echo $edit_id ? "更新する" : "登録する"; ?></button>
            <?php if($edit_id): ?> <a href="">キャンセル</a> <?php endif; ?>
        </form>
    </div>

    <hr>

    <h2>現在の名簿一覧</h2>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
        $no = 1; // 見た目上の通し番号
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $name = htmlspecialchars($row['name']);
            echo "<li>";
            echo "No.{$no} (ID:{$id}) / 名前：{$name}";

            // --- 編集ボタン（情報をフォームに飛ばす） ---
            echo "<form method='POST' action='' style='display:inline;'>";
            echo "<input type='hidden' name='push_edit_id' value='{$id}'>";
            echo "<input type='hidden' name='push_edit_name' value='{$name}'>";
            echo "<button type='submit' class='edit-btn'>編集</button>";
            echo "</form>";

            // --- 削除ボタン ---
            echo "<form method='POST' action='' style='display:inline;'>";
            echo "<input type='hidden' name='delete_id' value='{$id}'>";
            echo "<button type='submit' class='del-btn' onclick='return confirm(\"削除しますか？\")'>削除</button>";
            echo "</form>";

            echo "</li>";
            $no++;
        }
        ?>
    </ul>
</body>
</html>
