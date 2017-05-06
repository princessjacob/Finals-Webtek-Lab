
package mysqldb;

import java.sql.*;
import java.sql.DriverManager;
import java.sql.SQLException;


public class DBConnect {
    private Connection con;
 
    public DBConnect(){
        try{       
           Class.forName("com.mysql.jdbc.Driver");
           con = DriverManager.getConnection("jdbc:mysql://localhost:3306/petmovetko","root","");

            
            
        }catch(Exception ex){
            System.out.println("Error: " + ex);
        }
    }
}
