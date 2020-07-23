<style type='text/css'>
    * {

        font-family: 'Mulish', sans-serif;
        margin: 0;
        padding: 0;
        letter-spacing: 2px;
        box-sizing: border-box;
        scroll-behavior: smooth;
        

    }

    .nav {
        background-color: #91a8f2;

    }

    .nav a {
        color: black;
        font-family: 'Lobster', cursive;
    }

    .textagainst h1 {
        align-items: center;
        justify-content: center;
        padding: 35px;
        margin-top: 155px;
        font-size: 50px;
        margin-bottom: 105px;
    }

    .imgcorona {
        margin: 35px;
        padding-right: 35px;
        padding-top: 45px;
        padding-bottom: 35px;
        animation: corona2 3s linear infinite;
    }

    .imgcorona2 img {
        margin-right: 5px;
        margin-left: -10px;
        animation: corona 2s linear infinite;
    }

    @keyframes corona {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes corona2 {
        0% {
            transform: scale(1);
        }

        20% {
            transform: scale(.75);
        }

        40% {
            transform: scale(1);
        }

        60% {
            transform: scale(.75);
        }

        80% {
            transform: scale(1);
        }

        100% {
            transform: scale(.75);
        }
    }

    .count {
        text-align: center;
    }

    .list {
        list-style: disc;
        margin-left: 30px;
    }

    .page-footer {
        background-color: #5b586b;
        color: white;
    }

    .projects-horizontal {
        margin-top: 25px;

    }

    .text-centeri {
        padding-top: 25px;
        padding-bottom: 25px;
        background-color: whitesmoke;
        border-radius: 50px;
        margin-bottom: 25px;
        margin-top: 35px;

    }

    #btn22 {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        margin-bottom: 45px;
        border: none;
        outline: none;
        background-color: #333;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
    }

    #btn22:hover {
        background-color: #1684c4;
    }

    .photo3rd {
        box-shadow: -2px -2px 3px 2px rgba(0, 0, 0, .15),
            2px 2px 4px 2px rgba(0, 0, 0, .5);
        margin-top: 70px;
    }
</style>