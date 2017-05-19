package org.apache.jsp.pages;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html lang=\"en\">\n");
      out.write("\n");
      out.write("<head>\n");
      out.write("\n");
      out.write("    <meta charset=\"utf-8\">\n");
      out.write("    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n");
      out.write("    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n");
      out.write("    <meta name=\"description\" content=\"\">\n");
      out.write("    <meta name=\"author\" content=\"\">\n");
      out.write("\n");
      out.write("    <title>Service Provider</title>\n");
      out.write("\n");
      out.write("    <!-- Bootstrap Core CSS -->\n");
      out.write("    <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n");
      out.write("\n");
      out.write("    <!-- MetisMenu CSS -->\n");
      out.write("    <link href=\"../vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">\n");
      out.write("\n");
      out.write("    <!-- Custom CSS -->\n");
      out.write("    <link href=\"../dist/css/sb-admin-2.css\" rel=\"stylesheet\">\n");
      out.write("\n");
      out.write("    <!-- Morris Charts CSS -->\n");
      out.write("    <link href=\"../vendor/morrisjs/morris.css\" rel=\"stylesheet\">\n");
      out.write("\n");
      out.write("    <!-- Custom Fonts -->\n");
      out.write("    <link href=\"../vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n");
      out.write("\n");
      out.write("    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->\n");
      out.write("    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->\n");
      out.write("    <!--[if lt IE 9]>\n");
      out.write("        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>\n");
      out.write("        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>\n");
      out.write("    <![endif]-->\n");
      out.write("\n");
      out.write("</head>\n");
      out.write("\n");
      out.write("<body>\n");
      out.write("\n");
      out.write("    <div id=\"wrapper\">\n");
      out.write("\n");
      out.write("        <!-- Navigation --> \n");
      out.write("        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">\n");
      out.write("            <div class=\"navbar-header\">\n");
      out.write("                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">\n");
      out.write("                    <span class=\"sr-only\">Toggle navigation</span>\n");
      out.write("                   \n");
      out.write("                    <span class=\"icon-bar\"></span>\n");
      out.write("                    <span class=\"icon-bar\"></span>\n");
      out.write("                </button>\n");
      out.write("                 <img src=\"logo1.png\" alt=\"Download\">\n");
      out.write("            </div>\n");
      out.write("            <!-- /.navbar-header -->\n");
      out.write("\n");
      out.write("            <ul class=\"nav navbar-top-links navbar-right\">\n");
      out.write("                <!-- /.dropdown -->\n");
      out.write("                <li class=\"dropdown\">\n");
      out.write("                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n");
      out.write("                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>\n");
      out.write("                    </a>\n");
      out.write("\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-user\">\n");
      out.write("                        <li><a href=\"profile.jsp\"><i class=\"fa fa-user fa-fw\"></i> View Profile</a>\n");
      out.write("\t\t\t\t\t\t<li class=\"divider\"></li>\n");
      out.write("\t\t\t\t\t\t<li><a href=\"edit.jsp\"><i class=\"fa fa-edit fa-fw\"></i> Edit Profile</a>\n");
      out.write("                        <li class=\"divider\"></li>\n");
      out.write("                        <li><a href=\"index.jsp\"><i class=\"fa fa-sign-out fa-fw\"></i> Sign-out</a>\n");
      out.write("                        </li>\n");
      out.write("                    </ul>\n");
      out.write("\n");
      out.write("                    <!-- /.dropdown-user -->\n");
      out.write("                </li>\n");
      out.write("                <!-- /.dropdown -->\n");
      out.write("            </ul>\n");
      out.write("            <!-- /.navbar-top-links -->\n");
      out.write("\n");
      out.write("            <div class=\"navbar-default sidebar\" role=\"navigation\">\n");
      out.write("                <div class=\"sidebar-nav navbar-collapse\">\n");
      out.write("                    <ul class=\"nav\" id=\"side-menu\">\n");
      out.write("                        <li class=\"sidebar-search\">\n");
      out.write("                            <!-- /input-group -->\n");
      out.write("\t\t\t<p> Juan Dela Cruz </p>\n");
      out.write("\t\t\t</li>\n");
      out.write("                        <li>\n");
      out.write("                            <a href=\"index.jsp\"><i class=\"fa fa-home fa-fw\"></i> Home</a>\n");
      out.write("                        </li>\n");
      out.write("\t\t\t\t\t\t<li>\n");
      out.write("                            <a href=\"requests.jsp\"><i class=\"fa fa-book fa-fw\"></i> Requests</a>\n");
      out.write("                        </li>\n");
      out.write("                        <li>\n");
      out.write("                            <a href=\"appointments.jsp\"><i class=\"fa fa-calendar fa-fw\"></i> Appointments</a>\n");
      out.write("                        </li>\n");
      out.write("\t\t\t\t\t\t<li>\n");
      out.write("                            <a href=\"finished.jsp\"><i class=\"fa fa-flag fa-fw\"></i> Transactions</a>\n");
      out.write("                        </li>\n");
      out.write("\t\t\t\t\t\t<li>\n");
      out.write("                            <a href=\"history.jsp\"><i class=\"fa fa-history fa-fw\"></i> History</a>\n");
      out.write("                        </li>\n");
      out.write("\n");
      out.write("                        </li>\n");
      out.write("        </nav>\n");
      out.write("\n");
      out.write("        <div id=\"page-wrapper\">\n");
      out.write("            <div class=\"row\">\n");
      out.write("                <div class=\"col-lg-12\">\n");
      out.write("\t\t\t\t<h2 class=\"page-header\">Home</h2>\n");
      out.write("                <!-- /.col-lg-12 -->\n");
      out.write("            <!-- /.row -->\n");
      out.write("\t\t\t\n");
      out.write("            <div class=\"row\">\n");
      out.write("                <div class=\"col-lg-3 col-md-6\">\n");
      out.write("                    <div class=\"panel panel-primary\">\n");
      out.write("                        <div class=\"panel-heading\">\n");
      out.write("                            <div class=\"row\">\n");
      out.write("                                <div class=\"col-xs-3\">\n");
      out.write("                                    <i class=\"fa fa-book fa-5x\"></i>\n");
      out.write("                                </div>\n");
      out.write("                                <div class=\"col-xs-9 text-right\">\n");
      out.write("                                    <div>Requests</div>\n");
      out.write("                                </div>\n");
      out.write("                            </div>\n");
      out.write("                        </div>\n");
      out.write("                        <a href=\"#\">\n");
      out.write("                            <div class=\"panel-footer\">\n");
      out.write("                                <span class=\"pull-left\"><a href=\"requests.jsp\">View Details</a></span>\n");
      out.write("                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>\n");
      out.write("                                <div class=\"clearfix\"></div>\n");
      out.write("                            </div>\n");
      out.write("                        </a>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("                <div class=\"col-lg-3 col-md-6\">\n");
      out.write("                    <div class=\"panel panel-green\">\n");
      out.write("                        <div class=\"panel-heading\">\n");
      out.write("                            <div class=\"row\">\n");
      out.write("                                <div class=\"col-xs-3\">\n");
      out.write("                                    <i class=\"fa fa-calendar fa-5x\"></i>\n");
      out.write("                                </div>\n");
      out.write("                                <div class=\"col-xs-9 text-right\">\n");
      out.write("                                    <div>Appointments</div>\n");
      out.write("                                </div>\n");
      out.write("                            </div>\n");
      out.write("                        </div>\n");
      out.write("                        <a href=\"#\">\n");
      out.write("                            <div class=\"panel-footer\">\n");
      out.write("                                <span class=\"pull-left\"><a href=\"appointments.jsp\">View Details</a></span>\n");
      out.write("                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>\n");
      out.write("                                <div class=\"clearfix\"></div>\n");
      out.write("                            </div>\n");
      out.write("                        </a>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("\t\t\t\t<div class=\"col-lg-3\">\n");
      out.write("                    <div class=\"panel panel-default\">\n");
      out.write("                        <div class=\"panel-heading\">\n");
      out.write("\t\t\t\t\t<i class=\"fa fa-gears fa-fw\"> </i> Services\n");
      out.write("                        </div>\n");
      out.write("                        <!-- /.panel-heading -->\n");
      out.write("                        <br>\n");
      out.write("                        <p> <i class=\"fa fa-arrow-right fa-fw\"> </i> Pet Sitting </p>\n");
      out.write("                        <p> <i class=\"fa fa-arrow-right fa-fw\"> </i> Grooming </p>\n");
      out.write("                        <p> <i class=\"fa fa-arrow-right fa-fw\"> </i> Training </p>\n");
      out.write("                        <p> <i class=\"fa fa-arrow-right fa-fw\"> </i> Veterenary Services </p>\n");
      out.write("                        </div>\n");
      out.write("                        </div>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("                <div class=\"col-lg-3 col-md-6\">\n");
      out.write("                    <div class=\"panel panel-yellow\">\n");
      out.write("                        <div class=\"panel-heading\">\n");
      out.write("                            <div class=\"row\">\n");
      out.write("                                <div class=\"col-xs-3\">\n");
      out.write("                                    <i class=\"fa fa-flag fa-5x\"></i>\n");
      out.write("                                </div>\n");
      out.write("                                <div class=\"col-xs-9 text-right\">\n");
      out.write("                                    <div>Transactions</div>\n");
      out.write("                                </div>\n");
      out.write("                            </div>\n");
      out.write("                        </div>\n");
      out.write("                        <a href=\"#\">\n");
      out.write("                            <div class=\"panel-footer\">\n");
      out.write("                                <span class=\"pull-left\"><a href=\"finished.jsp\">View Details</a></span>\n");
      out.write("                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>\n");
      out.write("                                <div class=\"clearfix\"></div>\n");
      out.write("                            </div>\n");
      out.write("                        </a>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("\t\t\t\t\n");
      out.write("                <div class=\"col-lg-3 col-md-6\">\n");
      out.write("                    <div class=\"panel panel-red\">\n");
      out.write("                        <div class=\"panel-heading\">\n");
      out.write("                            <div class=\"row\">\n");
      out.write("                                <div class=\"col-xs-3\">\n");
      out.write("                                    <i class=\"fa fa-history fa-5x\"></i>\n");
      out.write("                                </div>\n");
      out.write("                                <div class=\"col-xs-9 text-right\">\n");
      out.write("                                    <div>History</div>\n");
      out.write("                                </div>\n");
      out.write("                            </div>\n");
      out.write("                        </div>\n");
      out.write("                        <a href=\"#\">\n");
      out.write("                            <div class=\"panel-footer\">\n");
      out.write("                                <span class=\"pull-left\"><a href=\"history.jsp\">View Details</a></span>\n");
      out.write("                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>\n");
      out.write("                                <div class=\"clearfix\"></div>\n");
      out.write("                            </div>\n");
      out.write("                        </a>\n");
      out.write("                    </div>\n");
      out.write("                </div>\n");
      out.write("\t\t\t\t\t\n");
      out.write("\t\t\t\t\n");
      out.write("    <!-- jQuery -->\n");
      out.write("    <script src=\"../vendor/jquery/jquery.min.js\"></script>\n");
      out.write("\n");
      out.write("    <!-- Bootstrap Core JavaScript -->\n");
      out.write("    <script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>\n");
      out.write("\n");
      out.write("    <!-- Metis Menu Plugin JavaScript -->\n");
      out.write("    <script src=\"../vendor/metisMenu/metisMenu.min.js\"></script>\n");
      out.write("\n");
      out.write("    <!-- Morris Charts JavaScript -->\n");
      out.write("    <script src=\"../vendor/raphael/raphael.min.js\"></script>\n");
      out.write("    <script src=\"../vendor/morrisjs/morris.min.js\"></script>\n");
      out.write("    <script src=\"../data/morris-data.js\"></script>\n");
      out.write("\n");
      out.write("    <!-- Custom Theme JavaScript -->\n");
      out.write("    <script src=\"../dist/js/sb-admin-2.js\"></script>\n");
      out.write("\n");
      out.write("</body>\n");
      out.write("\n");
      out.write("</html>\n");
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
