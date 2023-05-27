<section class="feedbacks mb-5 col-6 mx-auto">
    <h2 class="mb-3">Отзывы</h2>
    <?php if (!is_null($data)): ?>
    <?php for ($i = 0; $i < count($data); $i++ ): ?>
        <div class="comment-text mb-4 text-start">
                    <span class="username">
                        <div class="mb-1">
                            <strong><?= $data[$i]['name'] ?></strong>
                        </div>
                        <div class="text-break">
                            <?= $data[$i]['content'] ?>
                        </div>
        </div>
    <?php endfor ?>
    <?php endif ?>
</section>

<section class="feedback-form col-6 mx-auto">
    <h2 class="section-title mb-3" data-aos="fade-up">Оставить отзыв</h2>
    <form action="/feedback/add" method="post">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="content" rows="3" placeholder="Отзыв"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Отправить">
        </div>
        <input type="hidden" name="product_id" value="<?= $data[0]['id']?>">
    </form>
</section>