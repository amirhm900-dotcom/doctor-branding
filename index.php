<?php include 'includes/header.php'; ?>

<main>
    <section class="hero border-bottom" style="text-align: center; padding: 8rem 0 6rem;">
        <div class="container">
            <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div style="background: var(--light-bg); border: 1px solid var(--primary-color); color: var(--primary-color); padding: 16px; border-radius: var(--radius); margin-bottom: 2rem; font-weight: 600;">
                    درخواست مشاوره شما ثبت شد. به زودی تماس می‌گیریم.
                </div>
            <?php endif; ?>

            <span style="color: var(--primary-color); font-weight: 700; font-size: 1rem; margin-bottom: 1rem; display: block;">مخصوص جامعه پزشکی</span>
            <h1 style="max-width: 800px; margin: 0 auto 1.5rem;">برند شخصی قدرتمند<br>برای پزشکان برتر</h1>
            <p style="font-size: 1.25rem; max-width: 600px; margin: 0 auto 3rem; line-height: 1.8;">
                یاد بگیرید چگونه اعتماد بیماران را جلب کنید، در فضای دیجیتال دیده شوید و به مرجع تخصصی بلامنازع حوزه خود تبدیل شوید.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="/course.php" class="btn">مشاهده دوره جامع</a>
                <a href="#consultation" class="btn btn-outline">درخواست مشاوره</a>
            </div>
        </div>
    </section>

    <section class="border-bottom" style="background: #FAFAFA;">
        <div class="container">
            <div class="grid grid-3">
                <div class="card" style="background: transparent; border: none; padding: 0;">
                    <h3>۱. افزایش اعتبار</h3>
                    <p>با تولید محتوای اصولی، تخصص خود را به جامعه نشان دهید و جایگاه برند شخصی خود را تثبیت کنید.</p>
                </div>
                <div class="card" style="background: transparent; border: none; padding: 0;">
                    <h3>۲. جذب هدفمند</h3>
                    <p>به جای بیماران پراکنده، مراجعینی را جذب کنید که به دنبال تخصص دقیق و کیفیت کار شما هستند.</p>
                </div>
                <div class="card" style="background: transparent; border: none; padding: 0;">
                    <h3>۳. مرجعیت تخصصی</h3>
                    <p>در ذهن مخاطب و در شبکه‌های اجتماعی به اولین و معتبرترین گزینه در حوزه درمانی خود تبدیل شوید.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-bottom">
        <div class="container">
            <div class="grid grid-2">
                <div>
                    <h2 style="margin-bottom: 0.5rem;">دوره جامع برندینگ پزشکان</h2>
                    <p style="font-size: 1.1rem; margin-bottom: 2rem;">یک نقشه راه عملی برای پزشکان، متخصصان و کلینیک‌ها جهت ساخت سیستم جذب بیمار.</p>
                    
                    <ul style="list-style: none; margin-bottom: 2.5rem;">
                        <li style="margin-bottom: 1rem; display: flex; align-items: center; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            جایگاه‌سازی و کشف تمایز
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            استراتژی محتوا و سناریونویسی
                        </li>
                        <li style="margin-bottom: 1rem; display: flex; align-items: center; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            اصول اعتمادسازی در اینستاگرام
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            سیستم‌سازی برای جذب مستمر
                        </li>
                    </ul>

                    <div style="font-size: 1.75rem; font-weight: 800; margin-bottom: 1.5rem; color: var(--text-primary);">
                        ۹,۹۰۰,۰۰۰ <span style="font-size: 1rem; color: var(--text-secondary); font-weight: normal;">تومان</span>
                    </div>
                    <a href="/course.php" class="btn" style="width: 100%;">ثبت‌نام و شروع یادگیری</a>
                </div>
                
                <div style="background: var(--light-bg); border: 1px solid var(--border-color); border-radius: var(--radius); height: 450px; display: flex; align-items: center; justify-content: center;">
                    <span style="color: var(--primary-color); font-weight: bold; font-size: 1.2rem;">[ تصویر پکیج یا کاور دوره ]</span>
                </div>
            </div>
        </div>
    </section>

    <section id="consultation">
        <div class="container" style="max-width: 500px;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2>درخواست مشاوره</h2>
                <p>فرم زیر را پر کنید. برای بررسی شرایط مطب یا کلینیک شما، در اسرع وقت تماس می‌گیریم.</p>
            </div>
            
            <form action="/forms/consultation-handler.php" method="POST" class="card">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="دکتر ...">
                </div>
                <div class="form-group">
                    <label for="phone">شماره موبایل</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required placeholder="0912..." dir="ltr">
                </div>
                <div class="form-group">
                    <label for="field">تخصص / زمینه فعالیت</label>
                    <input type="text" id="field" name="field" class="form-control" required placeholder="مثال: دندانپزشک زیبایی">
                </div>
                <div class="form-group">
                    <label for="details">توضیحات (اختیاری)</label>
                    <textarea id="details" name="details" class="form-control" rows="3" placeholder="چالش اصلی شما چیست؟"></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">ثبت درخواست مشاوره</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>