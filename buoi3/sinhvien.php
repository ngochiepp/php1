<form method="get" action="sinhvien.php">
        <div>
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="">
            <label for="age">Tuổi:</label>
            <input type="text" id="age" name="age">
        </div>

        <div class="">
            <label for="home_town">Quê quán:</label>
            <input type="text" id="home_town" name="home_town">
        </div>

        <button type="submit">Lọc</button>
    </form>

    <?php
    $dsSinhVien = [
        ["name" => "Trần Văn A", "age" => 19, "home_town" => "Hà Nội"],
        ["name" => "Trần Văn B", "age" => 20, "home_town" => "Thanh Hóa"],
        ["name" => "Trần Văn C", "age" => 21, "home_town" => "Nghệ An"],
        ["name" => "Trần Văn D", "age" => 23, "home_town" => "Bắc Ninh"],
        ["name" => "Trần Văn E", "age" => 20, "home_town" => "Hải Dương"],
    ];
    echo "<h2>Danh sách sinh viên</h2>";
    
    $filterStudent = array();
    if (isset($_GET['name'])) {
        foreach ($dsSinhVien as $sinhVien) {
            if ($sinhVien['name'] == $_GET['name']) {
                $filterStudent[] = $sinhVien;
            }
        }
    }
    if(empty($filterStudent)) {
        echo "Không tìm thấy thông tin" . '<br>';
    } else {
        foreach ($filterStudent as $sinhVien) {
            echo $sinhVien['name']. " - ". $sinhVien['age']. " tuổi - ". $sinhVien['home_town']. "<br>";
        }
    }

    if (isset($_GET['home_town'])) {
        foreach ($dsSinhVien as $sinhVien) {
            if ($sinhVien['home_town'] == $_GET['home_town']) {
                $filterStudent[] = $sinhVien;
            }
        }
    }
    if(empty($filterStudent)) {
        echo "Không tìm thấy thông tin";
    } else {
    foreach ($filterStudent as $sinhVien) {
        echo $sinhVien['name']. " - ". $sinhVien['age']. " tuổi - ". $sinhVien['home_town']. "<br>";
    }
}
    
    ?>