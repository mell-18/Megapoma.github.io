<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajería de Emergencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <!-- Logo -->
        <div class="logo">
            <h2>MEGAPOMA</h2>
        </div>

        <!-- Login Form -->
        <div class="login-form-container">
            <h1>Mensajería de Emergencia</h1>
            <p>No tienes cuenta? <a href="registro.php">Sign Up</a></p>

            <form action="modulos.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <a href="https://support.google.com/accounts/answer/7682439?hl=es-419" class="forgot-email">Olvidaste tu Email?</a>
                <button type="submit" class="email-button">Continuar con Email →</button>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>visitar</span>
            </div>

            <div class="social-login">
                <a href="https://www.pomaray.edu.do/">
                    <button class="google-btn">
                        <img src="descargar.jpg" alt="Pomaray"> Pomaray web
                    </button>
                </a>
                <a href="https://www.facebook.com/lovepomaray/">
                    <button class="facebook-btn">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="Facebook"> lovepomaray
                    </button>
                </a>
                <a href="https://www.instagram.com/politecnicoybarra/">
                    <button class="apple-btn">
                        <img src="insta.jpg" alt="Instagram"> politecnico yabarra
                    </button>
                </a>
            </div>

            <!-- SSO Link -->
            <div class="sso-link">
                <a href="registro.php">Registrar usuarios como admin</a>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <a href="#">Terms of Use</a> |
            <a href="#">Privacy Policy</a>
            <p>This site is protected by reCAPTCHA Enterprise. <a href="#">Google's Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
        </footer>
    </div>
</body>


<style>

    /* Reset General */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Fullscreen Container */
.login-container {
    display: center;
    flex-direction: column;
    justify-content: center; /* Centra verticalmente */
    align-items: center; /* Centra horizontalmente */
    text-align: center;
    background: #ffffff;
    padding: 3rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.logo h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 1rem;
}

/* Login Form */
.login-form-container h1 {
    font-size: 2rem;
    font-weight: bold;
    color: #111;
    margin-bottom: 0.5rem;
}

.login-form-container p {
    color: #333;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
}

.login-form-container a {
    color: #0066ff;
    text-decoration: none;
}

.login-form-container a:hover {
    text-decoration: underline;
}

form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

label {
    text-align: left;
    font-weight: bold;
    font-size: 0.9rem;
}

input {
    padding: 0.8rem;
    border: none;
    border-bottom: 1px solid #ccc;
    font-size: 1rem;
    outline: none;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #0066ff;
}

.forgot-email {
    font-size: 0.9rem;
    text-align: left;
}

.email-button {
    margin-top: 1rem;
    padding: 0.8rem;
    background-color: #28a745; /* Verde */
    color: #fff;
    border: none;
    border-radius: 25px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}

.email-button:hover {
    background-color: #218838;
}

/* Divider */
.divider {
    position: relative;
    margin: 1rem 0;
    font-size: 0.9rem;
    color: #999;
}

.divider::before,
.divider::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 40%;
    height: 1px;
    background-color: #ddd;
}

.divider::before {
    left: 0;
}

.divider::after {
    right: 0;
}

/* Social Login Buttons */
.social-login {
    display: center;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1rem;
}

.social-login button {
    display: center;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.8rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.social-login img {
    width: 20px;
    height: 20px;
}

.google-btn {
    background-color: #4285f4;
    color: #fff;
    border: none;
}

.google-btn:hover {
    background-color: #357ae8;
}

.facebook-btn {
    background-color: #3b5998;
    color: #fff;
    border: none;
}

.facebook-btn:hover {
    background-color: #2d4373;
}

.apple-btn {
    background-color: #fff;
    color: #000;
    border: 1px solid #000;
}

.apple-btn:hover {
    background-color: #f0f0f0;
}

/* SSO Link */
.sso-link a {
    color: #0066ff;
    font-size: 0.9rem;
    font-weight: bold;
}

/* Footer */
footer {
    margin-top: 1rem;
    font-size: 0.8rem;
    color: #999;
}

footer a {
    color: #0066ff;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

footer p {
    margin-top: 0.5rem;
}

    </style>
</html>
