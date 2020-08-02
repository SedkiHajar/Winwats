package com.accueil;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mesClasses.Database;
import com.mesClasses.RegisterT;

@WebServlet("/registerT")
public class registerT extends HttpServlet {
	private static final long serialVersionUID = 1L;
   
    public registerT() {
        super();
       
    }


	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		this.getServletContext().getRequestDispatcher( "/WEB-INF/registerT.jsp" ).forward( request, response );
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		 RegisterT registerT = new RegisterT();
		 registerT.setNomE(request.getParameter("nomE"));
		 registerT.setMail(request.getParameter("mail"));
		 registerT.setPassword(request.getParameter("password"));
		 
		 
		 
		 Database tableNoms = new Database();
	     tableNoms.RegisterT(registerT);
	     this.getServletContext().getRequestDispatcher("/WEB-INF/welcomeT.jsp").forward(request, response);
	}
	
}

