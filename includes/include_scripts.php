<!DOCTYPE html>
<html>
  <head> </head>
  <body>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src = "bootstrap/js/bootstrap.js"></script>
      <script src = "bootstrap/js/salvattore.min.js"></script>
      <script src = "js/index_js.js"></script>
      <script src = "js/upload-file.js"></script>
      <script>$(function(){
          $('[data-toggle="tooltip"]').tooltip();
          $('[data-toggle="popover"]').popover();
      });
      </script>
      
      
      
      <script src="bootstrap/main.js"></script>
      <!--<script src="js/upload-file.js"></script>-->
      <!-- 1. Подключить библиотеку jQuery -->
      <script type="text/javascript" src="bootstrap/js/jquery-1.11.1.min.js"></script>
      <!-- 2. Подключить скрипт moment-with-locales.min.js для работы с датами -->
      <script type="text/javascript" src="bootstrap/js/moment-with-locales.min.js"></script>
      <!-- 3. Подключить скрипт платформы Twitter Bootstrap 3 -->
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <!-- 4. Подключить скрипт виджета "Bootstrap datetimepicker" -->
      <script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.min.js"></script>
      
      <script type="text/javascript">
          $(function () {
          //Установим для виджета русскую локаль с помощью параметра language и значения ru
          $('#datetimepicker1').datetimepicker(
              {language: 'ru'}
            );
          });
      </script>
      <script type="text/javascript">
          $(function () {
          //Установим для виджета русскую локаль с помощью параметра language и значения ru
          $('#datetimepicker2').datetimepicker(
              {language: 'ru'}
            );
          });
      </script>
      <script type="text/javascript">
          $(function () {
          //Установим для виджета русскую локаль с помощью параметра language и значения ru
          $('#datetimepicker3').datetimepicker(
              {language: 'ru'}
            );
          });
      </script>
      <script type="text/javascript">
          $(function () {
          //Установим для виджета русскую локаль с помощью параметра language и значения ru
          $('#datetimepicker4').datetimepicker(
              {
                  format: 'DD/MM/YYYY',
                  pickTime: false,
                  language: 'ru'
              });
          });
      </script>
      <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    format: 'LT',
                    language: 'ru',
                    pickDate: false
                });
            });
        </script>
  </body>
</html>
       