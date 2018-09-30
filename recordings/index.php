<html>

<head>
    <title>TIB | POI PROFILES</title>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/head.html"); ?>
</head>

<body>
    <main>
        <?php include($_SERVER['DOCUMENT_ROOT']."/includes/maintop.html"); ?>
        <section class="bullHead">
            <h1>Interviews and Interrogations</h1>
        </section>
        <section class="mainText">
            <dt>
                <h3>Wilford Warfstache</h3>
                <div class="controls">
                    <button><strong>CONTROLS:</strong></button>
                    <button onclick="document.getElementById('warf').play()">Play</button>
                    <button onclick="document.getElementById('warf').pause()">Pause</button>
                    <button onclick="document.getElementById('warf').volume += 0.1">Vol +</button>
                    <button onclick="document.getElementById('warf').volume -= 0.1">Vol -</button>
                </div>
                <h4>Interrogated by Agent ███████</h4>
                <button onclick="overlOpen(); overlVid()"><strong>Video Footage</strong></button>
                <audio id="warf">
                    <source src="/recordings/resource/warf.ogg" type="audio/ogg">
                </audio>
            </dt>
            <div class="overlContent">
                <span class="overlClose" onclick="overlClose()">&times;</span>
                <iframe class="overlVid" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <?php include($_SERVER['DOCUMENT_ROOT']."/includes/mainbottom.html"); ?>
        <script>
            function overlVid() {
                var frame = document.getElementsByClassName("overlVid")[0];
                if (overl.style.display === "none") {
                    frame.src = "https://www.youtube.com/embed/JUp9pCtn2BY?rel=0&amp;showinfo=0&amp;start=557";
                }
            }

        </script>
        <a href="/profile/rico/" class="lastPage">Last Page</a>
        <a href="/" class="nextPage">Next Page</a>
    </main>
</body>

</html>
