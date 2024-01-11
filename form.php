<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Buat Akun Baru</h2>
    <p><strong>Sign Up Form</strong></p>
    <br>
    <form action="welcome.php" method="POST">
        <label for ="fname">First Name:</label>
        <br>
        <input type="text" id ="fname" name ="fname" required>
        <br><br>
        <label for ="lname">Last Name:</label>
        <br>
        <input type="text" id="lname" name ="lname" required>

    <p>Jenis Kelamin</p>
        <input type="radio" id="male" name="jenisKelamin" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="jenisKelamin" value="Female">
        <label for="female">Female</label><br>

    <p>Select a Country</p>
        <select name ="negara">
            <option value="Indonesia" selected>Indonesia</option>
            <option value="English">English</option>
        </select>

    <p>Language Spoken</p>
        <input type="checkbox" id="indo" name="bahasa[]" value="Indonesia">
        <label for="indo">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" id="english" name="bahasa[]" value="English">
        <label for="english">English</label>
        <br>
        <input type="checkbox" id="other" name="bahasa[]" value="Other">
        <label for="other">Other</label>

    <p>Bio</p>
        <textarea cols="30" rows="10" name="bio"></textarea>
        <br>
        <button>Sign Up</button>
        
    </form>
</body>
</html>