<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>tableau</title>
</head>
<body>
    <table width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                    <th>titre</th>
				                            <th>prix</th>
                                        </tr>
                                    </thead>
                           
                                    <tbody>
	     <?php
	   $link1 = mysqli_connect("192.168.56.102","wiam","Wiam@2000","app") or die
       ("Error " . mysqli_error($link1));
			$sql = mysqli_query ($link1,"select * from books ");
			 while($row = mysqli_fetch_array($sql) ) {
				 $titre=$row['title'];
				 $prix=$row['price'];
				 ?> 
			  <tr>
				<td><?php echo $titre;?></td> 
				<td><?php echo $prix;?></td> 
			  </tr>
</body>
</html>
