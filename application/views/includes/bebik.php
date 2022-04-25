<!DOCTYPE html>
<html lang="tr">


<head>

    <style>
    * {
        box-sizing: border-box;
        -webkit-animation: fadeIn 0.5s;
        animation: fadeIn 0.5s;
    }

    body {
        background: linear-gradient(65deg, #000, #000 20%, #639);
        display: grid;
        width: 100vw;
        padding-top: 20px;
        margin: 0;
    }

    @media (min-width: 768px) {
        body {
            align-content: center;
            padding: 20px;
        }
    }

    img {
        height: 100%;
        width: 100%;
        min-height: 50px;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .gallery {
        display: grid;
        justify-content: center;
        grid-gap: 20px;
        grid-template-columns: repeat(2, 100px) minmax(200px, 800px) repeat(2, 100px);
        grid-template-rows: repeat(5, 100px);
    }

    @media (max-width: 768px) {
        .gallery {
            grid-gap: 10px;
            grid-template-columns: repeat(auto-fit, 50px);
            grid-template-rows: 300px repeat(auto-fit, 50px);
        }
    }

    .gallery__filler {
        grid-column: span 2;
    }

    @media (max-width: 768px) {
        .gallery__filler {
            display: none;
        }
    }

    .gallery__item {
        cursor: pointer;
        border-radius: 5px;
        grid-row: span 1;
        grid-column: span 1;
        transition: transform 0.1s ease-in-out;
    }

    .gallery__item:hover {
        transform: scale(1.1) rotate(5deg);
    }

    .gallery__select {
        display: none;
    }

    .gallery__select:nth-of-type(1):checked~.gallery .gallery__item:nth-of-type(1) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(1):checked~.gallery .gallery__item:nth-of-type(1):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(1):checked~.gallery .gallery__item:nth-of-type(1) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(2):checked~.gallery .gallery__item:nth-of-type(2) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(2):checked~.gallery .gallery__item:nth-of-type(2):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(2):checked~.gallery .gallery__item:nth-of-type(2) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(3):checked~.gallery .gallery__item:nth-of-type(3) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(3):checked~.gallery .gallery__item:nth-of-type(3):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(3):checked~.gallery .gallery__item:nth-of-type(3) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(4):checked~.gallery .gallery__item:nth-of-type(4) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(4):checked~.gallery .gallery__item:nth-of-type(4):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(4):checked~.gallery .gallery__item:nth-of-type(4) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(5):checked~.gallery .gallery__item:nth-of-type(5) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(5):checked~.gallery .gallery__item:nth-of-type(5):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(5):checked~.gallery .gallery__item:nth-of-type(5) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(6):checked~.gallery .gallery__item:nth-of-type(6) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(6):checked~.gallery .gallery__item:nth-of-type(6):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(6):checked~.gallery .gallery__item:nth-of-type(6) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(7):checked~.gallery .gallery__item:nth-of-type(7) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(7):checked~.gallery .gallery__item:nth-of-type(7):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(7):checked~.gallery .gallery__item:nth-of-type(7) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(8):checked~.gallery .gallery__item:nth-of-type(8) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(8):checked~.gallery .gallery__item:nth-of-type(8):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(8):checked~.gallery .gallery__item:nth-of-type(8) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(9):checked~.gallery .gallery__item:nth-of-type(9) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(9):checked~.gallery .gallery__item:nth-of-type(9):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(9):checked~.gallery .gallery__item:nth-of-type(9) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(10):checked~.gallery .gallery__item:nth-of-type(10) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(10):checked~.gallery .gallery__item:nth-of-type(10):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(10):checked~.gallery .gallery__item:nth-of-type(10) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(11):checked~.gallery .gallery__item:nth-of-type(11) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(11):checked~.gallery .gallery__item:nth-of-type(11):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(11):checked~.gallery .gallery__item:nth-of-type(11) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(12):checked~.gallery .gallery__item:nth-of-type(12) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(12):checked~.gallery .gallery__item:nth-of-type(12):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(12):checked~.gallery .gallery__item:nth-of-type(12) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    .gallery__select:nth-of-type(13):checked~.gallery .gallery__item:nth-of-type(13) {
        cursor: default;
        display: grid;
        align-items: center;
        grid-row: 1/-1;
        grid-column: 3;
    }

    .gallery__select:nth-of-type(13):checked~.gallery .gallery__item:nth-of-type(13):hover {
        transform: none;
    }

    @media (max-width: 768px) {
        .gallery__select:nth-of-type(13):checked~.gallery .gallery__item:nth-of-type(13) {
            grid-row: 1/-3;
            grid-column: 1/-1;
        }
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>




</head>




<body>


    <input class="gallery__select" type="radio" name="gallery-select" id="0" checked="checked" />
    <input class="gallery__select" type="radio" name="gallery-select" id="1" />
    <input class="gallery__select" type="radio" name="gallery-select" id="2" />
    <input class="gallery__select" type="radio" name="gallery-select" id="3" />
    <input class="gallery__select" type="radio" name="gallery-select" id="4" />
    <input class="gallery__select" type="radio" name="gallery-select" id="5" />
    <input class="gallery__select" type="radio" name="gallery-select" id="6" />
    <input class="gallery__select" type="radio" name="gallery-select" id="7" />
    <input class="gallery__select" type="radio" name="gallery-select" id="8" />
    <input class="gallery__select" type="radio" name="gallery-select" id="9" />
    <input class="gallery__select" type="radio" name="gallery-select" id="10" />
    <input class="gallery__select" type="radio" name="gallery-select" id="11" />
    <input class="gallery__select" type="radio" name="gallery-select" id="12" />
    <div class="gallery">
        <div class="gallery__filler"></div>
        <div class="gallery__filler"></div>
        <label class="gallery__item" for="0"><img src="<?php echo base_url("assets/"); ?>images/cat2.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="1"><img src="<?php echo base_url("assets/"); ?>images/cat3.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="2"><img src="<?php echo base_url("assets/"); ?>images/cat4.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="3"><img src="<?php echo base_url("assets/"); ?>images/cat5.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="4"><img src="<?php echo base_url("assets/"); ?>images/cat6.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="5"><img src="<?php echo base_url("assets/"); ?>images/cat7.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="6"><img src="<?php echo base_url("assets/"); ?>images/cat8.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="7"><img src="<?php echo base_url("assets/"); ?>images/bebik.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="8"><img src="<?php echo base_url("assets/"); ?>images/cat9.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="9"><img src="<?php echo base_url("assets/"); ?>images/cat10.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="10"><img src="<?php echo base_url("assets/"); ?>images/cat11.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="11"><img src="<?php echo base_url("assets/"); ?>images/cat12.jpg"
                alt="Something random" /></label>
        <label class="gallery__item" for="12"><img src="<?php echo base_url("assets/"); ?>images/cat13.jpg"
                alt="Something random" /></label>
    </div>

    <div>
        <a class="bg-primary" href=" <?php echo base_url("") ?>">
            Çıkıs Yap
        </a>
    </div>

</body>



</html>