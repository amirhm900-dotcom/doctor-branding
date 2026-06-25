<?php include 'includes/header.php'; ?>

<main>
    <section style="padding-top: 6rem;">
        <div class="container" style="max-width: 550px;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h1>درخواست مشاوره</h1>
                <p>شرایط مطب، کلینیک یا فعالیت شما را بررسی می‌کنیم و یک راهکار عملی پیشنهاد می‌دهیم.</p>
            </div>

            <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div style="background: var(--light-bg); border: 1px solid var(--primary-color); color: var(--primary-color); padding: 16px; border-radius: var(--radius); margin-bottom: 2rem; font-weight: 600;">
                    درخواست شما با موفقیت ثبت شد. طی ۲۴ ساعت تماس می‌گیریم.
                </div>
            <?php endif; ?>

            <form action="/forms/consultation-handler.php" method="POST" class="card">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="دکتر احمدی">
                </div>
                <div class="form-group">
                    <label for="phone">شماره موبایل</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required placeholder="0912..." dir="ltr">
                </div>
                <div class="form-group">
                    <label for="field">تخصص / زمینه فعالیت</label>
                    <input type="text" id="field" name="field" class="form-control" required placeholder="مثال: متخصص پوست">
                </div>
                <div class="form-group">
                    <label for="details">توضیحات</label>
                    <textarea id="details" name="details" class="form-control" rows="3" placeholder="چه انتظاری دارید؟"></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">ارسال درخواست</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>