<!DOCTYPE html>
<html>
	<head>
		<title>LATIHAN 3 DPBO 2022</title>
		
        <?php
        include "PC.php";
     
	
       
        $cpu = new CPU();
        $disk = new Disk();
        $ram = new RAM();

        $cpu->setCPUName("Intel Core i9 9700x");
        $cpu->setCPUPrice(12000000);
        $disk->setDiskTipe("SSD");
        $disk->setDiskSize(2000);
        $disk->setDiskprice(1500000);
        $ram->setRamSize(16);
        $ram->setRamprice(1700000);

        $baru = new PC($cpu, $disk, $ram);
        $baru->setTotalPrice($cpu, $disk, $ram);




        ?>

      

    <style>

    table, th,td{
    border: 1px solid black;
    padding: 20px;
    border-collapse: collapse;
    }

  
    </style>

    </head>
	
	<body>
	
	
		<div class="container">
			<br>
			<CENTER><h1>Data PC</h1></CENTER>
			
		<CENTER>
			<table>
				<thead>
					<tr>
						<th >CPU name</th>
						<th >Disk Tipe</th>
						<th >Disk Size</th>
						<th >RAM</th>
                        <th >Total Price</th>
				
					
	
					</tr>
				</thead>
				<?php
						
						echo "<tr>";
						echo "<td>".$cpu->getCPUName()."</td>";
						echo "<td>".$disk->getDiskTipe()."</td>";
						echo "<td>".$disk->getDiskSize()."</td>";
                        echo "<td>".$ram->getRamSize()."</td>";
						echo "<td>".$baru->getTotalPrice()."</td>";
						
                        
                      	echo "</td>";
						echo "</tr>";
						
				
				?>
			</table>
            </CENTER>
		</div>
	</body>
</html>
