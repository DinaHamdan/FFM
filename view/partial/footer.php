<footer>
    <article id="social-media">
        <img src="/asset/img/FFM-logo-300x205.png" alt="">
        <div id="social-media-photo-container">
            <img class="social-media-photo" src="/asset/img/instagram-fotor-bg-remover-20240326164247.png" alt="">
            <img class="social-media-photo" src="/asset/img/youtube-fotor-bg-remover-20240326164342.png" alt="">
            <img class="social-media-photo" src="/asset/img/facebook-fotor-bg-remover-20240326164437.png" alt="">
        </div>
    </article>

    <div id="listMessage">
        <?php if (!empty($args['session']['msg']['info'])) { ?>

            <div class="info">
                <ul>
                    <?php foreach ($args['session']['msg']['info'] as $info) { ?>
                        <li><?= $info ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (!empty($args['session']['msg']['error'])) { ?>

            <div class="error">
                <ul>
                    <?php foreach ($args['session']['msg']['error'] as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>

    <?php unset($_SESSION['msg']) ?>

    <section id="footer">
        <div id="footer-container">
            <img class="ffm-logo" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="">
            <p>2023 FireFromMars © Tous droits réservés </p>
        </div>
    </section>
</footer>

</body>
<script>
    let mybutton = document.getElementById("logo3");
    mybutton.addEventListener('click', () => {
        mybutton.style.display = "none";
        document.getElementById("menuBar").style.display = "block";
        console.log("patate");
    });
</script>

</html>