<div class="col-lg-9 mx-auto">
    <div class="text-center">
        <?php if ($data): ?>
            <div>
                <img src="/<?= $data[0]['image'] ?>" class="card-img-top" alt="image" style="height: 500px; width: auto">
                <div class="">
                    <h5 class="mt-3"><?= $data[0]['title'] ?></h5>
                    <p class="mt-3">Цена: <?= $data[0]['price'] ?>$</p>
                </div>
            </div>
        <div><?php require_once 'feedback_index.php' ?></div>
        <?php else: \core\Router::goTo404(); ?>
        <?php endif ?>
    </div>

</div>
