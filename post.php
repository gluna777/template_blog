<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?> </h1>
        <p id="post-description"><?= $currentPost['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/images/<?= $currentPost['image'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde illum dignissimos
            perferendis minus suscipit tenetur doloribus soluta vel mollitia nam dolore atque optio fuga accusantium
            qui nulla, sapiente similique eos? Voluptatum quia facere impedit suscipit? Ab doloribus impedit reprehenderit,
            vel minima velit ut eaque dolores. Perspiciatis, vitae necessitatibus obcaecati, omnis ducimus commodi accusamus,
            eligendi alias nam maiores veniam reiciendis reprehenderit? Vitae quaerat, quae eveniet consequatur iste
            quas tempora vel illo architecto possimus quos veritatis reiciendis id cumque tenetur reprehenderit. Accusamus,
            accusantium voluptate animi doloribus autem maxime aut. Veniam, omnis. Quos. Iusto vero mollitia vel ducimus
            explicabo ex provident. Fugit molestias consectetur ipsam reiciendis assumenda quaerat, suscipit ex aperiam itaque
            totam aliquid provident ea placeat quae velit saepe commodi. Culpa, repellendus? Laborum, sint doloribus
            veniam maxime corporis repudiandae deleniti eum similique dolorum hic, itaque neque laudantium impedit,
            optio accusantium cupiditate nam est dolor perferendis voluptatibus ipsum quos labore a. Cum, perferendis. </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"> <?= $tag ?> </a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"> <?= $category ?> </a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php")
?>