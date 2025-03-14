<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/upload.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="p-5">
                <h4> Silahkan Upload Foto Disini </h4>
                <hr>
                <form action="store.php" method="post" id="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title" class="text-primary text-uppercase">Judul Foto</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="text-primary text-uppercase">Deskripsi</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="text-primary text-uppercase">Upload Foto</label>
                        <div class="custom-uploader border border-faded rounded p-2">
                            <input type="file" id="photo" class="d-none" accept="image/jpeg,image/png" name="photo[]" multiple>
                            <div class="uploader d-flex">
                                <div class="uploader-btn d-flex justify-content-center align-items-center border border-faded rounded">
                                    <i class="fa fa-photo text-secondary fa-1x"></i>
                                </div>
                                <div class="photo-show flex-grow-1"></div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary text-uppercase upload">
                        <i class="fa fa-upload"></i> Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="/js/upload.js"></script>


</body>
</html>