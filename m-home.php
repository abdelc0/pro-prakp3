<div class="cards-list">
<a href="./index.php?content=archief"> 
<div class="card 1">
  <div class="card_image"> <img src="https://cdn.dribbble.com/users/398490/screenshots/1716348/users.gif" /> </div>
  <div class="card_title title-white">
    <p>archief</p>
  </div>
</div>


<a href="./index.php?content=news"> 
  <div class="card 2">
  <div class="card_image">
    <img src="https://c.tenor.com/MV8mvg7P7xAAAAAC/breaking-news-news.gif" />
    </div>
  <div class="card_title title-white">
    <p>news</p>
  </div>
</div>
</a>




<a href="./index.php?content=read"> 
<div class="card 3">

  <div class="card_image">
    <img src="https://images.squarespace-cdn.com/content/v1/5478b899e4b0a1e9ef843bef/1489711468608-16865QR1K0JIKALFSG1C/EDIT_LOGOANIM.gif?format=2500w" />
  </div>
  <div class="card_title">
  
    


  </div>
</div>
</a>
  
  
<style>.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}
a{
    text-decoration: none;
    color:red;
    padding: 30px;
}
.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}
p{
    color: black;
}


/*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/</style>