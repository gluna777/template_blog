<?php
    include_once("templates/header.php")
?>
    <main>
        <div id="title-container">
            <h1> Nome do Blog</h1>
            <p>Slogan do Blog</p>
        </div>
        <div id="posts-container">
            <?php foreach ($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/images/<?= $post['image']?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("templates/footer.php")
?>