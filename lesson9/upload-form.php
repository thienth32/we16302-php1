<form action="save-upload.php" method="post" enctype="multipart/form-data">
    <div>
        họ và tên: <input type="text" name="name">
    </div>
    <div>
        avatar: <input type="file" name="upload_file">
    </div>
    <button type="submit">Upload</button>
</form>

<hr>
<h2>Upload nhiều ảnh cùng lúc</h2>
<form action="save-multi-img-upload.php" method="post" enctype="multipart/form-data">
    <div>
        họ và tên: <input type="text" name="name">
    </div>
    <div>
        avatar: <input type="file" name="upload_file[]" multiple>
    </div>
    <button type="submit">Upload</button>
</form>