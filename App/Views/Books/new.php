<?php include dirname(__DIR__) . '/Base/header.php'; ?>
<?php include dirname(__DIR__) . '/Base/nav.php'; ?>
    <main>
        <section>
            <form action="" method="POST" novalidate>
                <div>
                    <label for="txtTitle">Title</label>
                    <input type="text" name="title" id="txtTitle">
                </div>
                <div>
                    <label for="cmbAuthors">Author</label>
                    <select name="author" id="cmbAuthors">
                        <?php foreach ($authors as $author): ?>
                            <option value="<?=htmlspecialchars($author['author_id']) ?>">
                                <?=htmlspecialchars($author['first_name'] . 
                                    ' ' . $author['last_name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
        </section>
    </main>
<?php include dirname(__DIR__) . '/Base/footer.php'; ?>