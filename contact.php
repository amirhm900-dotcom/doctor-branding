<?php include 'includes/header.php'; ?>

<main>
    <section style="padding-top: 6rem;">
        <div class="container" style="max-width: 550px;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h1>تماس با ما</h1>
                <p>سوال، انتقاد یا پیشنهادی دارید؟ خوشحال می‌شویم بشنویم.</p>
            </div>

            <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div style="background: var(--light-bg); border: 1px solid var(--primary-color); color: var(--primary-color); padding: 16px; border-radius: var(--radius); margin-bottom: 2rem; font-weight: 600;">
                    پیام شما دریافت شد. در اولین فرصت پاسخ می‌دهیم.
                </div>
            <?php endif; ?>

            <form action="/forms/contact-handler.php" method="POST" class="card">
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" id="email" name="email" class="form-control" required dir="ltr">
                </div>
                <div class="form-group">
                    <label for="message">پیام</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">ارسال پیام</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>