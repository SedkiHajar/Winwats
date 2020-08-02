package com.accueil;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mesClasses.Database;
import com.mesClasses.DemandeE;

@WebServlet("/entreprise")
public class entreprise extends HttpServlet {
	private static final long serialVersionUID = 1L;
   
    public entreprise() {
        super();
        
    }

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		Database tableNoms = new Database();
		String smail= (String)request.getSession().getAttribute("mail");

	    request.setAttribute("utilisateurs", tableNoms.recupererEntreprises(smail));
	    this.getServletContext().getRequestDispatcher( "/WEB-INF/entreprise.jsp" ).forward( request, response ); 
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		 DemandeE entreprise = new DemandeE();
		 entreprise.setNom(request.getParameter("nom"));
		 entreprise.setPrenom(request.getParameter("prenom"));
		 entreprise.setPoste(request.getParameter("poste"));
		 entreprise.setAdresse(request.getParameter("adresse"));
		 entreprise.setLat(Float.parseFloat(request.getParameter("lat")));
		 entreprise.setLng(Float.parseFloat(request.getParameter("lng")));
		 
		 entreprise.setMail(request.getParameter("mail"));
		 entreprise.setShift(request.getParameter("shift"));
		 
		 Database tableNoms = new Database();
		 String smail= (String)request.getSession().getAttribute("mail");

		 tableNoms.ajouterEntreprise(entreprise,smail);
	     

	     request.setAttribute("utilisateurs", tableNoms.recupererEntreprises(smail));
	     this.getServletContext().getRequestDispatcher("/WEB-INF/entreprise.jsp").forward(request, response);
	      
	        
	        
	    }

	
	}
