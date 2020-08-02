package com.accueil;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mesClasses.Database;


@WebServlet("/loginA")
public class loginA extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
   
    public loginA() {
        super();
        
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		this.getServletContext().getRequestDispatcher( "/WEB-INF/loginA.jsp" ).forward( request, response );
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html"); 
		PrintWriter out = response.getWriter();  
        
	    String n=request.getParameter("mail");  
	    String p=request.getParameter("password");  
	    Database tableNoms = new Database();
	         
	    if(tableNoms.validateA(n,p)){  
	        RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/AccueilA.jsp");  
	        rd.forward(request,response);  
	    }  
	    else{  
	        out.print("Sorry username or password error");  
	        RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/loginA.jsp");  
	        rd.include(request,response);  
	    }  
	          
	    out.close();  
	    
		
		
		
		
	}

}

