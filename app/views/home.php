<section class="row">
    <div class="d-flex col-sm-12 justify-content-between">
    <?php foreach($data as $row): ?>
    <div class="mb-3 mx-auto mt-5">
        <a href="main/product/<?= $row['id'] ?>" class="card" style="width: 18rem;">
            <img src="/<?= $row['image'] ?>" class="card-img-top" alt="image" style="height: 250px; width: auto">
            <div class="card-body">
                <h5 class="card-title"><?= $row['title'] ?></h5>
                <p class="card-text">Цена: <?= $row['price'] ?>$</p>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    </div>
</section>
