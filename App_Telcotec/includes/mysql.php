<?php
//////////////////////////////////////
/// PHP KS-DB MySql Class 1.1   ///
/// Coded By KEBIRI Abdelbasset ///
/// Email: kebiri@tunisoft.com  ///
/// MSN : kebiri@hotmail.com    ///
/// http://www.tunisoft.com   ///
//////////////////////////////////////
class mydb
{
        var $dbserver;
        var $dbuser;
        var $dbpass;
        var $dbname;
        var $dbvar;

        function mydb($db_server,$db_user,$db_pass,$db_name)
        {
                $this->dbserver = $db_server;
                $this->dbuser = $db_user;
                $this->dbpass = $db_pass;
                $this->dbname = $db_name;
        }
        function dbconnect()
        {
                $this->dbvar = @mysql_connect($this->dbserver,$this->dbuser,$this->dbpass);
                if(!$this->dbvar)
                {
                        die("Error to Connect to db server");
                }
                mysql_select_db($this->dbname,$this->dbvar);
                return $this->dbvar;

        }
        function dbquery($dbresult)
        {
                $dbquery = mysql_query($dbresult,$this->dbvar);
                return $dbquery;
        }
		function dbquery_insert($dbresult)
        {
                $dbquery = mysql_query($dbresult,$this->dbvar);
				$id  = mysql_insert_id();
                return $id;
        }		
        function dbobject($dbresult)
        {
                $dbobject = mysql_fetch_object($dbresult);
                return $dbobject;
        }
        function dbarray($dbresult)
        {
                $dbarray = mysql_fetch_array($dbresult);
                return $dbarray;
        }
        function dbnumrows($dbresult)
        {
                $dbnumrows = mysql_num_rows($dbresult);
                return $dbnumrows;
        }
        function dbclose()
        {
                mysql_close($this->dbvar);
        }
}
?>