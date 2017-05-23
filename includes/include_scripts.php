<!DOCTYPE html>
<html>
    <head> </head>
    <body>
        <!-- Подключиние библиотеки jQuery -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-1.11.1.min.js"></script>
        <!-- Подключение скрипта moment-with-locales.min.js для работы с датами -->
        <script type="text/javascript" src="bootstrap/js/moment-with-locales.min.js"></script>
        <!-- Подключение скрипта платформы Twitter Bootstrap 3 -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <!-- Подключение скрипта виджета "Bootstrap datetimepicker" -->
        <script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Подключение библиотеки Bootstrap скриптов -->
        <script src = "bootstrap/js/bootstrap.js"></script>
        <!-- Подключение скриптов загрузки превью фотографий -->
        <script src = "js/upload-photo_teacher.js"></script>
        <script src = "js/upload-photo_student.js"></script>
        <script src = "js/upload_image_post.js"></script>
        <script src = "js/upload-file.js"></script>
        <!-- Подключение скрипта фона Index -->
        <script src = "js/index_js.js"></script>
        <!-- Подключение всплывающих подсказок -->
        <script>$(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <!-- Подключение скрипта спойлера -->
        <script>
            $(".spoiler-trigger").click(function() {
                $(this).parent().next().collapse('toggle');
            });
        </script>
        <!--  -->
        <!--  -->
        <!--  -->

        <script type="text/javascript">
          $(function () {
          $('#datetimepicker1').datetimepicker(
              {
                  language: 'ru'
              }
            );
          });
        </script>
        <script type="text/javascript">
          $(function () {
          $('#datetimepicker2').datetimepicker(
              {
                  language: 'ru'
              }
            );
          });
        </script>
        <script type="text/javascript">
          $(function () {
          $('#datetimepicker3').datetimepicker(
              {language: 'ru'}
            );
          });
        </script>
        <script type="text/javascript">
          $(function () {
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
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker6').datetimepicker(
                    {
                        format: 'DD/MM/YYYY',
                        pickTime: false,
                        language: 'ru'
                    }
                );
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker7').datetimepicker(
                    {
                        format: 'LT',
                        language: 'ru',
                        pickDate: false
                    }
                );
            });
        </script>



        <script type="text/javascript">
            $(function () {
                $('#datetimepicker8').datetimepicker({
                language: 'ru'
                });
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker9').datetimepicker(
                    {
                        format: 'DD/MM/YYYY',
                        pickTime: false,
                        language: 'ru'
                    }
                );
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker10').datetimepicker(
                    {
                        format: 'LT',
                        language: 'ru',
                        pickDate: false
                    }
                );
            });
        </script>

        <!-- Script preview photo -->
        <script type="text/javascript">
            function showMe (box) {
                var vis = (box.checked) ? "block" : "none";
                $("DIV#div1").fadeIn();
                $("DIV#select_class").fadeIn();
                document.getElementById('div1').style.display = vis;
                document.getElementById('div2').style.display = vis;
            }
        </script>

        <script type="text/javascript">
            (function ($){
                $(function (){
                    $('.btn-file').each(function (){
                        var self = this;
                        $('input[type=file]', this).change(function (){
                            // remove existing file info
                            $(self).next().remove();
                            // get value
                            var value = $(this).val();
                            // get file name
                            var fileName = value.substring(value.lastIndexOf('/')+1);
                            // get file extension
                            var fileExt = fileName.split('.').pop().toLowerCase();
                            // append file info
                            $('<span><i class="fa fa-file icon-' + fileExt + '"></i> ' + fileName + '</span>').insertAfter(self);
                        });
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>
       