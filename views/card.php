
        <section class="card mt-2">
            <header class="card-header d-flex align-items-center">
                <h5 class="card-title pl-4 mb-0">
                <img class="avatar" src="img/avatar6.png" alt="Avatar" class="avatar">
                <a href ="user.php?=id<?= $row['id'] ?>">   
                <?= $row['name'] ?>
                </a>
                    
                    <small class="pl-4">
                        <?= $row['created_at'] ?>
                    </small>
                </h5>
            </header>
            <a href="tweet.php?id=<?= $row['id'] ?>">
                <div class="card-body">
                    <p class="card-text">
                        <?= $row['body'] ?>
                    </p>
                </div>
            </a>
            <footer class="card-footer d-flex justify-content-end">
            <img class="heart" src = "img/heart.png" alt="Like" height="42" width="45">
            </footer>
</section>