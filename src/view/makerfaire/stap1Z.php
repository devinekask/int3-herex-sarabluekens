<article class="stap1">
<h2 class="visually-hidden">Stap1</h2>
<video id="video" autoplay playsinline muted width="320" height="180" src=""></video>

<section class="overzicht">
  <h2 class="overzicht__title subTitle">Stap1</h2>
  <p class="overzicht__title ">Kies zelf de volgorde waarin je deze tutorial wilt volgen!</p>
  <a class="overzicht__button--terug" href="index.php?page=overzichtZ"><img src="../assets/img/terug.svg" alt="terug knop die teugkeert naar de homepage" width="107" height="37"></a>
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

              if(finger[0] > 0){
                window.location.href="index.php?page=overzicht";
              }
            })

        };


        runHandPose();


</script>
