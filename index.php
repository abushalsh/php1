<!DOCTYPE html>
<html lang="en">

<head>
	<title>Data</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
	<center>
		<h1 style="margin:70px">Insert Data</h1>

		<form action="insert.php" method="post">
			

		<div class="col-md-5">
		    <label for="area" class="form-label"></label>
              <select class="form-select container" id="area" required="" name="area">
                <option value="">Area</option>
                <option>Riyadh</option>
                <option>Jeddah</option>
                <option>Dammam</option>
              </select>
		</div>
		



		<div class="col-md-5">
			<label for="tanktype" class="form-label"></label>
              <select class="form-select container" id="tanktype" required="" name="tanktype">
                <option value="">Type</option>
                <option>Bladder</option>
                <option>Folding</option>
                <option>Above Ground Fiber Glass Storage</option>
              </select>
		</div>


		<div class="col-md-5">
			<label for="tanksize" class="form-label"></label>
              <select class="form-select container" id="tanksize" required="" name="tanksize">
                <option value="">Size</option>
                <option>500</option>
                <option>1000</option>
                <option>1500</option>
                <option>3000</option>
                <option>5000</option>
                <option>10000</option>
              </select>
		</div>
			
			<input class="btn btn-primary btn-lg" style="margin: 50px" type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
