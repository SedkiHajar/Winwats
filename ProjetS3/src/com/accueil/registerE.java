package com.accueil;

import java.io.IOException;


import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mesClasses.Database;

import com.mesClasses.RegisterE;

@WebServlet("/registerE")
public class registerE extends HttpServlet {
	private static final long serialVersionUID = 1L;
   
    public registerE() {
        super();
       
    }


	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		this.getServletContext().getRequestDispatcher( "/WEB-INF/registerE.jsp" ).forward( request, response );
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		 RegisterE registerE = new RegisterE();
		 registerE.setNomE(request.getParameter("nomE"));
		 registerE.setMail(request.getParameter("mail"));
		 registerE.setPassword(request.getParameter("password"));
		 
		 
		 
		 
		 Database tableNoms = new Database();
	     tableNoms.RegisterE(registerE);
	     this.getServletContext().getRequestDispatcher("/WEB-INF/welcomeE.jsp").forward(request, response);
	}

}

