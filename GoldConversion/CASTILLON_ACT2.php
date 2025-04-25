<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gold Rate Converter</title>
    <link rel="stylesheet" href="styles4prac2.css">
   
</head>

<body>
    <div class="logo">
        <img src="logoGold.png" alt="Website Logo">
    </div>

    <h2>Gold Rate Converter</h2>

    <form method="post">
        <label for="karat">Select Gold Type:</label>
        <br><br>
        <select name="karat" id="karat">
            <option value="" disabled selected>--Select--</option>
            <option value="24">24K</option>
            <option value="23">23K</option>
            <option value="22">22K</option>
            <option value="21">21K</option>
            <option value="20">20K</option>
            <option value="19">19K</option>
            <option value="18">18K</option>
        </select>
        <br><br>

        <label for="grams">Enter Grams:</label>
        <br><br>

        <input type="number" name="grams" id="grams" min="1" required>
        <br><br>

        <button type="submit" name="calculate">Calculate</button>

        <?php
        if (isset($_POST['calculate']) && !empty($_POST['karat']) && !empty($_POST['grams'])) {
            $prices = [
                "24" => 5480.28, "23" => 5251.82, "22" => 5023.37,
                "21" => 4795.11, "20" => 4575.91, "19" => 4347.01, "18" => 4118.22
            ];

            $karat = $_POST['karat'];
            $grams = $_POST['grams'];
            $total_price = $grams * $prices[$karat];

            echo "<p class='result'>You selected <b>{$grams} gram/s</b> of <b>{$karat}K gold</b>.</p>";
            echo "<p class='result'>Total Price: ₱" . number_format($total_price, 2) . "</p>";
        }
        ?>
    </form>
</body>
</html>
