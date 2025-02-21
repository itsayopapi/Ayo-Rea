<!DOCTYPE html>
<html lang="en">
 <!-- head area start -->
    <?php include 'layout/partials/head.php'?>
 <!-- head area end -->

<body>
    <div class="rts-sign-up-section">
        <div class="section-inner">
            <div class="logo-area">
                <a href="index.php"><img src="assets/images/logo/logo-4.svg" alt=""></a>
            </div>
            <form action="#">
                <h2 class="form-title">Log in</h2>
                <div class="form-inner">
                    <div class="single-wrapper">
                        <input type="email" placeholder="Your email" required>
                    </div>
                    <div class="single-wrapper">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="check">
                        <div class="check-box-area">
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="primary__btn">Log In</button>
                    </div>
                </div>
                <p class="sign-in-option">Have no account yet?  <a href="https://My.wefithost.com/manage" class="login__btn">Log In</a></p>
            </form>
        </div>
        <div class="copyright-area">
            <p>Copyright 2023. All Rights Reserved.</p>
        </div>
    </div>

    <div id="anywhere-home" class=""></div>

    <!-- Sidebar area start -->
        <?php include 'layout/partials/sidebar.php';?>
    <!-- Sidebar area end -->

    <!-- THEME PRELOADER START -->
        <?php include 'layout/partials/preloader.php';?>
    <!-- THEME PRELOADER END -->

    <!-- BACK TO TOP AREA START -->
        <?php include 'layout/partials/back-to-top.php';?>
    <!-- BACK TO TOP AREA EDN -->

    <!-- Scripts -->
        <?php include 'layout/partials/scripts.php';?>
</body>

</html>