<%-- 
    Document   : index
    Created on : May 7, 2017, 1:45:25 AM
    Author     : Enlighter
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=pages/index.html">
<title>SB Admin 2</title>
<script language="javascript">
    window.location.href = "pages/index.html"
</script>
</head>
<body>
Go to <a href="pages/index.html">/pages/index.html</a>
<script>
            DbManager db = new DBManager();
            Connection con = db.getConnection();
            if (con is null){
            out.println("Connection Failed");
            
            }
            else{
            out.println("Connection Succeeded!");
            }
</script>
</body>
</html>

