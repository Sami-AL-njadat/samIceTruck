<!DOCTYPE html>
<html>
<head>
    <title>New Message from Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
            line-height: 1.6;
        }
        strong {
            color: #007BFF;
        }
        .message-content {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #007BFF;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Message from Contact Us</h1>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Phone:</strong> {{ $phone }}</p>
        <div class="message-content">
            <p><strong>Message:</strong></p>
            <p>{{ $messageContent }}</p>
        </div>
    </div>
</body>
</html>