<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Management System</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: #f4f6f8;
        line-height: 1.6;
    }

    /* Header */
    header {
        background: #2c3e50;
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    header h1 {
        font-size: 22px;
    }

    nav a {
        color: white;
        margin-left: 15px;
        text-decoration: none;
        font-size: 16px;
    }

    nav a:hover {
        text-decoration: underline;
    }

    /* Hero Section */
    .hero {
        background: #3498db;
        color: white;
        text-align: center;
        padding: 80px 20px;
    }

    .hero h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .hero p {
        max-width: 600px;
        margin: auto;
    }

    .hero button {
        margin-top: 20px;
        padding: 12px 25px;
        border: none;
        background: #2c3e50;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .hero button:hover {
        background: #1a252f;
    }

    /* Features */
    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        padding: 50px 20px;
        max-width: 1000px;
        margin: auto;
    }

    .card {
        background: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-align: center;
    }

    .card h3 {
        margin-bottom: 10px;
        color: #2c3e50;
    }

    /* Footer */
    footer {
        background: #2c3e50;
        color: white;
        text-align: center;
        padding: 15px;
        margin-top: 40px;
    }

    /* Mobile tweaks */
    @media (max-width: 600px) {
        header {
            text-align: center;
        }

        nav {
            margin-top: 10px;
            width: 100%;
        }

        nav a {
            display: inline-block;
            margin: 5px 10px;
        }

        .hero h2 {
            font-size: 26px;
        }
    }
</style>
</head>
<body>

<header>
    <h1>Student Management System</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="#contact">Contact</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<section class="hero">
    <h2>Manage Students Easily</h2>
    <p>All student records, courses, and reports in one simple system.</p>
</section>

<section class="features">
    <div class="card">
        <h3>Student Records</h3>
        <p>Add, update, and manage student information efficiently.</p>
    </div>
    <div class="card">
        <h3>Course Management</h3>
        <p>Assign courses and track academic progress.</p>
    </div>
    <div class="card">
        <h3>Reports</h3>
        <p>Generate data reports easily.</p>
    </div>
</section>

<footer id="contact">
    <p>© 2026 Student Management System</p>
</footer>

<script>
    function login() {
        alert("Login system will be added soon!");
    }
</script>

</body>
</html>
