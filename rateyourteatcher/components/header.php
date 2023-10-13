<header>
    <img src="votre-logo.png" alt="Logo de Mon Site Web">

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="buttons">
        <a href="#" class="button">Sign Up</a>
        <a href="#" class="button">Login</a>
    </div>
</header>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: black;
        color: white;
        padding: 10px 20px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    header img {
        max-width: 100px;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    nav li {
        margin-right: 20px;
    }

    .buttons {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .button {
        margin-left: 20px;
        background-color: #555;
        color: white;
        text-decoration: none;
    }
</style>