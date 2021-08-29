<article class="stap1">
  <h2 class="visually-hidden">Stap2</h2>
  <a class="overzicht__button--terug" href="index.php?page=overzichtM"><img src="../assets/img/terug.svg" alt="terug knop die teugkeert naar de homepage" width="107" height="37"></a>
  <video id="video" autoplay playsinline muted width="320" height="180" src=""></video>

  <section class="stap">
    <h2 class="stap__title subTitle">Body</h2>

    <div class="stap__flex body">
      <section class="stap__deel ">
        <h2 class="visually-hidden">Deel 1</h2>
        <img class="stap__deel--img klein" src="../assets/img/stap2.1.png" alt="foto van het zagen van een pvc buis." width="308" height="517">
        <p class="stap__deel--text">Lijm het mondstuk op een hoekstuk.</p>
      </section>
      <section class="stap__deel ">
        <h2 class="visually-hidden">Deel 2</h2>
        <img class="stap__deel--img" src="../assets/img/stap2.2.png" alt="foto van het knippen van de vorm van de buis uit plastiek" width="949" height="1080">
        <p class="stap__deel--text">Lijm de pvc buizen op de hoek- stukken (met het mondstuk vanboven)</p>

      </section>
      <section class="stap__deel">
        <h2 class="visually-hidden">Deel 3</h2>
        <img class="stap__deel--img klein" src="../assets/img/stap2.3.png" alt="foto van het zagen van een pvc buis." width="949" height="646">
        <p class="stap__deel--text">Lijm de hoorn op het andere hoekstuk bovenaan de saxofoon. <span class="stap__deel--span"> (Hierdoor zal je blazen)</span></p>
      </section>
    </div>
  </section>
</article>
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
                window.location.href="index.php?page=overzichtZ";
              }
            })

        };


        runHandPose();


</script>
