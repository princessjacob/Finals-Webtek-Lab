import java.sql.*;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class DBManager {
    
    public Connection getConnection(){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/petmovetko","root","");
            return null;
        } catch (ClassNotFoundException | SQLException e) {
            System.out.println("");
        }
        return null;
    }
}
