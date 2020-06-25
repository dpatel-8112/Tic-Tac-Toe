<!DOCTYPE html>
<html>
<head>
	<title>Tic Toe Tac</title>
	<link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>

	<div class="container1">
		<div class="title">
			<marquee>Tic  - Tac  - Toe</marquee>
		</div>
		
		<div class="container2">
			<form>
				<div class="players">
					<div class="player">
						<div id="play1">Player 1</div>
						<select class="p1" onchange="myPlayer1(this)">
							<option value="" disabled selected hidden>Player  1 </option>
							<option value="o">Dot (O)</option>
							<option value="x">Cross (x)</option>
						</select>
					</div>
					<div class="player">
						<div id="play2">Player 2</div>
						<select class="p2" onchange="myPlayer2(this)">
							<option value="" disabled selected hidden>Player  2 </option>
							<option value="o">Dot (O)</option>
							<option value="x">Cross (x)</option>
						</select>
					</div>
				</div>
				<table>
					<thead>
						<tr >
							<td colspan="3" id="tr1"></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
						</tr>
						<tr>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
						</tr>
						<tr>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
							<td class="box" onclick="myFunction(this)"></td>
						</tr>
					</tbody>
				</table>
				<input type="button" onclick="location.reload()" value="Reset">
			</form>
		</div>
	</div>





	<script type="text/javascript">

		var player1 = "";
		var player2 = "";
		var flag = "";

		function myPlayer1(p1){
			player1 = "";

			if(p1.value == player2){
				alert("Please Choose Different Value");
				p1.value = "";
			}else{
				player1 =player1 + p1.value;
				p1.disabled = true;
				document.getElementById('play1').style.visibility = 'visible';
			}

		}
		function myPlayer2(p2){
			player2 = "";
			
			
			if(p2.value == player1){
				alert("Please Choose Different Value");
				p2.value = "";
			}else{
				player2 =player2 + p2.value;
				p2.disabled = true;
				document.getElementById('play2').style.visibility = 'visible';
			}

		}


		
		function myFunction(x) {

			if (player1 == "" || player2 == "" || player1 == player2) {
				alert("Please select Unique identity");
			}else{
						if(flag == ""){
								flag = 0;
								x.innerHTML = player1;  							
  								flag++;
  								x.onclick = null;
  								document.getElementById('tr1').innerHTML = 'Turn  ==>  Player 2 ';
						}else{
			
  							if( flag % 2 == 0){
  								x.innerHTML = player1;
  								flag++;
  								x.onclick = null;
  								document.getElementById('tr1').innerHTML = 'Turn  ==>  Player 2 ';
  							}
  							else{
  								x.innerHTML = player2;
  								flag++;
  								x.onclick = null;
  								document.getElementById('tr1').innerHTML = 'Turn  ==>  Player 1 ';
  							}

  						}
			}
		}



	</script>
</body>
</html>