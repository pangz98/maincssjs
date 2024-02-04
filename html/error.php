<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            position: relative;
            overflow: hidden;
            border-radius: 8px 8px 0 0;
        }
        .header img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
            border-radius: 20px;
        }
        .note {
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .note p {
            margin: 0;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .back-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://ik.imagekit.io/chipucu/hayasaka.gif" alt="Header Image"/>
        </div>
        <div class="content">
            <div class="note">
                <p> Đã vượt quá lượt tải xuống trong 24h đối với tệp này, do đó bạn không thể tải tệp xuống vào lúc này. Hãy truy cập lại link sau 0h.</p>
            </div>
            <div class="note">
                <p>Note: This file has exceeded the download limit within 24 hours, so you cannot download the file at this time. Please re-access the link after 0h.</p>
            </div>
            <div class="button-container">
                <button class="back-button" onclick="window.location.href='https://www.animeart.info/'">Back To Home</button>
            </div>
        </div>
    </div>
</body>
</html>
