<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include "include/head.inc.php" ?>
        <title>Fame on - La télé-réalité comme vous ne l'avez jamais vu - Live</title>
        <meta name="description" content="">
        <!--<script data-cfasync="false">
            (function (r, e, E, m, b) {
                E[r] = E[r] || {};
                E[r][b] = E[r][b] || function () {
                    (E[r].q = E[r].q || []).push(arguments)
                };
                b = m.getElementsByTagName(e)[0];
                m = m.createElement(e);
                m.async = 1;
                m.src = ("file:" == location.protocol ? "https:" : "") + "//s.reembed.com/G-nO5VmA.js";
                b.parentNode.insertBefore(m, b)
            })("reEmbed", "script", window, document, "api");
        </script>-->
</head>

<body>
    <?php include("include/menu.inc.php"); ?>

        <main class="container">
            <section class="row text-center">
                <div class="col-xs-12">
                    <h2>Live Youtube</h2>
                    <p>text description rapide live</p>
                </div>
                <div class="col-xs-12 col-md-8">
                    <iframe width="640" height="385" src="https://www.youtube.com/embed/QHAm0Hpikzg?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12 col-md-4">
                    <iframe height="385" src="https://www.youtube.com/live_chat?v=QHAm0Hpikzg&embed_domain=localhost" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
        </main>

        <?php include("include/footer.inc.php"); ?>
</body>

</html>