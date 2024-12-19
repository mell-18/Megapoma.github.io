<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h1>Confirma tu Admin</h1>
            <p>vuelve <a href="principal.php">Log In</a></p>
            <form action="ingresar.php" method="post">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>
   
                <label>confirmar email</label>
                <input type="email" placeholder="Confirm email" required>
                
                <label>Contraseña</label>
                <input type="password" placeholder="Password" required>
                
                <label>Confirmar Contraseña</label>
                <input type="password" placeholder="Confirm password" required>
                
                <button type="submit"  class="signup-button">Ingresar</button>
            </form>
        </div>
        <div class="divider">
         
        </div>
        
    </div>
</body>

<style>

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f8f9fa;
}

/* Container principal */
.signup-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    background: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 700px;
    gap: 1rem;
}

/* Formulario */
.signup-form {
    flex: 1;
}

.signup-form h1 {
    font-size: 2rem;
    font-weight: bold;
    color: #111;
    margin-bottom: 0.5rem;
}

.signup-form p {
    font-size: 1rem;
    margin-bottom: 1.5rem;
}

.signup-form a {
    color: #0066ff;
    text-decoration: none;
}

.signup-form a:hover {
    text-decoration: underline;
}

.signup-form form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.signup-form label {
    font-size: 0.9rem;
    color: #333;
    font-weight: bold;
}

.signup-form input {
    padding: 0.8rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 0.9rem;
    transition: border-color 0.3s ease;
}

.signup-form input:focus {
    border-color: #0066ff;
    outline: none;
}

.signup-button {
    margin-top: 1rem;
    padding: 0.8rem;
    background-color: #0066ff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}

.signup-button:hover {
    background-color: #0052cc;
}

/* Divisor */
.divider {
    position: relative;
    text-align: center;
    margin: auto 1rem;
}

.divider span {
    display: block;
    color: #999;
    font-weight: bold;
    font-size: 0.9rem;
}

.divider::before,
.divider::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 50px;
    height: 1px;
    background-color: #ddd;
}

.divider::before {
    left: -60px;
}

.divider::after {
    right: -60px;
}

/* Social Login */
.social-login {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.social-login button {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    border: none;
    border-radius: 4px;
    font-size: 0.9rem;
    font-weight: bold;
    cursor: pointer;
    padding: 0.8rem;
    color: #fff;
}

.google-btn {
    background-color: #4285f4;
}

.google-btn img,
.facebook-btn img {
    width: 20px;
    height: 20px;
}

.facebook-btn {
    background-color: #3b5998;
}

.google-btn:hover {
    background-color: #357ae8;
}

.facebook-btn:hover {
    background-color: #2d4373;
}
</style>
</html>
