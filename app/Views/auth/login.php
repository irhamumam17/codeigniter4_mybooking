<?= $this->extend('landing/layout/base') ?>
<?= $this->section('content') ?>
<div class="banner">
    <div id="loginContainer">
        <div id="loginBox" style="display: block;">
            <form id="loginForm">
                <fieldset id="body">
                    <fieldset>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email">
                    </fieldset>
                    <fieldset>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </fieldset>
                    <input type="submit" id="login" value="Sign in">
                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                </fieldset>
                <span><a href="#">Forgot your password?</a></span>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?= $this->endSection() ?>