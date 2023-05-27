<?php
include("include/header.php");
?>
<section class="contact-img">
    <div class="contact-details">
        <h1>تواصل معنا</h1>
        <p>
            Lorem ipsum dolor sit amet.
        </p>
    </div>
</section>
<div class="contact-title">
    <h1>تحتاج لمساعدة؟كن على يقين اننا دائماَ متواجدون!</h1>
</div>
<section class="main-contact">

    <form class="contact-form">
        <div class="name">
            <input type="text" name="first-name" class="first-name" placeholder="الاسم الاول" required>
            <input type="text" name="last-name" class="last-name" placeholder="الاسم الثاني" required>
        </div>
        <div class="info">
            <input type="tel" name="phone" class="phone" placeholder="رقم الهاتف" required>
            <input type="email" name="email" class="email" placeholder="الايميل" required>
        </div>
        <textarea name="message" class="message" rows="10" placeholder="الرسالة" required></textarea>
        <input type="submit" value="ارسل الاستفسار">
    </form>
</section>
<?php
include("include/footer2.php");
include("include/footer.php");
