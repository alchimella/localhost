<!DOCTYPE html>
<html>
    <head> </head>
    <body>
        <!-- Подключиние библиотеки jQuery -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src = "bootstrap/js/jquery-1.11.1.min.js" type = "text/javascript"></script>
        <!-- Подключение скрипта moment-with-locales.min.js для работы с датами -->
        <script src = "bootstrap/js/moment-with-locales.min.js" type = "text/javascript"></script>
        <!-- Подключение скрипта виджета "Bootstrap datetimepicker" -->
        <script src = "bootstrap/js/bootstrap-datetimepicker.min.js" type = "text/javascript"></script>
        <!-- Подключение скрипта платформы Twitter Bootstrap 3 -->
        <script src = "bootstrap/js/bootstrap.js" type = "text/javascript"></script>
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
        <script>
            $(document).ready(function (){
                $(".select-id").click(function(){
                    var id = $(this).attr("data-id");
                    $.post("/cart/addAjax/"+id, {}, function(data){
                        $("#cart-count").html(data);
                    });
                    return false;
                });
            });
        </script>
        <!-- Подключение скрипта даты в Постах -->
        <script type="text/javascript">
            function addNow() {
                nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
                document.getElementById('registration-date1').value = nowDate;
                set = setTimeout(function () { addNow(); }, 1000);
            }
            function stopNow() {
                clearTimeout(set);
            }
        </script>
        <!-- Подключение скрипта даты в Мероприятиях -->
        <script type="text/javascript">
            function addNow() {
                nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
                document.getElementById('registration-date2').value = nowDate;
                set = setTimeout(function () { addNow(); }, 1000);
            }

            function stopNow() {
                clearTimeout(set);
            }
        </script>
        <!-- Подключение скрипта даты в Домашнем задании -->
        <script type="text/javascript">
            function addNow() {
                nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
                document.getElementById('registration-date3').value = nowDate;
                set = setTimeout(function () { addNow(); }, 1000);
            }

            function stopNow() {
                clearTimeout(set);
            }
        </script>
        <!-- Подключение скрипта даты в Родительское собрание -->
        <script type="text/javascript">
            function addNow() {
                nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
                document.getElementById('registration-date4').value = nowDate;
                set = setTimeout(function () { addNow(); }, 1000);
            }

            function stopNow() {
                clearTimeout(set);
            }
        </script>
        <!-- Подключение скрипта даты в Журнале успеваемости -->
        <script type="text/javascript">
            function addNow() {
                nowDate = moment().tz("Europe/London").format('YYYY-MM-DD');
                document.getElementById('registration-date5').value = nowDate;
                set = setTimeout(function () { addNow(); }, 1000);
            }

            function stopNow() {
                clearTimeout(set);
            }
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
        <!-- Подключение скрипта загрузки изображения в Школьной галереи -->
        <script>
            $('.thumbnail').click(function(){
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({show:true});
            });

            /* blur on modal open, unblur on close */
            $('#myModal').on('show.bs.modal', function () {
                $('.col-6,.row .thumbnail').addClass('blur');
            })

            $('#myModal').on('hide.bs.modal', function () {
                $('.col-6,.row .thumbnail').removeClass('blur');
            })
        </script>
    </body>
</html>
       