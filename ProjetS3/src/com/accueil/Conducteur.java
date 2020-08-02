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
import com.mesClasses.DemandeC;

@WebServlet("/Conducteur")
public class Conducteur extends HttpServlet {
	private static final long serialVersionUID = 1L;
    public Conducteur() {
        super();
      
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Database tableNoms = new Database();
		String smail= (String)request.getSession().getAttribute("mail");
	    request.setAttribute("utilisateurs", tableNoms.recupererConducteurs(smail));
		this.getServletContext().getRequestDispatcher( "/WEB-INF/conducteur.jsp" ).forward( request, response );
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		 DemandeC conducteur = new DemandeC();
		 String smail= (String)request.getSession().getAttribute("mail");
		 conducteur.setNom(request.getParameter("nom"));
		 conducteur.setPrenom(request.getParameter("prenom"));
		 conducteur.setNumTel(request.getParameter("numTel"));
		 
		 
		 
		 Database tableNoms = new Database();
	     tableNoms.ajouterConducteur(conducteur,smail);
	     this.getServletContext().getRequestDispatcher("/WEB-INF/conducteur.jsp").forward(request, response);
	}

}

