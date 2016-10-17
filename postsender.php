<form action="postReciver.php" method = "POST">
    Nazwa: <input type="text" name="username"><br>
    Haslo: <input type="password" name="password"><br>
    Znane jezyki:
    <select name="languages[]" multiple>
        <option value="js">JavaScript</option>
        <option value="php">PHP</option>
        <option value="c">C</option>
        <option value="py">Python</option>
    </select>
    <input type="submit">
</form>