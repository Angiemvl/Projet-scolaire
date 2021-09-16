
    <title>Jessica Jones</title>
    <link rel="stylesheet" href="../css/accueil.css">

<body>

    <img src="../img/header2.jpg" id="fond" alt="background">

    <?php require "../include/header.php" ?>


    <main>
        <section id="divideo">
            <div id="box_Video">
                <video src="../video/JS_BA.mp4" height="100%" width="100%" id="video"></video>
                <i class="fas fa-play" id="play"></i>
            </div>
        </section>

        <section id="prez">

            <h1> JESSICA JONES</h1>

            <p id="txt_prez">
                Jessica Jones est une ancienne super-héroïne qui a renoncé à son identité secrète après avoir été
                traumatisée,
                et qui a ouvert Alias Investigations,
                une agence de détectives à New York pour aider les gens.
                Tourmentée par son dégoût d’elle-même et par un sévère TSPT (Trouble de Stress Post-Traumatique),
                Jessica se bat contre des démons intérieurs et extérieurs, utilisant ses extraordinaires capacités pour
                devenir la championne improbable de
                ceux qui sont dans le besoin… surtout s’ils peuvent lui faire un chèque.
            </p>

            <div id="btn_histoire"><a href="histoire.php"><span>LIRE SON HISTOIRE COMPLETE </span></a></div>

        </section>

    </main>

    <?php include "../include/footer.php" ?>

    <!-- <video class="animated fadeOutLeft delay-3s" src="../video/Loadingscreen_1.mp4" id="load" type="video/mp4" autoplay
        muted loop></video> -->
    <div id="voile"></div>
    <i id="cross"></i>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/accueil.js"></script>

</body>

</html>