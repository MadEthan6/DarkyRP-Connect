<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to DarkyRP</title>
    <style>
        body {
            background-color: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #00FFFF; /* Light Blue color for the heading */
            font-size: 48px; /* Increase font size for the heading */
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5); /* Neon radiating light effect */
        }
        .button {
            background-color: #00FF00;
            color: #000;
            font-size: 24px;
            padding: 20px 40px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5); /* Neon glowing effect */
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #00CC00; /* Slightly darker green on hover */
        }
    </style>
</head>
<body>
    <h1>Connect to DarkyRP</h1>
    <form method="post">
        <button type="submit" name="connect" class="button">CONNECT</button>
    </form>
    
    <?php
    if (isset($_POST['connect'])) {
        $serverIP = '169.150.234.70';
        $serverPort = '27015';
        $connectURL = "steam://connect/$serverIP:$serverPort";
        
        // Redirect the user to the Garry's Mod server
        header("Location: $connectURL");
        exit;
    }
    ?>
</body>
</html>
