A. How to access the database

Required (wamp server / phpmyadmin)

1.Run wamp server.
2.Open phpmyadmin and create "petmovetko" database.
3.Import petmovetko.sql.

------------------------------------------*****-----------------------------------------------


B. Steps to run the Admin Module.

1. Make sure that wamp is running and "petmovetko" database is present.
2. Extract the contents of the admin folder in C:/wamp64/www directory of wamp
3. Type "localhost" in your web browser to ensure that it is working
4. Left click the wamp icon on your terminal
5. Open Apache > httpd.conf
6. Edit the following lines:

	#   onlineoffline tag - don't remove
     		Order Deny,Allow
     		Deny from all
     		Allow from 127.0.0.1
     		Allow from ::1
     		Allow from localhost

	to:

	#   If you want the whole world to see your page add Require all
	#   If you want specific computers to see your page add Require (ip ip.address.of.comp)
	#   See example below
	#   onlineoffline tag - don't remove
		Require local
		Require ip 192.168.81.182

7. Left click wamp icon on your terminal then open Apache > Service Administration > Restart Service
8. Wait until the wamp icon is colored green then open localhost on your computer and on another computer
   to verify connection
------------------------------------------*****-----------------------------------------------


C. Steps to run the Customer Module.

<< Setup Python Path
** First Plan
- Open This PC's Properties.
- Go to advanced settings.
- Click Environment Variables.
- Select PATH in the System Variables section
- Add New : C:\<installation directory>

** Second plan : Python path (if first fails)
- System Variable = PYTHON_HOME (direct to installation directory)
- System Variable = PATH
- Add New : ;%PYTHON_HOME%\;%PYTHON_HOME%


<< Setup Virtual Environment
- Type: python -m venv cust
- cust\Scripts\activate -- Virtual Environment Activation

<< Dependencies to be installed after creating a virtual environment
- pip install --upgrade pip (If this doesn't work, run : python get-pip.py)
- pip install django
- pip install mysqlclient

------------------------------------------*****-----------------------------------------------


D. Steps to run the Service Provider Module.
1. Open NetBeans.
2. Import project petmovetko
3. Right click the project then click Run.
