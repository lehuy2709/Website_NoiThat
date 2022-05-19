<?php
session_start();

$ROOT_URL = "/duan1";
$ADMIN_URL = $ROOT_URL . "/admin";
$IMAGE_URL = $ROOT_URL . "/images";
$SITE_URL = $ROOT_URL . "/site";
$MESSAGE = "";

$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_URL;



function save_file($file, $path_dir)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}



function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
    }
    echo "<script>
    alert('Bạn không có quyền truy cập vào trang này');
    window.location.href='$SITE_URL/tai_khoan/dang_nhap.php';
    </script>";

}
class Db
{

    public $link;

    public function __construct()
    {
        $this->link = mysqli_connect("localhost","root","","duan1") or die ();
        mysqli_set_charset($this->link,"utf8");
    }

    public function insert($table, array $data)
    {
        $sql = "INSERT INTO {$table} ";
        $columns = implode(',', array_keys($data));
        $values  = "";
        $sql .= '(' . $columns . ')';
        foreach($data as $field => $value) {
            if(is_string($value)) {
                $values .= "'". mysqli_real_escape_string($this->link,$value) ."',";
            } else {
                $values .= mysqli_real_escape_string($this->link,$value) . ',';
            }
        }
        $values = substr($values, 0, -1);
        $sql .= " VALUES (" . $values . ')';
        mysqli_query($this->link, $sql) or die("Lỗi  query  insert ----" .mysqli_error($this->link));
        return mysqli_insert_id($this->link);
    }
}