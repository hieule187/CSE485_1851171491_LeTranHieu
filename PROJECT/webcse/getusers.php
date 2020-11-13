<?php
require 'config/db.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM ttusers
    WHERE id LIKE '%".$search."%'
    OR hoten LIKE '%".$search."%'
	OR ngaysinh LIKE '%".$search."%'
    OR noisinh LIKE '%".$search."%
    OR gioitinh LIKE '%".$search."%'
    OR dantoc LIKE '%".$search."%'
    OR tongiao LIKE '%".$search."%'
    OR cmnd LIKE '%".$search."%''
    OR ngaycap LIKE '%".$search."%'
    OR noicap LIKE '%".$search."%'
    OR namtotnghiep LIKE '%".$search."%'
    OR hocluc LIKE '%".$search."%'
    OR hanhkiem LIKE '%".$search."%'
    OR hokhautc LIKE '%".$search."%'
    OR matinh10 LIKE '%".$search."%'
    OR tinh10 LIKE '%".$search."%'
    OR matruong10 LIKE '%".$search."%'
    OR tentruong10 LIKE '%".$search."%'
    OR matinh11 LIKE '%".$search."%'
    OR tinh11 LIKE '%".$search."%'
    OR matruong11 LIKE '%".$search."%'
    OR tentruong11 LIKE '%".$search."%'
    OR matinh12 LIKE '%".$search."%'
    OR tinh12 LIKE '%".$search."%'
    OR matruong12 LIKE '%".$search."%'
    OR tentruong12 LIKE '%".$search."%'
    OR dtuutien LIKE '%".$search."%'
    OR kvuutien LIKE '%".$search."%'
    OR diachilh LIKE '%".$search."%'
    OR sdt LIKE '%".$search."%'
    OR sdtph LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM ttusers ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["hoten"].'</td>
				<td>'.$row["ngaysinh"].'</td>
				<td>'.$row["gioitinh"].'</td>
                <td>'.$row["quequan"].'</td>
                <td>'.$row["cmnd"].'</td>
                <td>'.$row["dantoc"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Dữ liệu không tồn tại!';
}
?>