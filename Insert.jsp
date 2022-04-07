<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    <%@ page import ="java.sql.* "%>"
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert</title>
</head>
<body>
<!-- Connessione db -->
<%
String id = request.getParameter("id");
String name = request.getParameter("name");
String email = request.getParameter("email");
String country = request.getParameter("country");

try{
	Class.forName("com.mysql.jdbc.Driver");
	Connection con = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/demo","root","");
PreparedStatement ps = con.prepareStatement("INSERT INTO demo.users(id,name,email,country)values(?,?,?,?);");

	ps.setString(1, id);
	ps.setString(2, name);
	ps.setString(3, email);
	ps.setString(4, country);
	
	int x = ps.executeUpdate();
	
	if(x>0){
		
			//out.println("Registration done successfully!!");
			//String message="Registration done successfully!! ";
		String message = "Registration done successfully!! ";
		
		response.sendRedirect("Table.jsp");
			
		}else{
			
				out.println("Registration failed...");
			}
			
		}catch(Exception e){
			out.println(e);
		}		
%>
</body>
</html>
