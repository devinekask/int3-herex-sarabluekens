<article class="overizcht">
<h2 class="visually-hidden">Stappenplan</h2>

<section class="overzicht">
  <a class="overzicht__button--terug" href="index.php?page=tutorial"><img src="../assets/img/terug.svg" alt="terug knop die teugkeert naar de homepage" width="107" height="37"></a>
  <h2 class="overzicht__title subTitle">Stappenplan</h2>
  <p class="overzicht__title ">Kies zelf de volgorde waarin je deze tutorial wilt volgen!</p>
</section>
<video id="video" autoplay playsinline muted width="320" height="180" src=""></video>
<section class="stappen">
  <h2 class="stappen visually-hidden">Steps</h2>
  <a class="stappen__stap1" href="index.php?page=stap1"><img class="overzicht__button--image" id="1" src="../assets/img/mondstuk.png" alt="mondstuk van de saxofoon" width="350" height="520"></a>
  <a class="stappen__stap2" href="index.php?page=overzicht"><img class="overzicht__button--image" id="2"  src="../assets/img/body.png" alt=" body onderdeel van de saxofoon" width="350" height="520"></a>
  <a class="stappen__stap3" href="index.php?page=overzicht"><img class="overzicht__button--image" id="3" src="../assets/img/borenstuk.png" alt="notenblok met ingeboorde gaten die dienen als body voor de saxofoon" width="350" height="520"></a>
  <a class="stappen__stap4" href="index.php?page=overzicht"><img class="overzicht__button--image" id="4"  src="../assets/img/hoorn.png" alt="hoorn onderdeel van de saxofoon" width="350" height="520"></a>
</section>

<script type="module">
        const $video = document.getElementById("video");

        const camera = async () => {
            requestAnimationFrame(render);
            const options = { audio: false, video: { width: 320, height: 180} };
            let stream = await navigator.mediaDevices.getUserMedia(options);
            $video.srcObject = stream;

            if(!$video.captureStream) {
                $video.captureStream = () => stream;
            }
        }

        const render = (time) => {
            time *= 0.001;
            requestAnimationFrame(render);
        }


        const runHandPose = async () => {
                await camera();
                const net = await handpose.load({
                  inputResolution:{width:640, height:480},
                  scale: 0.5
                });

                setInterval(() => {
                    detect(net);
                }, 1000 );
            };

        const detect = async (net) => {
            const model = await handpose.load();
            const hands = await model.estimateHands(video);

            hands.forEach(hand =>{
              let finger = hand.landmarks[0];
              console.log(finger[0]);

              if(finger[0] < 60){
                console.log("1");
                window.location.href="index.php?page=stap1";
                document.getElementById("1").classList.add("holding");

              } else if(finger[0] >= 60 &&  finger [0] < 110){
                console.log("2");
                window.location.href="index.php?page=stap1";
                document.getElementById("2").classList.add("holding");


              } else if(finger[0] >= 110 &&  finger [0] < 220){
                console.log("3");
                window.location.href="index.php?page=stap1";
                document.getElementById("3").classList.add("holding");

              }else if (finger[0] >= 220) {
                console.log("4");
                window.location.href="index.php?page=stap1";
                document.getElementById("4").classList.add("holding");
              }

            })

        };


        runHandPose();


</script>
