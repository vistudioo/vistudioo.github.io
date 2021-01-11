<!doctype html>
<html lang="ru">
    <?php
    if (isset($_REQUEST['fb'])) { $fb = $_REQUEST['fb']; } else { $fb = "0"; };
    if (isset($_REQUEST['uid'])) { $uid = $_REQUEST['uid']; } else { $uid = "0"; };
?>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8CG5QB');</script>
<!-- End Google Tag Manager -->

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="thank-you-page.css">
    <title>Спасибо!</title>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?=$fb; ?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?=$fb; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8CG5QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <script>
  fbq('track', 'Lead');
</script>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2>Спасибо. Ваш заказ принят!</h2>
            <h4>
                Вы ввели следующие данные:<br/>
            </h4>
            <h4>
                Имя: <?php if(!empty($_GET['name'])) { echo htmlspecialchars($_GET["name"]); } ?><br/>
                Телефон: <?php if(!empty($_GET['phone'])) { echo htmlspecialchars($_GET["phone"]); } ?>
            </h4>

            <h4>Мы позвоним Вам в ближайшие 15 минут. Держите телефон рядом.<br>
                Наш колл центр работает с 09:00 до 22:00</h4>
            </div>
        </div>
    </div>
</body>
</html>

