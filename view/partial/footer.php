<footer>
    <article id="social-media">
        <div id="flash-message-footer">
            <?php if (!empty($args['session']['msg']['info'])) { ?>

                <div class="info">
                    <?php foreach ($args['session']['msg']['info'] as $info) { ?>
                        <p id="info-message"> <?= $info ?></p>
                    <?php } ?>

                </div>
            <?php } ?>

            <?php if (!empty($args['session']['msg']['error'])) { ?>

                <div class="error">
                    <?php foreach ($args['session']['msg']['error'] as $error) { ?>
                        <p id="error-message"> <?= $error ?> </p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

        <?php unset($_SESSION['msg']) ?>
        <img id="social-media-logo" src="/asset/img/FFM-logo-300x205.png" alt="Fire-From-Mars-logo">
        <div id="social-media-photo-container">
            <img class="social-media-photo" src="/asset/img/instagram-fotor-bg-remover-20240326164247.png" alt="">
            <img class="social-media-photo" src="/asset/img/youtube-fotor-bg-remover-20240326164342.png" alt="">
            <img class="social-media-photo" src="/asset/img/facebook-fotor-bg-remover-20240326164437.png" alt="">
        </div>
    </article>



    <section id="footer">
        <div id="footer-container">
            <img class="ffm-logo" src="/asset/img/fire-LOGOFFM-1-223x300.png" alt="">
            <p>2023 FireFromMars © Tous droits réservés </p>
        </div>
    </section>
</footer>
<script>
    /* I might remove this logo 3 changed id*/
    let mybutton = document.getElementById("logo3");
    mybutton.addEventListener('click', () => {
        mybutton.style.display = "none";
        document.getElementById("menuBar").style.display = "block";
        console.log("patate");
    });
</script>
<script src="/js/gallery.js"></script>
</body>


</html>