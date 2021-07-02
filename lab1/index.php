<form action="show_info.php" method="get">
    <div>
        <label for="">Họ và tên</label>
        <input type="text" name="name">
    </div>
    <div class="">
        <label for="">Ngày sinh</label>
        <input type="date" name="birthday">
    </div>
    <div class="">
        <label for="">Giới tính</label>
        <input type="radio" name="gender" value="1" checked> Nam
        <input type="radio" name="gender" value="2"> Nữ
        <input type="radio" name="gender" value="3"> Khác
    </div>
    <div>
        <label for="">Tình trạng hôn nhân</label>
        <input type="checkbox" name="isMarried" value="1"> Đã kết hôn
    </div>
    <div>
        <button type="submit">Gửi</button>
    </div>
</form>