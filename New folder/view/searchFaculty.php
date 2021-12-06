<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/myjs.js"></script>
</head>
<body>
<fieldset>
    <h2>Search Faculty</h2>
    <br>
    <label>Search by Faculty name</label>
    <input type="text" id="fname" ><br>
    <label>Search by Research Interest</label>
    <input type="text" id="fname" ><br>
    <label>Search by Designation</label>
    <select>
        <option>Select Designation</option>
        <option id="fname"  value="Lecturer">Lecturer</option>
        <option id="fname" value="Assistant Professor">Assistant Professor</option>
        <option id="fname" value="Professor">Professor</option>
    </select>
    <br>
    <button onclick="showmyfaculty()">Search</button>
    <br><br>
    <p id="mytext2"></p>
</fieldset>
</body>
</html>