<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?php foreach ($title as $page) : ?>
    <a class="navbar-brand" href="<?= $page["url"] ?>"><?= $page["name"] ?></a>
    <?php endforeach; ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($url as $page) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= $page["url"] ?>"><?= $page["name"] ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>