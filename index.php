<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- my style -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

<!-- vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div id="app">

    <nav class="d-flex align-items-center">

        <div class="container ">

            <div id="img-logo">
                <img src="./img/Spotify.png" alt="logo sito">
            </div>

        </div>

    </nav>

    <main>

        <div class="container">
    
            <div class="row row-cols-3 gap-5">

                <div v-for="currentDisc in dischi" class="col">

                    <div class="my_card">

                        <div class="my_img_card">
                            <img :src="currentDisc.poster" alt="">
                        </div>

                        <div class="my_text_card">

                            <div class="title">
                                {{currentDisc.title}}
                            </div>
                            <div class="singer">
                                {{currentDisc.author}}
                            </div>
                            <div class="date">
                                {{currentDisc.year}}
                            </div>

                        </div>

                    </div>

                </div>

            </div>
    
        </div>

    </main>



</div>



<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- my script -->
<script src="./script/script.js"></script>

</body>
</html>