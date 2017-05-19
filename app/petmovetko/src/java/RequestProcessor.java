/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(urlPatterns = {"/RequestProcessor"})
public class RequestProcessor extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            try {
                Connection sqlConnection;
                PreparedStatement statement;
                Class.forName("com.mysql.jdbc.Driver");
                sqlConnection = DriverManager.getConnection("jdbc:mysql://localhost/petmovetko", "root", "");
                if (request.getParameter("requesttype").equals("acceptrequest")) {                    
                    statement = sqlConnection.prepareStatement("UPDATE request SET reqStatus = ? WHERE reqID = ?");
                    statement.setString(1, "accepted");
                    statement.setInt(2, Integer.parseInt(request.getParameter("id")));
                    statement.executeUpdate();
                    
                    out.print("Accept success!");
                } else if (request.getParameter("requesttype").equals("rejectrequest")){
                    statement = sqlConnection.prepareStatement("DELETE FROM request WHERE reqID = ?");
                    statement.setInt(1, Integer.parseInt(request.getParameter("id")));
                    statement.executeUpdate();
                    out.print("Reject success!");
                } else if (request.getParameter("requesttype").equals("finishappointment")) {
                    //finish appointment, mapupunta sa transactions 
                    statement = sqlConnection.prepareStatement("INSERT INTO transaction (transStatus, transDate, timeIn, timeOut, " +
                                "payment, payStatus, reqID) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    statement.setString(1, "ongoing"); //transStatus
                    statement.setDate(2, java.sql.Date.valueOf("2013-09-04")); //transDate
                    statement.setTime(3, java.sql.Time.valueOf("08:00:00")); //timeIn
                    statement.setTime(4, java.sql.Time.valueOf("09:00:00")); //timeOut
                    statement.setInt(5, 100); //payment
                    statement.setString(6, "not yet paid"); //payStatus
                    statement.setInt(7, Integer.parseInt(request.getParameter("id"))); //reqID
                    statement.executeUpdate();
                    out.print("Moved to transaction.");
                } else {
                    out.print("An error occured :(");
                }                              
            } catch (Exception exc) {
                out.print(exc.getMessage());
            }
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
