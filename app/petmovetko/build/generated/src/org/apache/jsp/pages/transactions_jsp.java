package org.apache.jsp.pages;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.io.*;
import java.util.*;
import java.sql.*;
import javax.servlet.http.*;
import javax.servlet.*;

public final class transactions_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("<html lang=\"en\">\r\n");
      out.write("\r\n");
      out.write("<head>\r\n");
      out.write("\r\n");
      out.write("    <meta charset=\"utf-8\">\r\n");
      out.write("    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n");
      out.write("    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n");
      out.write("    <meta name=\"description\" content=\"\">\r\n");
      out.write("    <meta name=\"author\" content=\"\">\r\n");
      out.write("\r\n");
      out.write("    <title>Transaction Info - Service Provider</title>\r\n");
      out.write("\r\n");
      out.write("    <!-- Bootstrap Core CSS -->\r\n");
      out.write("    <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\r\n");
      out.write("\r\n");
      out.write("    <!-- MetisMenu CSS -->\r\n");
      out.write("    <link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">\r\n");
      out.write("\r\n");
      out.write("    <!-- Custom CSS -->\r\n");
      out.write("    <link href=\"../dist/css/sb-admin-2.css\" rel=\"stylesheet\">\r\n");
      out.write("\r\n");
      out.write("    <!-- Morris Charts CSS -->\r\n");
      out.write("    <link href=\"../vendor/morrisjs/morris.css\" rel=\"stylesheet\">\r\n");
      out.write("\r\n");
      out.write("    <!-- Custom Fonts -->\r\n");
      out.write("    <link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\r\n");
      out.write("\r\n");
      out.write("    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->\r\n");
      out.write("    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\r\n");
      out.write("    <!--[if lt IE 9]>\r\n");
      out.write("        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>\r\n");
      out.write("        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>\r\n");
      out.write("    <![endif]-->\r\n");
      out.write("\r\n");
      out.write("</head>\r\n");
      out.write("\r\n");
      out.write("<body>\r\n");
      out.write("<script>  \r\n");
      out.write("    function acceptRequest(elementID) {\r\n");
      out.write("        var xmlHttp = new XMLHttpRequest();\r\n");
      out.write("        var parent = document.getElementById(\"home\");\r\n");
      out.write("        var child = document.getElementById(elementID);\r\n");
      out.write("        xmlHttp.open(\"GET\", \"/petmovetko/RequestProcessor?id=\" + elementID + \"&requesttype=accept\", true);\r\n");
      out.write("        xmlHttp.send(null);        \r\n");
      out.write("        \r\n");
      out.write("        xmlHttp.onreadystatechange = function () {\r\n");
      out.write("            if(xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200){\r\n");
      out.write("                var res = xmlHttp.responseText;\r\n");
      out.write("                if (res === \"\") {\r\n");
      out.write("                    window.alert(\"Error!\");\r\n");
      out.write("                } else {\r\n");
      out.write("                    window.alert(res);\r\n");
      out.write("                    parent.removeChild(child);\r\n");
      out.write("                }               \r\n");
      out.write("            }\r\n");
      out.write("        };       \r\n");
      out.write("    }\r\n");
      out.write("    \r\n");
      out.write("    function deleteRequest(elementID) {\r\n");
      out.write("        var parent = document.getElementById(\"home\");\r\n");
      out.write("        var child = document.getElementById(elementID);\r\n");
      out.write("        xmlHttp.open(\"GET\", \"/petmovetko/RequestProcessor?id=\" + elementID + \"&requesttype=reject\", true);\r\n");
      out.write("        xmlHttp.send(null);        \r\n");
      out.write("        \r\n");
      out.write("        xmlHttp.onreadystatechange = function () {\r\n");
      out.write("            if(xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200){\r\n");
      out.write("                var res = xmlHttp.responseText;\r\n");
      out.write("                if (res === \"\") {\r\n");
      out.write("                    window.alert(\"Error!\");\r\n");
      out.write("                } else {\r\n");
      out.write("                    window.alert(res);\r\n");
      out.write("                    parent.removeChild(child);\r\n");
      out.write("                }                       \r\n");
      out.write("            }\r\n");
      out.write("        };       \r\n");
      out.write("    }\r\n");
      out.write("  </script>\r\n");
      out.write("    <div id=\"wrapper\">\r\n");
      out.write("\r\n");
      out.write("        <!-- Navigation -->\r\n");
      out.write("        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">\r\n");
      out.write("            <div class=\"navbar-header\">\r\n");
      out.write("                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">\r\n");
      out.write("                    <span class=\"sr-only\">Toggle navigation</span>\r\n");
      out.write("                   \r\n");
      out.write("                    <span class=\"icon-bar\"></span>\r\n");
      out.write("                    <span class=\"icon-bar\"></span>\r\n");
      out.write("                </button>\r\n");
      out.write("                <a class=\"navbar-brand\" href=\"index.html\">logo</a>\r\n");
      out.write("            </div>\r\n");
      out.write("            <!-- /.navbar-header -->\r\n");
      out.write("\r\n");
      out.write("            <ul class=\"nav navbar-top-links navbar-right\">\r\n");
      out.write("                 \r\n");
      out.write("                <!-- /.dropdown -->\r\n");
      out.write("                <li class=\"dropdown\">\r\n");
      out.write("                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\r\n");
      out.write("                        <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>\r\n");
      out.write("                    </a>\r\n");
      out.write("                    <ul class=\"dropdown-menu dropdown-alerts\">\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"#\">\r\n");
      out.write("                                <div>\r\n");
      out.write("                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment\r\n");
      out.write("                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>\r\n");
      out.write("                                </div>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"#\">\r\n");
      out.write("                                <div>\r\n");
      out.write("                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers\r\n");
      out.write("                                    <span class=\"pull-right text-muted small\">12 minutes ago</span>\r\n");
      out.write("                                </div>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"#\">\r\n");
      out.write("                                <div>\r\n");
      out.write("                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent\r\n");
      out.write("                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>\r\n");
      out.write("                                </div>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"#\">\r\n");
      out.write("                                <div>\r\n");
      out.write("                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task\r\n");
      out.write("                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>\r\n");
      out.write("                                </div>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"#\">\r\n");
      out.write("                                <div>\r\n");
      out.write("                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted\r\n");
      out.write("                                    <span class=\"pull-right text-muted small\">4 minutes ago</span>\r\n");
      out.write("                                </div>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a class=\"text-center\" href=\"#\">\r\n");
      out.write("                                <strong>See All Notifications</strong>\r\n");
      out.write("                                <i class=\"fa fa-angle-right\"></i>\r\n");
      out.write("                            </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                    </ul>\r\n");
      out.write("                    <!-- /.dropdown-alerts -->\r\n");
      out.write("                </li>\r\n");
      out.write("                <!-- /.dropdown -->\r\n");
      out.write("                <li class=\"dropdown\">\r\n");
      out.write("                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\r\n");
      out.write("                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>\r\n");
      out.write("                    </a>\r\n");
      out.write("                    <ul class=\"dropdown-menu dropdown-user\">\r\n");
      out.write("                        <li><a href=\"profile.html\"><i class=\"fa fa-user fa-fw\"></i> Profile</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li class=\"divider\"></li>\r\n");
      out.write("\t\t\t\t\t\t<li><a href=\"edit.html\"><i class=\"fa fa-edit fa-fw\"></i> Edit Profile</a>\r\n");
      out.write("\t\t\t\t\t\t <li class=\"divider\"></li>\r\n");
      out.write("                        <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Sign-Out</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                    </ul>\r\n");
      out.write("                    <!-- /.dropdown-user -->\r\n");
      out.write("                </li>\r\n");
      out.write("                <!-- /.dropdown -->\r\n");
      out.write("            </ul>\r\n");
      out.write("            <!-- /.navbar-top-links -->\r\n");
      out.write("\r\n");
      out.write("            <div class=\"navbar-default sidebar\" role=\"navigation\">\r\n");
      out.write("                <div class=\"sidebar-nav navbar-collapse\">\r\n");
      out.write("                    <ul class=\"nav\" id=\"side-menu\">\r\n");
      out.write("                        <li class=\"sidebar-search\">\r\n");
      out.write("                            <!-- /input-group -->\r\n");
      out.write("\t\t\t\t\t\t\t<a href=\"profile.html\">\r\n");
      out.write("\t\t\t\t\t\t\t<img src=\"images.png\" class=\"img-circle\" alt=\"Download\" width=\"50\" height=\"50\">\r\n");
      out.write("\t\t\t\t\t\t\t</a>\r\n");
      out.write("\t\t\t\t\t\t\t<p> Juan Dela Cruz</p>\r\n");
      out.write("\t\t\t\t\t\t</li>\r\n");
      out.write("                         <li>\r\n");
      out.write("                            <a href=\"index.html\"><i class= \"fa fa-home fa-fw\"></i> Home </a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                      \r\n");
      out.write("\t\t\t\t\t\t<li>\r\n");
      out.write("                            <a href=\"requests.jsp\"><i class=\"fa fa-book fa-fw\"></i> Requests</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"appointments.jsp\"><i class=\"fa fa-calendar fa-fw\"></i> Appointments</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                         <li>\r\n");
      out.write("                            <a href=\"finished.jsp\"><i class= \"fa fa-flag\" aria-hidden=\"true\"> </i> Transactions</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        <li>\r\n");
      out.write("                            <a href=\"history.jsp\"><i class= \"fa fa-history\" aria-hidden=\"true\"> </i> History</a>\r\n");
      out.write("                        </li>\r\n");
      out.write("                        \r\n");
      out.write("                        \r\n");
      out.write("                    </ul>\r\n");
      out.write("                </div>\r\n");
      out.write("                <!-- /.sidebar-collapse -->\r\n");
      out.write("            </div>\r\n");
      out.write("            <!-- /.navbar-static-side -->\r\n");
      out.write("        </nav>\r\n");
      out.write("\r\n");
      out.write("        <div id=\"page-wrapper\">\r\n");
      out.write("            <div class=\"row\">\r\n");
      out.write("                <div class=\"col-lg-12\">\r\n");
      out.write("                    <h2 class=\"page-header\">Transaction Information</h2>\r\n");
      out.write("                </div>\r\n");
      out.write("\t\t\t\t</div>\r\n");
      out.write("                <fieldset>\r\n");
      out.write("        <legend>Customer 1</legend>\r\n");
      out.write("\t\t<img src=\"download.jpg\" class=\"img-circle\" alt=\"Download\" width=\"50\" height=\"50\"><p>Joneil Argao </p>\r\n");
      out.write("\t\t<p> Rating: <i class=\"fa fa-star-o fa-2x\"></i>\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i>\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i>\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i>\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i></p>\r\n");
      out.write("\t\r\n");
      out.write("\t\t <div class=\"row\">\r\n");
      out.write("                <div class=\"col-lg-4\">\r\n");
      out.write("                    <div class=\"panel panel-info\">\r\n");
      out.write("                        <div class=\"panel-heading\">\r\n");
      out.write("                           Request Service\r\n");
      out.write("                        </div>\r\n");
      out.write("                        <div class=\"panel-body\">\r\n");
      out.write("                            <p> Pet Sitting</p>\r\n");
      out.write("\t\t\t\t\t\t\t<p> Grooming </p>\r\n");
      out.write("\t\t\t\t\t\t\t<p>Pet:  <b> DOG </b> </p>\r\n");
      out.write("                        </div>\r\n");
      out.write("                        <div class=\"panel-footer\">\r\n");
      out.write("                            <a href=\"\"> </a>\r\n");
      out.write("                        </div>\r\n");
      out.write("                    </div>\r\n");
      out.write("                </div>\r\n");
      out.write("             <p> Address: </p>\r\n");
      out.write("\t\t\t <p> Contact Number: </p>\r\n");
      out.write("\t\t\t <p> Scheduled Date and Time: </p>\r\n");
      out.write("\t\t\t <p> Overtime Rate: </p>\r\n");
      out.write("\t\t\t <p> Additional Fees: </p>\r\n");
      out.write("\t\t\t <p> Deductions: </p>\r\n");
      out.write("\t\t\t <p> Total Amount: </p>\r\n");
      out.write("    </fieldset>\r\n");
      out.write("\t</form>\r\n");
      out.write("\t                <fieldset>\r\n");
      out.write("        <legend>Customer 2</legend>\r\n");
      out.write("\t\t<img src=\"image.jpg\" class=\"img-circle\" alt=\"Download\" width=\"50\" height=\"50\"><p> Cyrene Dispo </p>\r\n");
      out.write("\t\t<p> Rating: <i class=\"fa fa-star-o fa-2x\"></i>\t\t\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i>\t\t\r\n");
      out.write("\t\t<i class=\"fa fa-star-o fa-2x\"></i></p>\t\r\n");
      out.write("\t\t  <div class=\"row\">\r\n");
      out.write("                <div class=\"col-lg-4\">\r\n");
      out.write("                    <div class=\"panel panel-info\">\r\n");
      out.write("                        <div class=\"panel-heading\">\r\n");
      out.write("                           Request Service\r\n");
      out.write("                        </div>\r\n");
      out.write("                        <div class=\"panel-body\">\r\n");
      out.write("                            <p> Veterenary Service</p>\r\n");
      out.write("\t\t\t\t\t\t\t<p> Grooming </p>\r\n");
      out.write("\t\t\t\t\t\t\t<p>Pet:<b> CAT </b> </p>\r\n");
      out.write("                        </div>\r\n");
      out.write("\t\t\t\t\t\t<div class=\"panel-footer\">\r\n");
      out.write("                        <a href=\"\"> </a>\r\n");
      out.write("                        </div>\r\n");
      out.write("                    </div>\r\n");
      out.write("                </div>\r\n");
      out.write("             <p> Address: </p>\r\n");
      out.write("\t\t\t <p> Contact Number: </p>\r\n");
      out.write("\t\t\t <p> Scheduled Date and Time: </p>\r\n");
      out.write("\t\t\t <p> Overtime Rate: </p>\r\n");
      out.write("\t\t\t <p> Additional Fees: </p>\r\n");
      out.write("\t\t\t <p> Deductions: </p>\r\n");
      out.write("\t\t\t <p> Total Amount: </p>\r\n");
      out.write("    </fieldset>\r\n");
      out.write("\t</form>\r\n");
      out.write("\t</div>\r\n");
      out.write("    <!-- /#wrapper -->\r\n");
      out.write("\r\n");
      out.write("    <!-- jQuery -->\r\n");
      out.write("    <script src=\"../vendor/jquery/jquery.min.js\"></script>\r\n");
      out.write("\r\n");
      out.write("    <!-- Bootstrap Core JavaScript -->\r\n");
      out.write("    <script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>\r\n");
      out.write("\r\n");
      out.write("    <!-- Custom Theme JavaScript -->\r\n");
      out.write("    <script src=\"../dist/js/sb-admin-2.js\"></script>\r\n");
      out.write("\r\n");
      out.write("</body>\r\n");
      out.write("\r\n");
      out.write("</html>\r\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
