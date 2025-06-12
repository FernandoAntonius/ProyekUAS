<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Creative Form</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            padding: 0 10px;
            position: relative;
            background: #000;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("hero-bg.jpg") center/cover no-repeat;
            z-index: -1;
            opacity: 0.8;
        }

        .wrapper {
            width: 400px;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .input-field {
            position: relative;
            border-bottom: 2px solid #ccc;
            margin: 15px 0;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px;
            pointer-events: none;
            transition: 0.15s ease;
        }

        .input-field input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: #fff;
        }

        .input-field input:focus~label,
        .input-field input:valid~label {
            font-size: 0.8rem;
            top: 10px;
            transform: translateY(-120%);
        }

        button {
            background: #fff;
            color: #000;
            font-weight: 600;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
            border: 2px solid transparent;
            transition: 0.3s ease;
            margin-top: 20px;
        }

        button:hover {
            color: #fff;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        .bottom-text {
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-size: 14px;
        }

        .bottom-text a {
            color: #efefef;
            text-decoration: none;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <h2>Create Account</h2>
        <form onsubmit="return validateForm()">
            <div class="input-field">
                <input type="text" id="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="email" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit">Register</button>
            <div class="bottom-text">
                Already have an account? <a href="#">Login</a>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            const email = document.getElementById("email").value;
            if (!email.includes("@")) {
                alert("Please enter a valid email.");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>