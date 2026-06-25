<?php include 'includes/header.php'; ?>

<main>
    <section style="padding-top: 6rem;">
        <div class="container" style="max-width: 800px;">
            <h1>مقالات</h1>
            <p style="font-size: 1.2rem; margin-bottom: 3rem;">آموزه‌هایی از دنیای برندینگ پزشکی</p>

            <div style="display: grid; gap: 2.5rem;">
                <?php
                $metaFile = __DIR__ . '/data/articles-meta.txt';
                if (file_exists($metaFile)) {
                    $lines = file($metaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($lines as $line) {
                        $parts = explode('|', $line);
                        if (count($parts) >= 4) {
                            $id      = trim($parts[0]);
                            $title   = trim($parts[1]);
                            $date    = trim($parts[2]);
                            $summary = trim($parts[3]);
                            echo '<div style="border-bottom: 1px solid var(--border-color); padding-bottom: 2rem;">';
                            echo '<h3><a href="/article.php?id=' . urlencode($id) . '" style="text-decoration: none; color: var(--text-primary);">' . htmlspecialchars($title) . '</a></h3>';
                            echo '<p style="font-size: 0.9rem; color: var(--text-secondary);">' . htmlspecialchars($date) . '</p>';
                            echo '<p>' . htmlspecialchars($summary) . '</p>';
                            echo '<a href="/article.php?id=' . urlencode($id) . '" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">مطالعه بیشتر ←</a>';
                            echo '</div>';
                        }
                    }
                } else {
                    echo '<p>هنوز مقاله‌ای منتشر نشده است.</p>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>