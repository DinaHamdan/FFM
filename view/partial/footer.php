<footer>
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