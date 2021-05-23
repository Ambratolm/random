<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Consolas, sans-serif;
        background-color: #<?= rand(000, 999) ?>;
        transition: 3s background-color;
    }
    body:hover {
        background-color: #<?= rand(000, 999) ?>;
    }
    #amb {
        text-align: center;
        margin: 17% 0;
    }
    #amb a {
        text-shadow: <?php 
            echo rand(-20, 20) . "px "; 
            echo rand(-20, 20) . "px ";
            echo rand(-20, 20) . "px ";
            echo "#" . rand(000, 999);
        ?>;
        text-decoration: none;
        font-size: <?= rand(2, 5) ?>em;
        color: #<?= rand(000, 999) ?>;
        transition: 3s color;
    }
    #amb a:hover {
        color: #<?= rand(000, 999) ?>;
        font-size: <?= rand(3, 10) ?>em;
        transition: 30s font-size;
    }
    #thumb img {
        position: fixed;
        right: 0;
        top: 0;
        border: 2px solid black;
        border-radius: 100%;
        transition: 1s width;
    }
    #thumb img:hover {
        width: 7%;
    }
</style>