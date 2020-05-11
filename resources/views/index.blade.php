<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet">
    <link rel="stylesheet" href="https://chuck-norris-media.s3.us-east-2.amazonaws.com/css/styles.css">
</head>
<body>
    <main class="main">
        <section class="section-main">
            <div class="media" >
                <img class="media-chuk" src="https://chuck-norris-media.s3.us-east-2.amazonaws.com/images/chucknorris_05.png" id="picture" alt="">
            </div>

            <div class="paragraph">
                <div class="" id="joke"></div>
            </div>

            <div class="control">
                <input class="btn-green" type="button" id="newJoke" value="Message">
            </div>

            <audio id="audioPlayback" controls autoplay style="display:none">
                <source id="audioSource" type="audio/mp3" src="">
            </audio>
        </section>
    </main>
    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.673.0.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
