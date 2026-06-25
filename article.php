<?php
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: /articles.php');
    exit;
}

$articleFile = __DIR__ . '/assets/articles/article-' . basename($id) . '.txt';
if (!file_exists($articleFile)) {
    header('Location: /articles.php');
    exit;
}

$content = file_get_contents($articleFile);
// جدا کردن بخش‌های ابتدایی (عنوان، تاریخ، خلاصه) از متن کامل
// فرض می‌کنیم ساختار فایل اینگونه است:
// عنوان: ...
// تاریخ: ...
// خلاصه: ...
// (خط خالی)
// متن کامل مقاله: ...

$lines = explode("\n", $content);
$title = '';
$date = '';
$summary = '';
$bodyStart = false;
$body = '';

foreach ($lines as $line) {
    $trimmed = trim($line);
    if (!$bodyStart) {
        if (strpos($trimmed, 'عنوان:') === 0) {
            $title = trim(substr($trimmed, strlen('عنوان:')));
        } elseif (strpos($trimmed, 'تاریخ:') === 0) {
            $date = trim(substr($trimmed, strlen('تاریخ:')));
        } elseif (strpos($trimmed, 'خلاصه:') === 0) {
            $summary = trim(substr($trimmed, strlen('خلاصه:')));
        } elseif ($trimmed === '') {
            // نادیده بگیر
        } elseif (strpos($trimmed, 'متن کامل مقاله:') === 0) {
            $bodyStart = true;
        }
    } else {
        $body .= $line . "\n";
    }
}
$body = nl2br(htmlspecialchars(trim($body)));
?>

<?php include 'includes/header.php'; ?>

<main>
    <section style="padding-top: 6rem;">
        <div class="container" style="max-width: 750px;">
            <a href="/articles.php" style="text-decoration: none; color: var(--primary-color); font-weight: 600; margin-bottom: 1.5rem; display: inline-block;">← بازگشت به مقالات</a>
            <h1><?php echo htmlspecialchars($title); ?></h1>
            <p style="color: var(--text-secondary); margin-bottom: 0.5rem;"><?php echo htmlspecialchars($date); ?></p>
            <p style="font-size: 1.1rem; font-weight: 600; margin-bottom: 2rem;"><?php echo htmlspecialchars($summary); ?></p>
            <div style="line-height: 1.9; font-size: 1.05rem;">
                <?php echo $body; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>