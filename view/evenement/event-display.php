<main>
    <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
        <a href="/ctrl/evenement/update-event-display.php">Modifier l'évenement</a>
    <?php  } ?>

    <div id="poster-container">
        <img src="" alt="">
    </div>
    <div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia nemo eius, dicta aliquam ut natus similique ea blanditiis esse neque est quaerat omnis distinctio magnam libero eligendi optio at fugit?</p>
    </div>

    <div>
        <h2>Programme </h2>

        <div>
            <!-- Les BR vont être enlevés après -->
            <p> Vendredi <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, consequatur delectus fugiat quam iste, ullam distinctio obcaecati error voluptas tempora illo accusantium sunt labore libero nobis fuga, voluptates vero commodi!</p>
            <p>Samedi <br>
                Quos sed temporibus accusamus harum, consequuntur animi. Sed obcaecati atque quasi corrupti? Unde sit commodi tenetur nam eum similique beatae a quidem. Dolorem quas magni minima id saepe sed temporibus?</p>
            <p>Dimanche <br>Autem, voluptatem. Reiciendis vero sunt animi sapiente itaque doloribus corporis fugiat facere ipsam, ullam aliquid at iusto a magni autem illum deleniti magnam officiis libero quidem minus, hic nisi? Aut!</p>

        </div>
        <div>
            <a href="">Réserver ma place</a>
            <a href="/ctrl/evenement/volunteer-display.php">Devenir Bénévole</a>
        </div>

        <div>
            <p>Où chemin de Saint Félix 84570 Malmort du Comtat </p>
            <p>Lien Google Maps</p>
        </div>
    </div>


</main>