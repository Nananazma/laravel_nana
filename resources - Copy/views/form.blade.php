<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>sign Up Form</h3>
    <form>
        <p>First name :</p>
        <input type="=text"
        name="nama depan">
        <p>Last name </p>
        <input type="text"
        name="nama belakang">

        <p>gender</p>
        <input type="radio"id="gender1"
        name="gender" value="male">
       <label for="gender1">male</label><br>
        <input type="radio"id="gender2"
        name="gender" value="female">
        <label for="gender2">female</label><br>

        <p>Nationality</p>
        <select name="nation">
            <option value="id">indonesia</option>
            <option value="id">Amerika</option>
            <option value="id">inggris</option>
        </select>

        <p>Language Spoken</p>
        <input type="checkbox" id="bhs"
        name="language" value="language">
        <label for="language">indonesia</label><br>
        <input type="checkbox" id="amc"
        name="language" value="language">
        <label for="language">america</label><br>
        <input type="checkbox" id="eng"
        name="language" value="language">
        <label for="language">Inggris</label><br>
    </label><br>
    <p>Bio</p>
    <textarea name="bio"  cols="20"
    rows="15"></textarea><br>
    <a href="/index">
        <input type="button" id="sign" name="sign up" value="sign up">
    </a>
    </form>
</body>
</html>