<form action="save-multi-input.php" method="post">
    <div>
        Cơ sở học:
        <select name="campus[]" multiple>
            <option value="1">HN</option>
            <option value="2">DN</option>
            <option value="3">TN</option>
            <option value="4">TP.HCM</option>
        </select>
    </div>
    <div>
        <input type="checkbox" name="major[]" value="1"> CNTT
    </div>
    <div>
        <input type="checkbox" name="major[]" value="2"> TKDH
    </div>
    <div>
        <input type="checkbox" name="major[]" value="3"> UDPM
    </div>
    <div>
        <input type="checkbox" name="major[]" value="4"> Tự động hóa
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>