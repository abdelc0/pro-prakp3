<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=register_script" method="post">
        <div class="mb-3">
          <label for="inputEmail" class="form-label"> vul hier uw Email address</label>
          <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"   autofocus>
          <div id="emailHelp" class="form-text">uw privacy is gegarandeerd...</div>
        </div>

        <button type="submit" class="btn btn-warning btn-lg btn-block ">registreer</button>
      </form>
    </div>
    <div class="col-12 col-sm-6">
      <img src="https://www.ledgerinsights.com/wp-content/uploads/2021/03/football-soccer-810x524.jpg" alt="" class="w-75 mx-auto d-block">
    </div>
  </div>
</div> -->


<div class="wrapper">

    
    <form class="form-signin" action="./index.php?content=register_script" method="post">    
      <h2 class="form-signin-heading">regsiter</h2>
      <input name="email" type="email" class="form-control" id="inputEmail"placeholder="Email Address" aria-describedby="emailHelp" required autofocus>
    
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
  <style>@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
}
  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	
  }
	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
  }
    @include box-sizing(border-box);

		:focus {
		  z-index: 2;
		}
	

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

</style>