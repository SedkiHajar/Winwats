package com.mesClasses;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.util.ArrayList;
import java.util.List;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;

import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;
import org.xml.sax.SAXException;

import com.mesClasses.DemandeE;




public class Database {
	private Connection connexion;
	
	
	
	private void loadDatabase() {
        // Chargement du driver
        try {
            Class.forName("com.mysql.jdbc.Driver");
        } catch (ClassNotFoundException e) {
        }

        try {
            connexion = DriverManager.getConnection("jdbc:mysql://localhost:8889/projetS3", "root", "root");
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
	
	
	
	
	 
		public  boolean validateE(String mail,String password){  
		boolean status=false; 
		Statement statement = null;
        ResultSet resultat = null;

		loadDatabase();
		try{  
		statement = connexion.createStatement();

            // Exécution de la requête
        resultat = statement.executeQuery("select mail,password from registerE where mail='"+mail+ "'and password='"+password+"'");
        	

            // Récupération des données
         
		status=resultat.next();  
		          
		}catch(Exception e){System.out.println(e);}  
		return status;  
		}  
		 
		
		public  boolean validateT(String mail,String password){  
			boolean status=false; 
			Statement statement = null;
	        ResultSet resultat = null;

			loadDatabase();
			try{  
			statement = connexion.createStatement();

	            // Exécution de la requête
	        resultat = statement.executeQuery("select mail,password from registerT where mail='"+mail+ "'and password='"+password+"'");
	        	

	            // Récupération des données
	         
			status=resultat.next();  
			          
			}catch(Exception e){System.out.println(e);}  
			return status;  
			}  
				
		public  boolean validateA(String mail,String password){  
			boolean status=false; 
			Statement statement = null;
	        ResultSet resultat = null;

			loadDatabase();
			try{  
			statement = connexion.createStatement();

	            // Exécution de la requête
	        resultat = statement.executeQuery("select mail,password from loginA where mail='"+mail+ "'and password='"+password+"'");
	        	

	            // Récupération des données
	         
			status=resultat.next();  
			          
			}catch(Exception e){System.out.println(e);}  
			return status;  
			}  
		
	
	
	
	
	
	 public void RegisterE(RegisterE registerE) {
	        loadDatabase();
	        
	        try {
	            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO registerE(nomE,mail,password) VALUES(?,?,?);");
	            preparedStatement.setString(1, registerE.getNomE());
	            preparedStatement.setString(2, registerE.getMail());
	            preparedStatement.setString(3, registerE.getPassword());
	            
	            preparedStatement.executeUpdate();
	            
	        } catch (SQLException e) {
	            e.printStackTrace();
	        }
	    }
	 
 
	 public void RegisterT(RegisterT registerT) {
	        loadDatabase();
	        
	        try {
	            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO registerT(nomE,mail,password) VALUES(?,?,?);");
	            preparedStatement.setString(1, registerT.getNomE());
	            preparedStatement.setString(2, registerT.getMail());
	            preparedStatement.setString(3, registerT.getPassword());
	            
	            preparedStatement.executeUpdate();
	            
	        } catch (SQLException e) {
	            e.printStackTrace();
	        }
	    }
	 
	 
	 
	 
	 
	 public List<RegisterE> recupererE() {
	        List<RegisterE> Ese = new ArrayList<RegisterE>();
	        Statement statement = null;
	        ResultSet resultat = null;
         

	        loadDatabase();
	        
	        try {
	            statement = connexion.createStatement();

	            // Exécution de la requête
	            resultat = statement.executeQuery("SELECT nomE,mail FROM  registerE ");

	            // Récupération des données
	            while (resultat.next()) {
	                String nomE = resultat.getString("nomE");
	                String mail = resultat.getString("mail");
	                
	              
	                
	                
	                RegisterE RegisterE = new RegisterE();
	                RegisterE.setNomE(nomE);
	                RegisterE.setMail(mail);
	               

	                
	                Ese.add(RegisterE);
	            }
	        } catch (SQLException e) {
	        } finally {
	            // Fermeture de la connexion
	            try {
	                if (resultat != null)
	                    resultat.close();
	                if (statement != null)
	                    statement.close();
	                if (connexion != null)
	                    connexion.close();
	            } catch (SQLException ignore) {
	            }
	        }
	        
	        return Ese;
	    }
	 
	 
	 
	 public List<RegisterT> recupererT() {
	        List<RegisterT> Ese = new ArrayList<RegisterT>();
	        Statement statement = null;
	        ResultSet resultat = null;
      

	        loadDatabase();
	        
	        try {
	            statement = connexion.createStatement();

	            // Exécution de la requête
	            resultat = statement.executeQuery("SELECT nomE,mail FROM  registerT ");

	            // Récupération des données
	            while (resultat.next()) {
	                String nomE = resultat.getString("nomE");
	                String mail = resultat.getString("mail");
	                
	              
	                
	                
	                RegisterT RegisterT= new RegisterT();
	                RegisterT.setNomE(nomE);
	                RegisterT.setMail(mail);
	               

	                
	                Ese.add(RegisterT);
	            }
	        } catch (SQLException e) {
	        } finally {
	            // Fermeture de la connexion
	            try {
	                if (resultat != null)
	                    resultat.close();
	                if (statement != null)
	                    statement.close();
	                if (connexion != null)
	                    connexion.close();
	            } catch (SQLException ignore) {
	            }
	        }
	        
	        return Ese;
	    }
	
	
	 
	 
     public int ajouterEntreprise(DemandeE entreprise,String smail) {
	        loadDatabase();
	        int status=0;
	        Statement statement = null;
	        ResultSet resultat = null;
	        try {
	        	statement = connexion.createStatement();

	            // Exécution de la requête
	            resultat = statement.executeQuery("SELECT id FROM  registerE where mail='"+smail+"' ;");
	            while (resultat.next()) {
	                String id= resultat.getString("id");
	            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO entreprise(nom,prenom,poste,adresse,lat,lng,mail,shift,idRespo) VALUES(?,?,?,?,?,?,?,?,"+id+");");
	            
	            preparedStatement.setString(1, entreprise.getNom());
	            preparedStatement.setString(2, entreprise.getPrenom());
	            preparedStatement.setString(3, entreprise.getPoste());
	            preparedStatement.setString(4, entreprise.getAdresse());
	            preparedStatement.setFloat(5, entreprise.getLat());
	            preparedStatement.setFloat(6, entreprise.getLng());
	            preparedStatement.setString(7, entreprise.getMail());
	            preparedStatement.setString(8, entreprise.getShift());
	        
	            preparedStatement.executeUpdate();
	            status=1;
	            System.out.println(entreprise.getLat());
	            
	            }}  catch (SQLException e) {
	                // process sql exception
	                printSQLException(e);
	                status=0;
	            }
            return status;

	    }
	 
	 public void ajouterTransport(DemandeT transport,String smail) {
	        loadDatabase();
	        Statement statement = null;
	        ResultSet resultat = null;

	        try {
	        	statement = connexion.createStatement();
	        	
	        	// Exécution de la requête
	            resultat = statement.executeQuery("SELECT id FROM  registerT where mail='"+smail+"' ;");
	            while (resultat.next()) {
	                String idT= resultat.getString("id");
	        	
	            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO transport(matricule,nbrPlaces,idT) VALUES(?,?,"+idT+");");
	            preparedStatement.setString(1, transport.getMatricule());
	            preparedStatement.setString(2, transport.getNbrPlaces());
	            preparedStatement.executeUpdate();
	            
	            }
	            } catch (SQLException e) {
	            e.printStackTrace();
	        }
	    }
	 
	public void ajouterConducteur(DemandeC conducteur,String smail) {
	        loadDatabase();
	        Statement statement = null;
	        ResultSet resultat = null;
	        try {
	        	statement = connexion.createStatement();
	        	// Exécution de la requête
	            resultat = statement.executeQuery("SELECT id FROM  registerT where mail='"+smail+"' ;");
	            while (resultat.next()) {
	                String idC= resultat.getString("id");
	            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO conducteur(nom,prenom,numTel,idTC) VALUES(?,?,?,"+idC+");");
	            preparedStatement.setString(1, conducteur.getNom());
	            preparedStatement.setString(2, conducteur.getPrenom());
	            preparedStatement.setString(3, conducteur.getNumTel());
	            preparedStatement.executeUpdate();
	            
	            }
	            } catch (SQLException e) {
	            e.printStackTrace();
	        }
	    }
	
	 
	 
	
	
	 
		    
		    public ArrayList<DemandeE> recupererEntreprises(String smail) {
		        ArrayList<DemandeE> Entreprises = new ArrayList<DemandeE>();
		        Statement statement = null;
		        ResultSet resultat = null;
                

		        loadDatabase();
		        
		        try {
		            statement = connexion.createStatement();

		            // Exécution de la requête
		            resultat = statement.executeQuery("SELECT e.nom,e.prenom,e.poste,e.adresse,e.lat,e.lng,e.mail,e.shift FROM entreprise e join registerE r where r.mail='"
		            		
		            		+smail+"' and e.idRespo=r.id;");

		            // Récupération des données
		            while (resultat.next()) {
		                String nom = resultat.getString("nom");
		                String prenom = resultat.getString("prenom");
		                String poste = resultat.getString("poste");
		                String adresse = resultat.getString("adresse");
		                Float lat = resultat.getFloat("lat");
		                Float lng = resultat.getFloat("lng");
		                String mail = resultat.getString("mail");
		                String shift = resultat.getString("shift");
		                
		                
		                DemandeE DemandeE = new DemandeE();
		                DemandeE.setNom(nom);
		                DemandeE.setPrenom(prenom);
		                DemandeE.setPoste(poste);
		                DemandeE.setAdresse(adresse);
		                DemandeE.setLat(lat);
		                DemandeE.setLng(lng);
		                DemandeE.setMail(mail);
		                DemandeE.setShift(shift);
		                
		                
		                Entreprises.add(DemandeE);
		            }
		        } catch (SQLException e) {
		        } finally {
		            // Fermeture de la connexion
		            try {
		                if (resultat != null)
		                    resultat.close();
		                if (statement != null)
		                    statement.close();
		                if (connexion != null)
		                    connexion.close();
		            } catch (SQLException ignore) {
		            }
		        }
		        
		        return Entreprises;
		    }
		    
		    
		    
		    
		    public List<DemandeT> recupererTransports(String smail) {
		        List<DemandeT> Transports = new ArrayList<DemandeT>();
		        Statement statement = null;
		        ResultSet resultat = null;

		        loadDatabase();
		        
		        try {
		            statement = connexion.createStatement();

		            // Exécution de la requête
		            resultat = statement.executeQuery("SELECT t.matricule,t.nbrPlaces FROM transport t join registerT r where r.mail='"+smail+"' and t.idT=r.id;");

		            // Récupération des données
		            while (resultat.next()) {		               
		                String matricule = resultat.getString("matricule");		                
		                String nbrPlaces = resultat.getString("nbrPlaces");
		                		              
		                
		                DemandeT DemandeT = new DemandeT();
		                DemandeT.setMatricule(matricule);		              
		                DemandeT.setNbrPlaces(nbrPlaces);		                
		                Transports.add(DemandeT);
		            }
		        } catch (SQLException e) {
		        } finally {
		        	// Fermeture de la connexion
		            try {
		                if (resultat != null)
		                    resultat.close();
		                if (statement != null)
		                    statement.close();
		                if (connexion != null)
		                    connexion.close();
		            } catch (SQLException ignore) {
		            }
		        }
		        
		        return Transports;
		    }
		    
		   
		    
		    
		    
		    public List<DemandeC> recupererConducteurs(String smail) {
		        List<DemandeC> Conducteurs = new ArrayList<DemandeC>();
		        Statement statement = null;
		        ResultSet resultat = null;

		        loadDatabase();
		        
		        try {
		            statement = connexion.createStatement();

		            // Exécution de la requête
		            resultat = statement.executeQuery("SELECT c.nom,c.prenom,c.numTel FROM conducteur c join registerT r where r.mail='"+smail+"' and c.idTC=r.id;");

		            // Récupération des données
		            while (resultat.next()) {
		                String nom = resultat.getString("nom");
		                String prenom = resultat.getString("prenom");
		                String numTel = resultat.getString("numTel");
		                
		                
		                
		                DemandeC DemandeC = new DemandeC();
			            DemandeC.setNom(nom);
		                DemandeC.setPrenom(prenom);
		                DemandeC.setNumTel(numTel);
		                
		                Conducteurs.add(DemandeC);
		            }
		        } catch (SQLException e) {
		        } finally {
		        	// Fermeture de la connexion
		            try {
		                if (resultat != null)
		                    resultat.close();
		                if (statement != null)
		                    statement.close();
		                if (connexion != null)
		                    connexion.close();
		            } catch (SQLException ignore) {
		            }
		        }
		        
		        return Conducteurs;
		    }
		    
		    
		    
		    
		  
		    public List<DemandeM> recupererM() {
		        List<DemandeM> Ese = new ArrayList<DemandeM>();
		        Statement statement = null;
		        ResultSet resultat = null;
	         
		            
		    		DocumentBuilderFactory factory= DocumentBuilderFactory.newInstance();
		    		try {
		    			DocumentBuilder builder=factory.newDocumentBuilder();
		    			Document doc =builder.parse("NewFile.xml");
		    			NodeList markerList=doc.getElementsByTagName("marker");
		    			for(int i=0;i<markerList.getLength();i++) {
		    				Node p=markerList.item(i);
		    				if(p.getNodeType()==Node.ELEMENT_NODE) {
		    					Element marker=(Element)p;
		    					marker.getAttribute("id");
		    					marker.getAttribute("name");
		    					marker.getAttribute("address");
		    					marker.getAttribute("lat");
		    					marker.getAttribute("lng");
		    					marker.getAttribute("type");
		    				}
		    				
		    			}
		    			
		    		} catch (ParserConfigurationException e) {
		    			// TODO Auto-generated catch block
		    			e.printStackTrace();
		    		} catch (SAXException e) {
		    			// TODO Auto-generated catch block
		    			e.printStackTrace();
		    		} catch (IOException e) {
		    			// TODO Auto-generated catch block
		    			e.printStackTrace();
		    		}
		    		
		        loadDatabase();
		        
		        try {
		            statement = connexion.createStatement();

		            // Exécution de la requête
		            resultat = statement.executeQuery("SELECT * FROM  markers where 1 ");

		            // Récupération des données
		            while (resultat.next()) {
		                String name = resultat.getString("name");
		                String address = resultat.getString("address");
		                Float lat = resultat.getFloat("lat");
		                Float lng = resultat.getFloat("lng");
		                String type = resultat.getString("type");

		                
		              
		                
		                
		                DemandeM DemandeM = new DemandeM();
		                DemandeM.setName(name);
		                DemandeM.setAddress(address);
		                DemandeM.setLat(lat);
		                DemandeM.setLng(lng);
		                DemandeM.setType(type);
		               

		                
		                Ese.add(DemandeM);
		            }
		        } catch (SQLException e) {
		        } finally {
		            // Fermeture de la connexion
		            try {
		                if (resultat != null)
		                    resultat.close();
		                if (statement != null)
		                    statement.close();
		                if (connexion != null)
		                    connexion.close();
		            } catch (SQLException ignore) {
		            }
		        }
		        
		        return Ese;
		    }    
		    		   
		    private void printSQLException(SQLException ex) {
		        for (Throwable e: ex) {
		            if (e instanceof SQLException) {
		                e.printStackTrace(System.err);
		                System.err.println("SQLState: " + ((SQLException) e).getSQLState());
		                System.err.println("Error Code: " + ((SQLException) e).getErrorCode());
		                System.err.println("Message: " + e.getMessage());
		                Throwable t = ex.getCause();
		                while (t != null) {
		                    System.out.println("Cause: " + t);
		                    t = t.getCause();
		                }
		            }
		        }
		    }
		    
		    
		    
		    
		    public void ajouterFichier(file files) {
		        loadDatabase();
		        Statement statement = null;
		        ResultSet resultat = null;
                
		        try {
		        	statement = connexion.createStatement();
		        	
		        	// Exécution de la requête
		            
		            PreparedStatement preparedStatement = connexion.prepareStatement("INSERT INTO file(fichier) VALUES(?);");
		            preparedStatement.setString(1, files.getFichier());
		           
		            preparedStatement.executeUpdate();
		            
		            
		            } catch (SQLException e) {
		            e.printStackTrace();
		        }
		    }
    
		    
		    
		    public String recupererFichier(){
		        Statement statement = null;
		        ResultSet resultat = null;
                 try{
		        loadDatabase();
		        statement = connexion.createStatement();

	            // Exécution de la requête
	            resultat = statement.executeQuery("SELECT fichier FROM file ;");

	            // Récupération des données
	          
	                String fichier = resultat.getString("fichier");
	                
	              return fichier;
		    } catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		            
		                
		      return null;       
		            
		        
		        
		        
		        
		    }
		    
	 
}






	 
	 
	 
	 


