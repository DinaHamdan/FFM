 <main>
     <section id="backoffice">
         <h1 id="page-title"><?= $args['pageTitle'] ?></h1>

         <div>
             <?php if (($args)['session']['user']['codeRole'] == 'ADM') { ?>
                 <a target="_blank" href="/backoffice/contactMessage">Messages de contact</a><br>
                 <a target="_blank" href="/backoffice/adhesion">Formulaires Adhésion</a><br>
                 <a target="_blank" href="/backoffice/volunteer-form">Formulaires bénévoles</a><br>
                 <a target="_blank" href="/backoffice/list-member">Membres actifs</a><br>
                 <a target="_blank" href="/backoffice/list-photo-agre">Gallerie agrés</a><br>



             <?php  } ?>
         </div>
     </section>