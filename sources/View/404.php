<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
</head>
<style>
    html, body {
  height: 100%;
  overflow: hidden;
}

.error-page {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-align: center;
  height: 100%;
  font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
}

.error-page h1 {
  font-size: 30vh;
  font-weight: bold;
  position: relative;
  margin: -8vh 0 0;
  padding: 0;
}

.error-page h1:after {
  content: attr(data-h1);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  color: transparent;
  /* webkit only for graceful degradation to IE */
  background: -webkit-repeating-linear-gradient(-45deg, #71b7e6, #69a6ce, #b98acc, #ee8176, #b98acc, #69a6ce, #9b59b6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: 400%;
  text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.25);
  -webkit-animation: animateTextBackground 10s ease-in-out infinite;
          animation: animateTextBackground 10s ease-in-out infinite;
}

.error-page h1 + p {
  color: #d6d6d6;
  font-size: 8vh;
  font-weight: bold;
  line-height: 10vh;
  max-width: 600px;
  position: relative;
}

.error-page h1 + p:after {
  content: attr(data-p);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  color: transparent;
  text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
  -webkit-background-clip: text;
  background-clip: text;
}

#particles-js {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

@-webkit-keyframes animateTextBackground {
  0% {
    background-position: 0 0;
  }
  25% {
    background-position: 100% 0;
  }
  50% {
    background-position: 100% 100%;
  }
  75% {
    background-position: 0 100%;
  }
  100% {
    background-position: 0 0;
  }
}

@keyframes animateTextBackground {
  0% {
    background-position: 0 0;
  }
  25% {
    background-position: 100% 0;
  }
  50% {
    background-position: 100% 100%;
  }
  75% {
    background-position: 0 100%;
  }
  100% {
    background-position: 0 0;
  }
}

@media (max-width: 767px) {
  .error-page h1 {
    font-size: 32vw;
  }
  .error-page h1 + p {
    font-size: 8vw;
    line-height: 10vw;
    max-width: 70vw;
  }
}

a.back {
  position: fixed;
  right: 40px;
  bottom: 40px;
  background: -webkit-repeating-linear-gradient(-45deg, #71b7e6, #69a6ce, #b98acc, #ee8176);
  border-radius: 5px;
  -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  line-height: 24px;
  padding: 15px 30px;
  text-decoration: none;
  -webkit-transition: 0.25s all ease-in-out;
  transition: 0.25s all ease-in-out;
}

a.back:hover {
  -webkit-box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
}
/*# sourceMappingURL=404.css.map */
</style>
<body>
    <div class="error-page">
        <h1 data-h1="404">
            404
        </h1>
        <p data-p="NOT FOUND">NOT FOUND</p>
        <?php 
          header('Refresh: 5; URL=http://localhost/pakage-store/sources/View/');
        ?>
    </div>
</body>
</html>