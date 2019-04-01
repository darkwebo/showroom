

<?php
///
// Module gestion des role
//
if ($action == "list" || $action == "")
{
	$requett_ = "SELECT * FROM role  ORDER BY id ASC ";
    
    include("templates/role/hlistrole.htm");
  
    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {   
        include("templates/role/listrole.htm");
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";

}


if ($action == "add")
{
   include("templates/role/addrole.htm");
}
if ($action == "save")
{
   
    $role = $_POST['role'];
	$name = $_POST['name'];
	
  
    $dbq1 = mysql_query("insert into role(role,name) values ('$role','$name')");
	
   
    goto_("?cmd=role&action=list",0);
}

if (($action == "mod")&& ($id==6))
{
 $requett_ = "SELECT * FROM role  ORDER BY id ASC ";
    
    include("templates/role/hlistrole.htm");
  
    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {   
        include("templates/role/listrole.htm");
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";
}
if (($action == "mod")&& ($id!=6))
{
        $id = $_GET['id'];    
        $dbq = mysql_query("SELECT * FROM role Where id='$id'");
        $dbf = mysql_fetch_array($dbq);      
		
        include("templates/role/modrole.htm");
       

}
if ($action == "savemod")
{
    $id = $_GET['id'];
    $role = $_POST['role'];
	$name = $_POST['name'];
	
	

  $req_login = mysql_query("UPDATE role SET role='$role',name='$name' WHERE id='$id'");
    

    goto_("?cmd=role&action=list",0);
	
}
if (($action == "del")&& ($id==6))
{
 $requett_ = "SELECT * FROM role  ORDER BY id ASC ";
    
    include("templates/role/hlistrole.htm");
  
    $dbq1 = mysql_query($requett_);
    while($dbf1 = mysql_fetch_array($dbq1))
    {   
        include("templates/role/listrole.htm");
	}
    echo "</table>";
    echo "</form>";
	echo "</div>";
}
if (($action == "del")&& ($id!=6))
{   $id = $_GET['id'];
   
        if(empty($_GET['ok']))
        {
            echo "<br><div id='info'>Do you really want delete this role <a href='index.php?cmd=role&action=del&id=$id&ok=ok'>Yes</a> -- <a href='?cmd=role&action=list'>No</a><div></div></div>";
            
        }
        else if ($_GET['ok'] == 'ok')
        {   
			$dbq1 = mysql_query("Delete From role Where id='$id'");
			
		
             goto_("?cmd=role&action=list",0);

        }
}

?>