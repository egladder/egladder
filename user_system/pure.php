<?php include('pages/_base.php'); ?>
    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu pure-menu-open">
                <a class="pure-menu-heading" href="#">Company</a>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>

                    <li class="menu-item-divided pure-menu-selected">
                        <a href="#">Services</a>
                    </li>

                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Main -->
        <div id="main">
            <div class="header">
                <h1>Egladder</h1>
                <h2>A subtitle for your page goes here</h2>
            </div>

            <div class="content">
                
                <!-- login-form -->
                <div id="login-form">
                    <h3>Login</h3>
                    <fieldset>

                        <form action="javascript:void(0);" method="get">

                            <input type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

                            <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

                            <input type="submit" value="Login">

                            <footer class="clearfix">

                                <p><span class="info">?</span><a href="#">Forgot Password</a></p>

                            </footer>

                        </form>

                    </fieldset>
                </div> 
                <!-- end login-form -->

                <h2 class="content-subhead">How to use this layout</h2>
                <p>
                    To use this layout, you can just copy paste the HTML, along with the CSS in <a href="/css/layouts/side-menu.css" alt="Side Menu CSS">side-menu.css</a>, and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla JavaScript to simply toggle an <code>active</code> class that makes the menu responsive.
                </p>

                <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div class="pure-g">
                    <div class="pure-u-1-4">
                        <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                    </div>
                    <div class="pure-u-1-4">
                        <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                    </div>
                    <div class="pure-u-1-4">
                        <img class="pure-img-responsive" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
                    </div>
                    <div class="pure-u-1-4">
                        <img class="pure-img-responsive" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
                    </div>
                </div>

                <h2 class="content-subhead">Try Resizing your Browser</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
<?php include('pages/footer.php'); ?>
