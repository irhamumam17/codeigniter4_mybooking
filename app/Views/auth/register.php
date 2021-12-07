<?= $this->extend('landing/layout/base') ?>
<?= $this->section('content') ?>
<div class="banner">
    <div class="container_wrap">
        <form>
            <div>
                <input type="text" value="Fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fullname';}">
                <input type="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
            </div>
            <div>
                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

            </div>
            <div class="contact_btn">
                <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Register"></label>
            </div>
        </form>
        <div class="clearfix"></div>
    </div>
</div>
<?= $this->endSection() ?>