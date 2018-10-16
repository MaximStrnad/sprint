<?php 
$articles = ["Adventure in SSINFIS", "Spicy technicka olympiada", "MY fun with prynych"];
echo '
    <div class="container article">
        <div class="row justify-content-center">
            <h1>Our articles</h1>
        </div>
';
foreach($articles as $article) {
    echo ('
    <div class="row">
        <div class="col-12 ">
            <hr>
            <h2 class="text-center"> ' .$article .'</h2>
            <div class="w-100"></div>
            <p class="text-center"> ' . $article .' was a fun</p>
        </div>
    </div>
    ');
}
echo '  
</div>';
?>