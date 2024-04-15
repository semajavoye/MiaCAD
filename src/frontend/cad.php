<?php
$title = "Dispatch System";
$css_files = array(
    "css/cad.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
include "../backend/db.php";

session_start();

?>


<body>
    <div class="container">
        <?php include "page_header.php"; ?>

        <div class="header">
            <div class="leftwrapper">
                <div class="button map">
                    <i class="fas fa-globe"> Home</i>
                    <a href=""></a>
                </div>
                <div class="button contacts">
                    <i class="fas fa-book"> Contacts</i>
                    <a href=""></a>
                </div>
                <div class="button timer">
                    <i class="fas fa-clock"> Timer</i>
                    <a href=""></a>
                </div>
                <div class="button net">
                    <i class="fas fa-broadcast-tower"> Radio</i>
                </div>
                <div class="button serverstat">
                    <i class="fas fa-server"> Serverstats</i>
                </div>
            </div>
            <div class="time">
                <script>
                    const displayTime = document.querySelector(".time");

                    function showTime() {
                        let time = new Date();
                        displayTime.innerText = time.toLocaleTimeString("de-DE", {
                            hour12: false
                        });
                        setTimeout(showTime, 500);
                    }

                    showTime();
                </script>
            </div>
            <div class="rightwrapper">
                <div class="button filter">
                    <i class="fas fa-filter"> Filter</i>
                    <a href=""></a>
                </div>
                <div class="button mail">
                    <i class="fas fa-envelope"> Mail</i>
                    <a href=""></a>
                </div>
                <div class="button wind">
                    <i class="fas fa-wind"> Weather</i>
                    <a href=""></a>
                </div>
                <div class="button ambulance">
                    <i class="fas fa-ambulance"> EMS</i>
                </div>
                <div class="button fire">
                    <i class="fas fa-fire"> Fire</i>
                </div>
                <div class="button fullscreen">
                    <i class="fas fa-expand"> Expand</i>
                </div>
            </div>
        </div>

        <div class="main-content">
            <?php include "sources/main_system.php"; ?>
        </div>
    </div>

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/cad.js"></script>
</body>

</html>