package com.accueil;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.mesClasses.Database;


@WebServlet("/loginT")
public class loginT extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
   
    public loginT() {
        super();
        
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		this.getServletContext().getRequestDispatcher( "/WEB-INF/loginT.jsp" ).forward( request, response );
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html"); 
		PrintWriter out = response.getWriter();  
        
	    String n=request.getParameter("mail");  
	    String p=request.getParameter("password");  
	    Database tableNoms = new Database();
	         
	    if(tableNoms.validateT(n,p)){  
	    	HttpSession session = request.getSession();

	        session.setAttribute("mail", n);
	        session.setAttribute("password", p);
	        
	    	RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/AccueilT.jsp");  
	        rd.forward(request,response);  
	    }  
	    else{  
	        out.print("Sorry username or password error");  
	        RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/loginT.jsp");  
	        rd.include(request,response);  
	    }  
	          
	    out.close();  
	    }  
	}


