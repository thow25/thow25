<html>
<?php
if($_POST[team]){
	$team = $_POST[team];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($team) {
					case "CLE" :
						$teamname = 'Cleveland Browns';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						
						break;
					case "CIN" :
						$teamname = 'Cincinnati Bengals';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "PIT" :
						$teamname = 'Pittsburgh Steelers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "BAL" :
						$teamname = 'Baltimore Ravens';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "TEN" :
						$teamname = 'Tennessee Titans';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "HOU" :
						$teamname = 'Houston Texans';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "IND" :
						$teamname = 'Indianapolis Colts';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "JAX" :
						$teamname = 'Jacksonville Jaguars';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "KC" :
						$teamname = 'Kansas City Chiefs';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "SD" :
						$teamname = 'San Diego Chargers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "OAK" :
						$teamname = 'Oakland Raiders';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "DEN" :
						$teamname = 'Denver Broncos';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NYJ" :
						$teamname = 'New York Jets';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NE" :
						$teamname = 'New England Patriots';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "BUF" :
						$teamname = 'Buffalo Bills';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "MIA" :
						$teamname = 'Miami Dolphins';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "CHI" :
						$teamname = 'Chicago Bears';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "GB" :
						$teamname = 'Green Bay Packers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "DET" :
						$teamname = 'Detroit Lions';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "MIN" :
						$teamname = 'Minnesota Vikings';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "ATL" :
						$teamname = 'Atlanta Falcons';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NO" :
						$teamname = 'New Orleans Saints';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "TB" :
						$teamname = 'Tampa Bay Buccaneers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "CAR" :
						$teamname = 'Carolina Panthers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "SEA" :
						$teamname = 'Seattle Seahawks';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "SF" :
						$teamname = 'San Francisco 49ers';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "STL" :
						$teamname = 'St Louis Rams';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "ARI" :
						$teamname = 'Arizona Cardinals';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NYG" :
						$teamname = 'New York Giants';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "PHI" :
						$teamname = 'Philadelphia Eagles';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "WAS" :
						$teamname = 'Washington Redskins';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "DAL" :
						$teamname = 'Dallas Cowboys';
						$q = $nfldb->prepare('SELECT totalYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					default:
						echo "Invalid team entered";
						break;
					}
				}
else if($_POST[teamtwo]){
	$teamtwo = $_POST[teamtwo];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($teamtwo) {
					case "CLE" :
						$teamname = 'Cleveland Browns';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "CIN" :
						$teamname = 'Cincinnati Bengals';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "PIT" :
						$teamname = 'Pittsburgh Steelers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "BAL" :
						$teamname = 'Baltimore Ravens';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "TEN" :
						$teamname = 'Tennessee Titans';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "HOU" :
						$teamname = 'Houston Texans';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "IND" :
						$teamname = 'Indianapolis Colts';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "JAX" :
						$teamname = 'Jacksonville Jaguars';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "KC" :
						$teamname = 'Kansas City Chiefs';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "SD" :
						$teamname = 'San Diego Chargers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "OAK" :
						$teamname = 'Oakland Raiders';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "DEN" :
						$teamname = 'Denver Broncos';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NYJ" :
						$teamname = 'New York Jets';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NE" :
						$teamname = 'New England Patriots';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "BUF" :
						$teamname = 'Buffalo Bills';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "MIA" :
						$teamname = 'Miami Dolphins';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "CHI" :
						$teamname = 'Chicago Bears';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "GB" :
						$teamname = 'Green Bay Packers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "DET" :
						$teamname = 'Detroit Lions';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "MIN" :
						$teamname = 'Minnesota Vikings';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "ATL" :
						$teamname = 'Atlanta Falcons';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NO" :
						$teamname = 'New Orleans Saints';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "TB" :
						$teamname = 'Tampa Bay Buccaneers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "CAR" :
						$teamname = 'Carolina Panthers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "SEA" :
						$teamname = 'Seattle Seahawks';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "SF" :
						$teamname = 'San Francisco 49ers';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "STL" :
						$teamname = 'St Louis Rams';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "ARI" :
						$teamname = 'Arizona Cardinals';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NYG" :
						$teamname = 'New York Giants';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "PHI" :
						$teamname = 'Philadelphia Eagles';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "WAS" :
						$teamname = 'Washington Redskins';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "DAL" :
						$teamname = 'Dallas Cowboys';
						$q = $nfldb->prepare('SELECT totalYards, passYards, rushYards FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					default:
						echo "Invalid team entered";
						break;
					}
				}
else if($_POST[teamthree]){
	$teamthree = $_POST[teamthree];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($teamthree) {
					case "CLE" :
						$teamname = 'Cleveland Browns';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "CIN" :
						$teamname = 'Cincinnati Bengals';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "PIT" :
						$teamname = 'Pittsburgh Steelers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "BAL" :
						$teamname = 'Baltimore Ravens';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "TEN" :
						$teamname = 'Tennessee Titans';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "HOU" :
						$teamname = 'Houston Texans';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "IND" :
						$teamname = 'Indianapolis Colts';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "JAX" :
						$teamname = 'Jacksonville Jaguars';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "KC" :
						$teamname = 'Kansas City Chiefs';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "SD" :
						$teamname = 'San Diego Chargers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "OAK" :
						$teamname = 'Oakland Raiders';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "DEN" :
						$teamname = 'Denver Broncos';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "NYJ" :
						$teamname = 'New York Jets';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "NE" :
						$teamname = 'New England Patriots';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "BUF" :
						$teamname = 'Buffalo Bills';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "MIA" :
						$teamname = 'Miami Dolphins';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "CHI" :
						$teamname = 'Chicago Bears';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "GB" :
						$teamname = 'Green Bay Packers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "DET" :
						$teamname = 'Detroit Lions';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "MIN" :
						$teamname = 'Minnesota Vikings';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "ATL" :
						$teamname = 'Atlanta Falcons';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "NO" :
						$teamname = 'New Orleans Saints';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "TB" :
						$teamname = 'Tampa Bay Buccaneers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "CAR" :
						$teamname = 'Carolina Panthers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "SEA" :
						$teamname = 'Seattle Seahawks';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "SF" :
						$teamname = 'San Francisco 49ers';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "STL" :
						$teamname = 'St Louis Rams';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "ARI" :
						$teamname = 'Arizona Cardinals';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "NYG" :
						$teamname = 'New York Giants';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "PHI" :
						$teamname = 'Philadelphia Eagles';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "WAS" :
						$teamname = 'Washington Redskins';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					case "DAL" :
						$teamname = 'Dallas Cowboys';
						$q = $nfldb->prepare('SELECT * FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[1] total yards, $result[2] total passing yards, $result[3] total rushing yards,");	
						echo "<br>";
						print("$result[4] field goals made, $result[5] field goals attempted, $result[6] third downs converted, $result[7] third downs attempted,");	
						echo "<br>";
						print("$result[8] interceptions thrown, $result[9] fumbles lost, $result[10] interceptions received, $result[11] fumbles recovered,");
						echo "<br>";
						print("$result[12] points scored and $result[13] points allowed.");
						echo "<br>";
						print("Also the $teamname are in the $result[14] division and the $result[15] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[16] total touchdowns, consisting of $result[17] passing touchdowns and $result[18] rushing touchdowns");
						break;
					default:
						echo "Invalid team entered";
						break;
					}
				}
else if($_POST[div]){
	$div = $_POST[div];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($div) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AN" :
						$teamname = 'AFC North';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						
						break;
					case "AS" :
						$teamname = 'AFC South';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "AW" :
						$teamname = 'AFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "AE" :
						$teamname = 'AFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NN" :
						$teamname = 'NFC North';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NS" :
						$teamname = 'NFC South';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NW" :
						$teamname = 'NFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE teamName = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
					case "NE" :
						$teamname = 'NFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
	}
}
else if($_POST[divtwo]){
	$divtwo = $_POST[divtwo];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($divtwo) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AN" :
						$teamname = 'AFC North';						
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "AS" :
						$teamname = 'AFC South';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "AW" :
						$teamname = 'AFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "AE" :
						$teamname = 'AFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), rushYards FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NN" :
						$teamname = 'NFC North';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NS" :
						$teamname = 'NFC South';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NW" :
						$teamname = 'NFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NE" :
						$teamname = 'NFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
	}
}
else if($_POST[divthree]){
	$divthree = $_POST[divthree];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($divthree) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AN" :
						$teamname = 'AFC North';						
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "AS" :
						$teamname = 'AFC South';					
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "AW" :
						$teamname = 'AFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "AE" :
						$teamname = 'AFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "NN" :
						$teamname = 'NFC North';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "NS" :
						$teamname = 'NFC South';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "NW" :
						$teamname = 'NFC West';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
					case "NE" :
						$teamname = 'NFC East';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), conference, SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE division = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Also the $teamname is in the $result[13] conference.");
						echo "<br>";
						print("Finally the $teamname have scored $result[14] total touchdowns, consisting of $result[15] passing touchdowns and $result[16] rushing touchdowns");
						break;
	}
}
else if($_POST[con]){
	$con = $_POST[con];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($con) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AFC" :
						$teamname = 'AFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						
						break;
					case "NFC" :
						$teamname = 'NFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetchColumn();
						print("The $teamname had $result total yards in the 2014-2015 season");
												
						//fetch
						while($result = $q->fetch(\PDO::FETCH_ASSOC)){
							print_r($result);
						}
						break;
	}
}
else if($_POST[contwo]){
	$contwo = $_POST[contwo];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($contwo) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AFC" :
						$teamname = 'AFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
					case "NFC" :
						$teamname = 'NFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards and $result[2] total rushing yards in the 2014-2015 season");						
						break;
	}
}
else if($_POST[conthree]){
	$conthree = $_POST[conthree];
	try 
	{
		$nfldb = new PDO("sqlite:/home/thoward959/nflteams.db");
	}
	catch(PDOException $e)
	{
		echo "Could not connect to Database";
	}
	switch($conthree) {
					// keeping team name as the key here because I'm lazy but this is division and no the actual team name 
					case "AFC" :
						$teamname = 'AFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Finally the $teamname have scored $result[13] total touchdowns, consisting of $result[14] passing touchdowns and $result[15] rushing touchdowns");
						break;
					case "NFC" :
						$teamname = 'NFC';
						$q = $nfldb->prepare('SELECT SUM(totalYards), SUM(passYards), SUM(rushYards), SUM(fgMade), SUM(fgAttempted), SUM(thirdDownMade), SUM(thirdDownAttempted), SUM(intThrown), SUM(fumbleLost), SUM(defenseInt), SUM(defenseFumble), SUM(pointsScored), SUM(pointsGivenUp), SUM(TDs), SUM(paTDs), SUM(ruTDs) FROM teams WHERE conference = ?');
						$q->execute(array($teamname));
						$result = $q->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
						print("The $teamname had $result[0] total yards, $result[1] total passing yards, $result[2] total rushing yards,");	
						echo "<br>";
						print("$result[3] field goals made, $result[4] field goals attempted, $result[5] third downs converted, $result[6] third downs attempted,");	
						echo "<br>";
						print("$result[7] interceptions thrown, $result[8] fumbles lost, $result[9] interceptions received, $result[10] fumbles recovered,");
						echo "<br>";
						print("$result[11] points scored and $result[12] points allowed.");
						echo "<br>";
						print("Finally the $teamname have scored $result[13] total touchdowns, consisting of $result[14] passing touchdowns and $result[15] rushing touchdowns");
						break;
	}
}
else if($_POST[selection]){
	$selection = $_POST[selection];
	switch ($selection)
	{
		case "1":
			print("Team? (Example: Cleveland Browns):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="team">
				<option value = "CLE">Cleveland Browns</option>
				<option value = "CIN">Cincinnati Bengals</option>
				<option value = "PIT">Pittsburgh Steelers</option>
				<option value = "BAL">Baltimore Ravens</option>
				<option value = "TEN">Tennessee Titans</option>
				<option value = "HOU">Houston Texans</option>
				<option value = "IND">Indianapolis Colts</option>
				<option value = "JAX">Jacksonville Jaguars</option>
				<option value = "KC">Kansas City Chiefs</option>
				<option value = "SD">San Diego Chargers</option>
				<option value = "OAK">Oakland Raiders</option>
				<option value = "DEN">Denver Broncos</option>
				<option value = "NYJ">New York Jets</option>
				<option value = "NE">New England Patriots</option>
				<option value = "BUF">Buffalo Bills</option>
				<option value = "MIA">Miami Dolphins</option>
				<option value = "CHI">Chicago Bears</option>
				<option value = "GB">Green Bay Packers</option>
				<option value = "DET">Detroit Lions</option>
				<option value = "MIN">Minnesota Vikings</option>
				<option value = "ATL">Atlanta Falcons</option>
				<option value = "NO">New Orleans Saints</option>
				<option value = "TB">Tampa Bay Buccaneers</option>
				<option value = "CAR">Carolina Panthers</option>
				<option value = "SEA">Seattle Seahawks</option>
				<option value = "SF">San Francisco 49ers</option> // check this 
				<option value = "STL">St Louis Rams</option>
				<option value = "ARI">Arizona Cardinals</option>
				<option value = "NYG">New York Giants</option>
				<option value = "PHI">Philadelphia Eagles</option>
				<option value = "WAS">Washington Redskins</option>
				<option value = "DAL">Dallas Cowboys</option>
			</select>
			<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "2":
			print("Team? (Example: Cleveland Browns):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="teamtwo">
				<option value = "CLE">Cleveland Browns</option>
				<option value = "CIN">Cincinnati Bengals</option>
				<option value = "PIT">Pittsburgh Steelers</option>
				<option value = "BAL">Baltimore Ravens</option>
				<option value = "TEN">Tennessee Titans</option>
				<option value = "HOU">Houston Texans</option>
				<option value = "IND">Indianapolis Colts</option>
				<option value = "JAX">Jacksonville Jaguars</option>
				<option value = "KC">Kansas City Chiefs</option>
				<option value = "SD">San Diego Chargers</option>
				<option value = "OAK">Oakland Raiders</option>
				<option value = "DEN">Denver Broncos</option>
				<option value = "NYJ">New York Jets</option>
				<option value = "NE">New England Patriots</option>
				<option value = "BUF">Buffalo Bills</option>
				<option value = "MIA">Miami Dolphins</option>
				<option value = "CHI">Chicago Bears</option>
				<option value = "GB">Green Bay Packers</option>
				<option value = "DET">Detroit Lions</option>
				<option value = "MIN">Minnesota Vikings</option>
				<option value = "ATL">Atlanta Falcons</option>
				<option value = "NO">New Orleans Saints</option>
				<option value = "TB">Tampa Bay Buccaneers</option>
				<option value = "CAR">Carolina Panthers</option>
				<option value = "SEA">Seattle Seahawks</option>
				<option value = "SF">San Francisco 49ers</option> // check this 
				<option value = "STL">St Louis Rams</option>
				<option value = "ARI">Arizona Cardinals</option>
				<option value = "NYG">New York Giants</option>
				<option value = "PHI">Philadelphia Eagles</option>
				<option value = "WAS">Washington Redskins</option>
				<option value = "DAL">Dallas Cowboys</option>
			</select>
			<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "3":
			print("Team? (Example: Cleveland Browns):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="teamthree">
				<option value = "CLE">Cleveland Browns</option>
				<option value = "CIN">Cincinnati Bengals</option>
				<option value = "PIT">Pittsburgh Steelers</option>
				<option value = "BAL">Baltimore Ravens</option>
				<option value = "TEN">Tennessee Titans</option>
				<option value = "HOU">Houston Texans</option>
				<option value = "IND">Indianapolis Colts</option>
				<option value = "JAX">Jacksonville Jaguars</option>
				<option value = "KC">Kansas City Chiefs</option>
				<option value = "SD">San Diego Chargers</option>
				<option value = "OAK">Oakland Raiders</option>
				<option value = "DEN">Denver Broncos</option>
				<option value = "NYJ">New York Jets</option>
				<option value = "NE">New England Patriots</option>
				<option value = "BUF">Buffalo Bills</option>
				<option value = "MIA">Miami Dolphins</option>
				<option value = "CHI">Chicago Bears</option>
				<option value = "GB">Green Bay Packers</option>
				<option value = "DET">Detroit Lions</option>
				<option value = "MIN">Minnesota Vikings</option>
				<option value = "ATL">Atlanta Falcons</option>
				<option value = "NO">New Orleans Saints</option>
				<option value = "TB">Tampa Bay Buccaneers</option>
				<option value = "CAR">Carolina Panthers</option>
				<option value = "SEA">Seattle Seahawks</option>
				<option value = "SF">San Francisco 49ers</option> // check this 
				<option value = "STL">St Louis Rams</option>
				<option value = "ARI">Arizona Cardinals</option>
				<option value = "NYG">New York Giants</option>
				<option value = "PHI">Philadelphia Eagles</option>
				<option value = "WAS">Washington Redskins</option>
				<option value = "DAL">Dallas Cowboys</option>
			</select>
			<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "4":
			print("Division? (Example: AFC North):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="div">
				<option value = "AN">AFC NORTH</option>
				<option value = "AS">AFC SOUTH</option>
				<option value = "AW">AFC WEST</option>
				<option value = "AE">AFC EAST</option>
				<option value = "NN">NFC NORTH</option>
				<option value = "NS">NFC SOUTH</option>
				<option value = "NW">NFC WEST</option>
				<option value = "NE">NFC EAST</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "5":
			print("Division? (Example: AFC NORTH):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="divtwo">
				<option value = "AN">AFC NORTH</option>
				<option value = "AS">AFC SOUTH</option>
				<option value = "AW">AFC WEST</option>
				<option value = "AE">AFC EAST</option>
				<option value = "NN">NFC NORTH</option>
				<option value = "NS">NFC SOUTH</option>
				<option value = "NW">NFC WEST</option>
				<option value = "NE">NFC EAST</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "6":
			print("Division? (Example: AFC NORTH):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="divthree">
				<option value = "AN">AFC NORTH</option>
				<option value = "AS">AFC SOUTH</option>
				<option value = "AW">AFC WEST</option>
				<option value = "AE">AFC EAST</option>
				<option value = "NN">NFC NORTH</option>
				<option value = "NS">NFC SOUTH</option>
				<option value = "NW">NFC WEST</option>
				<option value = "NE">NFC EAST</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "7":
			print("Conference? (Example: NFC):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="con">
				<option value = "AFC">AFC</option>
				<option value = "NFC">NFC</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "8":
			print("Conference? (Example: NFC):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="contwo">
				<option value = "AFC">AFC</option>
				<option value = "NFC">NFC</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
		case "9":
			print("Conference? (Example: NFC):<br>");
			?>
			<form action="NFLDatabase.php" method="POST">
			<select name="conthree">
				<option value = "AFC">AFC</option>
				<option value = "NFC">NFC</option>
				</select>
				<input type="submit" name="Submit">
			</form>
			<?php
			break;
	}
}
else{
?>

<form action="NFLDatabase.php" method="POST">
<H1> Steps on how to interact with NFL Database </H1>
<table border="1">
<tr bgcolor="blue">
	<td> For Total Yards from a specific team, enter 1</td>
</tr>
<tr bgcolor ="red">
	<td> For Total Yards, Total Passing Yards and Total Rushing Yards from a specific team, enter 2</td>
</tr>
<tr bgcolor="blue">
<td> For All Statistics from a specific team, enter 3</td>
</tr>
<tr bgcolor="red">
<td> For Total Yards from a specific division, enter 4</td>
</tr>
<tr bgcolor="blue">
<td> For Total Running and Passing Yards from a specific division, enter 5"</td>
</tr>
<tr bgcolor="red">
<td> For All Statistics from a specific division, enter 6</td>
</tr>
<tr bgcolor="blue">
<td> For Total Yards from a specific conference, enter 7</td>
</tr>
<tr bgcolor="red">
<td> For Total Running and Passing Yards from a specific conference, enter 8</td>
</tr>
<tr bgcolor="blue">
<td> For All Statistics from a specific conference, enter 9</td>
</tr>
</table>
<select name="selection">
	<option value = "1">1</option>
	<option value = "2">2</option>
	<option value = "3">3</option>
	<option value = "4">4</option>
	<option value = "5">5</option>
	<option value = "6">6</option>
	<option value = "7">7</option>
	<option value = "8">8</option>
	<option value = "9">9</option>
</select>
<input type="submit" value="Submit">
</form>
</html>
<?php 
//if this doesn't work move it back to before the else and comment it out
$nfldb = null;
} ?>