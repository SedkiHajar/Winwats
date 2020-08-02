<%@ page import="com.mesClasses.DemandeE" %>
<%@ page import="java.util.ArrayList" %>
<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps </title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
   <%@include file="menuA.jsp"%>
</head> 
<body>
<%ArrayList<DemandeE> entreprises = (ArrayList<DemandeE>) request.getAttribute("utilisateurs"); %>
  <div id="map" style="width: 1500px; height: 800px;"></div>

  <script type="text/javascript">
    
    var locations = [
      ['ETA', 33.993566, -6.879448, 0]
    ];
    
    <%for(int i=0; i<entreprises.size();i++) { %>
    	
    	locations.push([ '<%=entreprises.get(i).getNom()%>  <%=entreprises.get(i).getPoste()%>: <%=entreprises.get(i).getShift()%>',<%=entreprises.get(i).getLat()%>, <%=entreprises.get(i).getLng()%>,<%=i+1%>]);
    	
 <%   } %>

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(34.01325, -6.83255),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
  	    iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
   
  </script>
  <form method="post" action="Position" >
  <input type="file"  name="fichier">
  <button type="submit" class="btn btn-outline-dark btn-lg">Joindre Fichier</button>
     
 </form>
</body>
</html>