<div class="header">
        <div class="col-sm-8 header-left">
            <div class="logo">
                <a href="index.html"><img src="<?= base_url('landing/images/logo.png')?>" alt="" /></a>
            </div>
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="<?= base_url('landing/images/nav.png')?>" alt="" /></a>
                <ul class="nav" id="nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="rooms.html">Rooms</a></li>
                    <!-- <li><a href="news.html">News</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="404.html">Blog</a></li> -->
                    <div class="clearfix"></div>
                </ul>
                <script type="text/javascript" src="<?= base_url('landing/js/responsive-nav.js')?>"></script>
            </div>
            <!-- start search-->
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <!----search-scripts---->
            <script src="<?= base_url('landing/js/classie.js')?>"></script>
            <script src="<?= base_url('landing/js/uisearch.js')?>"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <!----//search-scripts---->
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-4 header_right">
            <div id="loginContainer"><a href="#" id="loginButton">
                <img src="<?= base_url('landing/images/login.png')?>"><span>Login</span></a>
                <div id="loginBox">
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
        <div class="clearfix"></div>
    </div>