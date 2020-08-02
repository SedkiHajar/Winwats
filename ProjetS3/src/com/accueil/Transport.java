package com.accueil;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mesClasses.Database;
import com.mesClasses.DemandeE;
import com.mesClasses.DemandeT;

@WebServlet("/Transport")
public class Transport extends HttpServlet {
	private static final long serialVersionUID = 1L;
    public Transport() {
        super();
      
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Database tableNoms = new Database();
		String smail= (String)request.getSession().getAttribute("mail");
	    request.setAttribute("utilisateurs", tableNoms.recupererTransports(smail));
		this.getServletContext().getRequestDispatcher( "/WEB-INF/transport.jsp" ).forward( request, response );
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		 DemandeT transport = new DemandeT();	
		 String smail= (String)request.getSession().getAttribute("mail");
		 transport.setMatricule(request.getParameter("matricule"));		
		 transport.setNbrPlaces(request.getParameter("nbrPlaces"));
		 
		 Database tableNoms = new Database();
	     tableNoms.ajouterTransport(transport,smail);
	     this.getServletContext().getRequestDispatcher("/WEB-INF/transport.jsp").forward(request, response);
	}

}
