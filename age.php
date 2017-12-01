<html>
<head>
    <title>My Age</title>
</head>
<body>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
</body>
</html>