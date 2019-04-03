<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$sql = "SELECT * from categories";
$paginationlink = "getresult.php?page=";	
$pagination_setting = $_GET["pagination_setting"];
				
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);

if(empty($_GET["id"])) {
$_GET["id"] = $db_handle->numRows($sql);
//$naslov = $_GET["cat_title"];
 
                 

}

if($pagination_setting == "prev-next") {
	$perpageresult = $perPage->getPrevNext($_GET["id"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $perPage->getAllPageLinks($_GET["id"], $paginationlink,$pagination_setting);	
}


$output = '';

 ?>
  <table>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
                <script>
                  function fetch_data(){
                    $.ajax({
                      url: "category_admin.php",
                      method: "POST",
                      success: function(data) {
                        $('#myInput').html(data);
                        var no_of_rows = $('#myInput').find('tr').length;
                      }
                    });
                  }
                </script>
                <?php   
                $variablephp="ajderadi";
                //$variablephp = "<script>document.write(no_of_rows)</script>";
                echo $variablephp;
                   ?>
                  <input class="form-control" type="text" placeholder="Search" id="myInput" aria-label="Search">
	<tbody id="myTable">


  <?php

foreach($faq as $k=>$v)
{
 ?>
  			<tr class="success">
	              <td style="text-align: center;"><?php echo $faq[$k]["cat_title"]; ?></td>
	              <td style="text-align: center;"><?php echo $faq[$k]["cat_desc"]; ?></td>
	            </tr>


  <?php
	//echo "test<br>";
	//echo $faq[$k]["cat_title"] . "<br>";
 			
}


  ?>
  
</tbody>
</table>

  <?php


if(!empty($perpageresult)) {
$output .=  $perpageresult;
}
echo "<br><br><br><br>";
print $output;
?>
