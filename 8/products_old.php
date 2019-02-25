<?php
// ******************************************************
// ** YOU ARE TO ADD YOU PRODUCT DATA INTO THIS ARRAY  **
// ******************************************************

	$productArray = array(
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB1\"><id>0001</id><title>Title Text Prod 1</title><brand>Brand1Name</brand><price>1.00</price><description>Description Text 1</description><picture>0001.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB1\"><id>0002</id><title>Title Text Prod 2</title><brand>Brand2Name</brand><price>2.00</price><description>Description Text 2</description><picture>0002.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB1\"><id>0003</id><title>Title Text Prod 3</title><brand>Brand2Name</brand><price>3.00</price><description>Description Text 3</description><picture>0003.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB1\"><id>0004</id><title>Title Text Prod 4</title><brand>Brand3Name</brand><price>4.00</price><description>Description Text 4</description><picture>0004.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB2\"><id>0005</id><title>Title Text Prod 5</title><brand>Brand2Name</brand><price>5.00</price><description>Description Text 5</description><picture>0005.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB2\"><id>0006</id><title>Title Text Prod 6</title><brand>Brand2Name</brand><price>6.00</price><description>Description Text 6</description><picture>0006.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB2\"><id>0007</id><title>Title Text Prod 7</title><brand>Brand2Name</brand><price>7.00</price><description>Description Text 7</description><picture>0007.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB2\"><id>0008</id><title>Title Text Prod 8</title><brand>Brand1Name</brand><price>8.99</price><description>Description Text 8</description><picture>0008.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB3\"><id>0009</id><title>Title Text Prod 9</title><brand>Brand3Name</brand><price>9.99</price><description>Description Text 9</description><picture>0009.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB3\"><id>0010</id><title>Title Text Prod 10</title><brand>Brand2Name</brand><price>10.00</price><description>Description Text 10</description><picture>0010.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB3\"><id>0011</id><title>Title Text Prod 11</title><brand>Brand4Name</brand><price>11.00</price><description>Description Text 11</description><picture>0011.jpg</picture></product>\n",
		"<product top-level-category=\"TOP1\" sub-level-category=\"T1-SUB3\"><id>0012</id><title>Title Text Prod 12</title><brand>Brand2Name</brand><price>12.00</price><description>Description Text 12</description><picture>0012.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB1\"><id>0013</id><title>Title Text Prod 13</title><brand>Brand2Name</brand><price>13.00</price><description>Description Text 13</description><picture>0013.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB1\"><id>0014</id><title>Title Text Prod 14</title><brand>Brand1Name</brand><price>14.00</price><description>Description Text 14</description><picture>0014.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB1\"><id>0015</id><title>Title Text Prod 15</title><brand>Brand2Name</brand><price>15.00</price><description>Description Text 15</description><picture>0015.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB1\"><id>0016</id><title>Title Text Prod 16</title><brand>Brand3Name</brand><price>16.00</price><description>Description Text 16</description><picture>0016.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB2\"><id>0017</id><title>Title Text Prod 17</title><brand>Brand2Name</brand><price>17.00</price><description>Description Text 17</description><picture>0017.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB2\"><id>0018</id><title>Title Text Prod 18</title><brand>Brand1Name</brand><price>18.00</price><description>Description Text 18</description><picture>0018.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB2\"><id>0019</id><title>Title Text Prod 19</title><brand>Brand2Name</brand><price>19.00</price><description>Description Text 19</description><picture>0019.jpg</picture></product>\n",
		"<product top-level-category=\"TOP2\" sub-level-category=\"T2-SUB2\"><id>0020</id><title>Title Text Prod 20</title><brand>Brand2Name</brand><price>20.00</price><description>Description Text 20</description><picture>0020.jpg</picture></product>\n"
	);

// *******************************************************************
// ** YOU MUST NOT CHANGE ANY OF THE CODE BELOW THIS COMMENT 		**
// ** IN THIS FILE UNLESS AUTHORISED TO DO SO BY THE MODULE LEADER  **
// *******************************************************************
	
	echo "<?xml version=\"1.0\"?>\n";
	
	// Check to see what we are sending
	if (empty($_GET))
	{
		// Send all products
		echo "<products>";
		for($x = 0; $x < 20; $x++)
		{
			echo $productArray[$x];
		}
		echo "</products>";
	}
	else if(array_key_exists('homepage', $_GET))
	{
		// The index.html is asking for carousel products
		echo "<homepageProducts>";
		
		$prodChosen = [];
		
		for ($i = 0; $i < 6; $i=$i+1)
		{
			echo "<prodID>00";
			
			// Generate product id
			$val = rand(1, 20);
			
			if ($i > 0)
			{
				$chosen = 0;
				
				// Check it has not already been chosen
				while ($chosen == 0)
				{
					for ($v=0; $v < $i; $v++)
					{
						if ($prodChosen[$v] == $val)
						{
							$chosen = 1;
						}
					}
					
					if ($chosen == 1)
					{
						$val = rand(1, 20);
						$chosen = 0;
					}
					else
					{
						$chosen = 1;
					}
				}
			}
			
			// Debug line
			// error_log($val, 4);
			
			$prodChosen[$i] = $val;
			
			if ($val < 10)
			{
				echo "0", $val;
			}
			else
			{
				echo $val;
			}
			
			echo "</prodID>";
		}
		
		echo "</homepageProducts>";
	}
	else
	{
		// Must be a search
		echo "<results>";
		$engine[20][2];
		
		for ($x=0; $x < 20; $x++)
		{
			$engine[$x][0] = $x;
			$engine[$x][1] = 0;
		}
		
		// Only add products if there is an actual term
		if (array_key_exists('searchTerm', $_GET))
		{
			if (strlen($_GET['searchTerm']) > 0)
			{
				$bits = explode(" ", $_GET['searchTerm']);
				if (count($bits) == 1)
				{
					//Only one term - check each product
					for ($x=0; $x < 20; $x++)
					{
						$engine[$x][1] = substr_count(strtolower($productArray[$x]), strtolower($_GET['searchTerm']));
					}
				}
				else
				{
					//Multiple terms
					// Check whole string of terms against the products
					for ($x=0; $x < 20; $x++)
					{
						$engine[$x][1] = substr_count(strtolower($productArray[$x]), strtolower($_GET['searchTerm']));
					}
					
					// Check each individual term against the products
					for ($x=0; $x < 20; $x++)
					{
						for ($y=0; $y < count($bits); $y++)
						{
							$engine[$x][1] += substr_count(strtolower($productArray[$x]), strtolower($bits[$y]));
						}
					}
				}
				
				// Now sort them into count order
				for ($x=0; $x < 19; $x++)
				{
					for ($y=$x + 1; $y < 20; $y++)
					{
						if ($engine[$x][1] < $engine[$y][1])
						{
							// Swap them
							$tmp = $engine[$x];
							$engine[$x] = $engine[$y];
							$engine[$y] = $tmp;
						}
					}
				}
				
				// Only output the products with a count > 0
				for ($x=0; $x < 20; $x++)
				{
					if ($engine[$x][1] > 0)
					{
						echo $productArray[$engine[$x][0]];
					}
				}
				
			}
		}
		
		echo "</results>";
	}
?>