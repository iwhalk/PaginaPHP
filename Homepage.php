<!DOCTYPE html>
<html>
<head>
    <title>My Homepage</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <p>This is a basic homepage created using HTML and PHP.</p>

    <h2>Acerca de mi</h2>
    <p>El Jamon es mi pasion.</p>

    <h2>Recent Projects</h2>
    <ul>
        <li><a href="Catalogo.php">Catalogo</a></li>
        <li>Project 2</li>
        <li>Project 3</li>
    </ul>

    <h2>Contact Me</h2>
    <form method="post" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>