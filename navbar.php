<?php
  $active = (isset($_GET["content"]))? $_GET["content"]:"";
?>





<header>
        <nav class="navbar">
          <div class="brand-title">son</div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="navbar-links">
            <ul>
              <li><a href="./index.php?content=home">Home</a></li>
            
           
          
              
            
    
              
          


        
        <?php
        // var_dump($_SESSION);exit();
        if (isset($_SESSION["id"])){
          switch($_SESSION["userrol"]){
            case'admin':
              echo'<li><a href="./index.php?content=Archief">Archief</a></li>
              <li><a href="./index.php?content=admindashboard">admin</a></li>
              
      ';



              break;          
            case 'root':
             echo' <li class="nav-item ">
              <a class="nav-link ';echo ( $active ==  "rootpage") ? "active": "" ;echo'" href="./index.php?content=rootpage">rootpage</a>
            </li>';


            break;
            case 'moderator':
              echo' <li><a href="./index.php?content=Archief">Archief</a></li>
              <li><a href="./index.php?content=m-home">writer</a></li>';
             

            break;
            case 'customer':
            echo'  <li><a href="./index.php?content=Archief">Archief</a></li>';


            break;
            default:

            
            break;



          }

            echo ' 
            
            <li><a href="./index.php?content=uitloggen">uitloggen</a></li>';

        } else {
          echo '
          <li><a href="./index.php?content=register">register</a></li>
          <li><a href="./index.php?content=inloggen">inloggen</a></li>
           ';
              }

        ?>
     
            </ul>
          </div>
        </nav>

    </header>
    

    

    <style>
.navbar {
      display: flex;
      position: relative;
      justify-content: space-between;
      align-items: center;
      background-color: #424242;
      color: white;
    }
    
    .brand-title {
      font-size: 1.5rem;
      margin: .5rem;
    }
    
    .navbar-links {
      height: 100%;
    }
    
    .navbar-links ul {
      display: flex;
      margin: 0;
      padding: 0;
    }
    
    .navbar-links li {
      list-style: none;
    }
    
    .navbar-links li a {
      display: block;
      text-decoration: none;
      color: white;
      padding: 1rem;
    }
    
    .navbar-links li:hover {
      background-color: #555;
      transition: 0.8s;
    }
    
    .toggle-button {
      position: absolute;
      top: .75rem;
      right: 1rem;
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;
    }
    
    .toggle-button .bar {
      height: 3px;
      width: 100%;
      background-color: white;
      border-radius: 10px;
    }
    
    @media (max-width: 800px) {
      .navbar {
          flex-direction: column;
          align-items: flex-start;
      }
    
      .toggle-button {
          display: flex;
      }
    
      .navbar-links {
          display: none;
          width: 100%;
      }
    
      .navbar-links ul {
          width: 100%;
          flex-direction: column;
      }
    
      .navbar-links ul li {
          text-align: center;
      }
    
      .navbar-links ul li a {
          padding: .5rem 1rem;
      }
    
      .navbar-links.active {
          display: flex;
      }
    }</style>