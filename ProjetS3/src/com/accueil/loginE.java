package com.accueil;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.ResultSet;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.mesClasses.Database;

import com.mesClasses.DemandeE;
import com.mesClasses.DemandeT;

import com.mesClasses.RegisterE;

import javax.servlet.RequestDispatcher;


@WebServlet("/loginE")
public class loginE extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
   
    public loginE() {
        super();
        
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		this.getServletContext().getRequestDispatcher( "/WEB-INF/loginE.jsp" ).forward( request, response );
		
    }
	
	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		    response.setContentType("text/html");  
		    PrintWriter out = response.getWriter();  
		          
		    String n=request.getParameter("mail");  
		    String p=request.getParameter("password"); 
		     
		    Database tableNoms = new Database();
		         
		    if(tableNoms.validateE(n,p)){ 
		    	HttpSession session = request.getSession();

		        session.setAttribute("mail", n);
		        session.setAttribute("password", p);
		        
		        RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/AccueilE.jsp");  
		        rd.forward(request,response);  
		    }  
		    else{  
		        out.print("Sorry username or password error");  
		        RequestDispatcher rd=request.getRequestDispatcher("/WEB-INF/loginE.jsp");  
		        rd.include(request,response);  
		    }  
		          
		    out.close();  
		    }  
         }
        
          
        
         
         
          
       
	



