<!--
<?php
//if(isset($_SESSION["user"]) && $_SESSION["user"]!="")
{
?>

<table width="100%">
<tr>
<td><label style=""></label></td>
</tr>
<tr>
<td><label style=""><a href="?cmd=acceuil&action=profile&id=10">Profile</a></label></td>
<td></td>
</tr>
<tr>
<td align="center"><label><a href="?cmd=acceuil&action=deconnection">Deconnection</a></label></td>
</tr>
</table>

<?php
}
//else
{
?>
-->
<table width="100%">
<tr>
<td><label style="float:right;"> Login :: </label></td>
<td><input name="login" type="text" size="15" /></td>
</tr>
<tr>
<td><label style="float:right;">Mot de passe :: </label></td>
<td><input name="passwd" type="password" size="15" /></td>
</tr>
<tr>
<td align="center"><label><a href="?cmd=acceuil&action=inscription">Inscription</a></label></td>
<td><label style="margin-left:10px;"><input width="100%" type="submit" value="  Connexion  " onclick="" /></label></td>
</tr>
</table>

<?php
}
?>
