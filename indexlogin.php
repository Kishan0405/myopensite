<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles/stylesindexlogin.css">
    <link rel="stylesheet" href="styles/stylesbanner.css">
    <link rel="icon" type="image/png" href="mylogo.png">
</head>
<body>
    <header>
        <imgsrc="mylogo.png" alt="Banner Image">
        <!-- Add a button for sign out -->
        <button id="signOutButton" onclick="logout()">Sign Out</button>
    </header>
    <nav>
        <ul>
            <li><a href="loading.html">Recents</a></li>
            <li><a href="Contactlogin.html">Contact</a></li>
            <li><a href="undermaintainance.html">Buy Here</a></li>
            <li><a href="Aboutlogin.html">About</a></li>
        </ul>
    </nav>
    <section>

        <h2>Contents/Posts</h2>
        <ul>
            <p><li><a href="instructionsquiz.html">Quiz on Ancient Historyof India</a></li></p>
            <p><li><a href="instructionsquiz2.html">Quiz on Electronics and Computers</a></li></p>
            <p><li><a href="loading.html"></a></li></p>
            <p><li><a href="loading.html"></a></li></p>
            <p><li><a href="loading.html"></a></li></p>
            <p><li><a href="loading.html"></a></li></p>
            <!-- Add more links to your other pages as needed -->
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 <a href="https://specialboxui.netlify.app/">Special BOX UI</a></p>
        <div class="banner">
            <h1>Powered By</h1>
            <img src="mylogo.png" alt="Banner Image">
        </div>
    </footer>

    <script>
        console.log("Page loaded");

        // Check if the user is logged in and came from the correct site
        const allowedReferers = ["https://specialboxuihelpserver.000webhostapp.com/", "https://specialboxuihelpserver.000webhostapp.com/login.php"];
        const referer = document.referrer;

        if (!sessionStorage.getItem("loggedIn") || !allowedReferers.includes(referer)) {
            console.log("User is not logged in or came from an unauthorized referer. Redirecting to login page.");
            window.location.href = "https://specialboxuihelpserver.000webhostapp.com/"; // Redirect to the login page if not logged in or came from an unauthorized referer
        } else {
            console.log("User is logged in and came from an authorized referer.");
        }

        // Function to logout
        function logout() {
            console.log("Logout button clicked.");
            sessionStorage.removeItem("loggedIn");
            console.log("Logged out. Redirecting to login page.");
            window.location.href = "https://specialboxuihelpserver.000webhostapp.com/"; // Redirect to the login page after logout
        }
    </script>
    
</body>
</html>