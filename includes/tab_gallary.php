<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div class="tab-pane fade" id="gallary-tab">
            <hr>Школьная галерея<hr>
            <div class="col col-lg-3 col-lf-offset-3">
                <!--<img src="http://placehold.it/240x200" alt="" style="border: 5px outset #337AB7;">-->
                <div class="form-group">
                    <div class="main-photo-preview">
                        <img class="thumbnail photo-preview" src="http://placehold.it/240x200" title="Preview photo"/>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-btn">
                        <div class="photoUpload btn btn-primary fake-shadow" style="width: 180px;">
                            <span><i class="fa fa-upload"></i> Загрузить</span>
                            <input action="scripts/script_upload_picture.php" id="photo-id" name="photo_of_student" type="file" class="attachment_upload2" enctype="multipart/form-data">
                        </div>
                    </div>
                </div>
                <input id="fakeUploadPhoto" class="form-control fake-shadow" placeholder="Выберите фото" style="margin-top: 15px;" readonly>
            </div>
            <div class="col col-lg-9">
            </div>
        </div>
    </body>
</html>