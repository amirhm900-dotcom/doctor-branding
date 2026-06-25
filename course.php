<?php include 'includes/header.php'; ?>

<main>
    <section class="border-bottom" style="text-align: center; padding: 8rem 0 6rem;">
        <div class="container">
            <span style="color: var(--primary-color); font-weight: 700; font-size: 1rem; margin-bottom: 1rem; display: block;">دوره جامع</span>
            <h1 style="max-width: 800px; margin: 0 auto 1.5rem;">برندینگ پزشکان و مارکتینگ کادر درمان</h1>
            <p style="font-size: 1.25rem; max-width: 650px; margin: 0 auto 2rem; line-height: 1.8;">
                یک برنامه قدم‌به‌قدم برای آن‌که از یک پزشک ناشناس، به برندی معتبر در فضای دیجیتال تبدیل شوید.
            </p>
            <div style="font-size: 2rem; font-weight: 800; color: var(--primary-color); margin-bottom: 2rem;">
                ۹,۹۰۰,۰۰۰ <span style="font-size: 1rem; color: var(--text-secondary);">تومان</span>
            </div>
            <a href="#enroll" class="btn">ثبت‌نام در دوره</a>
        </div>
    </section>

    <section class="border-bottom">
        <div class="container" style="max-width: 800px;">
            <h2>چه چیزی یاد می‌گیرید؟</h2>
            <div style="display: grid; gap: 2rem; margin-top: 2rem;">
                <div style="border-bottom: 1px solid var(--border-color); padding-bottom: 2rem;">
                    <h3>جایگاه‌سازی برند شخصی</h3>
                    <p>کشف نقطه تمایز شما نسبت به همکاران و ساختن پیامی که بیماران را جذب می‌کند.</p>
                </div>
                <div style="border-bottom: 1px solid var(--border-color); padding-bottom: 2rem;">
                    <h3>استراتژی تولید محتوا</h3>
                    <p>از ایده تا انتشار؛ چگونه محتوایی بسازید که اعتماد و تخصص را همزمان نشان دهد.</p>
                </div>
                <div style="border-bottom: 1px solid var(--border-color); padding-bottom: 2rem;">
                    <h3>سیستم جذب بیمار</h3>
                    <p>طراحی یک فرآیند اتوماتیک که از دیده شدن تا نوبت‌گیری را پوشش دهد.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="enroll">
        <div class="container" style="max-width: 500px; text-align: center;">
            <h2>همین حالا شروع کنید</h2>
            <p>برای تهیه دوره و دریافت لینک دانلود، فرم زیر را پر کنید.</p>
            <!-- در نسخه ابتدایی، این یک فرم ساده تماس است -->
            <form action="/forms/consultation-handler.php" method="POST" class="card">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">شماره موبایل</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required dir="ltr">
                </div>
                <button type="submit" class="btn" style="width: 100%;">ثبت و دریافت لینک دوره</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>